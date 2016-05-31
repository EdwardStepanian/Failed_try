 <?php
############## connection with functional ################3
$host = 'localhost';
$db_name = 'mydatabase';
$login = 'ed';
$password = 'ed';

$connect = mysql_connect('$host','$login','$password');
if($connect){
	mysql_select_db("data",$connect);
	echo "asda";
}

################ PHP DATA OBJECTS ################
############ PDO MYSQL PHP CONNECT ###############

$db = new PDO('mysql:host = localhost;dbname = data',$login,$password);
foreach ($db->query('SELECT*FROM') as $key => $value) {
	# code...
}