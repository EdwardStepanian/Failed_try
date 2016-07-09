<?php



function __autoload($className){
	require $className.".php";
}


require('../../DB/connect.php');

session_start();

if(isset($_SESSION['username'])){
	header("Location: /");
}

$username = $_POST['username'];
$pass = $_POST['password'];

$message = '';
$login = true;

if(!empty($username) && !empty($pass)){


	$records = $db->prepare('SELECT username,password FROM `useradd` WHERE username = :username');
	$records->bindParam('username', $username);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	if(count($results) > 0 && md5($pass) == $results['password']){
		$_SESSION['username'] = $results['username'];
		header("Location:  /models/Users.php");
	}else{

		header("Location: /Registration/View/index.php");
		echo "string";
	}
}


