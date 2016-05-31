<?php
	// Creating dabase connection functional
	$dbhost = 'localhost';
	$dbname = 'mydatabase';
	$dbuser = 'root';
	$dbpass = 'ed';
	$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	//Testing connection
	if(mysqli_connect_errno()){
		die("Connection failed" .mysqli_connect_error()."(".mysqli_connect_errno().")");
	};

################ PHP DATA OBJECTS ################
############ PDO MYSQL PHP CONNECT ###############

$db = new PDO('mysql:host = localhost;dbname = data',$login,$password);
foreach ($db->query('SELECT*FROM') as $key => $value) {
	# code...
}
?>