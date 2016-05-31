<?php
define('DB_DRIVER','mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'pdodata');
define('DB_USER', 'root');
define('DB_PASS', 'ed');


try {
    $db = new PDO(DB_DRIVER.":host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$sql = "SELECT * FROM data";
$rs = $db->query($sql);
$row = $rs->fetch();

var_dump($row);