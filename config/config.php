<?php
// Autoload
require __DIR__ . '/../vendor/autoload.php';

// load ENV
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Load library & Function
require 'database.php';
require 'helpers.php';

// Start session
session_start();

// Show Error 0 = off, 1 = on
ini_set('display_errors', 1);

// Set Timezone
date_default_timezone_set("Asia/Jakarta");

// Disable CORS
// header('Access-Control-Allow-Origin: *');

// Allow Headers
// header('Access-Control-Allow-Headers: *');

// Allow Method
// header('Access-Control-Allow-Method: POST, GET');

// Max Age
// header('Access-Control-Max-Age: 86400');

// Output Type
// header('Content-Type: application/json');