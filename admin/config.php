<?php
// Error Reporting Turn On
ini_set('error_reporting', E_ALL);

// Setting up the time zone
date_default_timezone_set('Asia/Jakarta');

// Host Name
$dbhost = 'localhost';

// Database Name
$dbname = 'u1584567_xicia_consultine';

// Database Username
$dbuser = 'u1584567_admin';

// Database Password
$dbpass = 'karangtaruna2022';

// Defining base url
define("BASE_URL", "https://karangtaruna.bengkaliskab.org/");

// Getting Admin url
define("ADMIN_URL", BASE_URL . "admin" . "/");

try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $ex ) {
    echo "Connection error :" . $ex->getMessage();
}