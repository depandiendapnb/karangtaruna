<?php
    //Tell PHP to log errors
    ini_set('log_errors', 'On');
    //Tell PHP to not display errors
    ini_set('display_errors', 'Off');
    //Set error_reporting to E_ALL
    ini_set('error_reporting', E_ALL );
    /* Database credentials. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'u1584567_admin');
    define('DB_PASSWORD', 'karangtaruna2022');
    define('DB_NAME', 'u1584567_xicia_consultine');

    /* Attempt to connect to MySQL database */
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }else{
        echo "sukses terhubung ke database!";
    }
?>