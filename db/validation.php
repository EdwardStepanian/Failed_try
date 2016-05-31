
<?php

$email = $_POST['email'];
$pass = $_POST['password'];

if(!$name || !$pass){
	include '../Login/login.php';
	echo "<hr />";
}
?>
<link rel="stylesheet" href="../Login/style.css">
