<?php
if (!function_exists('base_url')) {
    function base_url()
    {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' : 'http://';
        $server = $_SERVER['SERVER_NAME'];

        return $protocol . $server . $_ENV['XAMPP_DIR'];
    }
}

if (!function_exists('url')) {
    function url()
    {
        $base_url = base_url();
        $path = $_SERVER['REQUEST_URI'];

        return $base_url . $path;
    }
}

if (!function_exists('assets')) {
    function assets($path)
    {
        return base_url() . "/assets/$path?version=" . filemtime(__DIR__ . "/../assets/$path");
    }
}
