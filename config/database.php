<?php
class DB
{
    public function connect()
    {
        $host = $_ENV['MYSQL_HOST'];
        $username = $_ENV['MYSQL_USERNAME'];
        $password = $_ENV['MYSQL_PASSWORD'];
        $database = $_ENV['MYSQL_DATABASE'];

        if ($host != "" && $username != "" && $password != "" && $database != "") {
            try {
                $server = "mysql:host=" . $host . ";dbname=" . $database;
                $conn = new PDO($server, $username, $password);

                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                return $conn;
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
    }

    public function query($query)
    {
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
