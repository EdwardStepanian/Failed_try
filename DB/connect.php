<?php

/////// Connection /////////
 define('DB_DRIVER','mysql');
 define('DB_HOST', 'localhost');
 define('DB_NAME', 'pdodata');
 define('DB_USER', 'root');
 define('DB_PASS', 'ed');
 

try {   
	$db = new PDO(DB_DRIVER.":host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS);
} catch (PDOException $e) {
    sprintf("Error: %s", $e->getMessage());
    exit;
}

//////////////////////////////////////
