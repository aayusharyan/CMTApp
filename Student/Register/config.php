<?php

session_start();
/* DATABASE CONFIGURATION */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'CMTApp');
//define("BASE_URL", "http://localhost/PHPLoginHash/");
/* END DATABASE CONFIGURATION */

function getDB() {
    $dbhost=DB_SERVER;
    $dbuser=DB_USERNAME;
    $dbpass=DB_PASSWORD;
    $dbname=DB_DATABASE;
    try {
        $dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
        $dbConnection->exec("set names utf8");
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbConnection;
    }
    catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
}


/* START GENERAL CONFIGURATION */
define ('CONF_NAME', "CPGCon 2018");
define ('HOST_NAME', "Sinhgad Institute of Technology");
define ("CMT_DEV", "Aayush Sinha");
/* END GENERAL CONFIGURATION */

?>
