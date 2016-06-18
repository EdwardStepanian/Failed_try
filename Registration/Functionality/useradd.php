<?php


session_start();

// if(isset($_SESSION['id'])){
// 	header("Location: /");
// }

require '../../DB/connect.php';


$username = (isset($_POST["username"]) ? $_POST["username"] : null);
$name = (isset($_POST["name"]) ? $_POST["name"] : null);
$pass = md5($_POST['password']);
$email = (isset($_POST['email']) ? $_POST['email'] : null);
$sity = (isset($_POST['sity']) ? $_POST['sity'] : null);
$gender = (isset($_POST['a']) ? $_POST['a'] : null);

$execute = true;

$message = '';


if(isset($name) && isset($pass) && isset($email) && isset($gender) && isset($username)){

	$validUserName = strlen($username);
	$validName = strlen($name);
	$validPass = strlen($pass);
	$validEmail = strlen($email);
	
	 $queryName = $db->query("SELECT * FROM useradd where 
		username = '$username'");


	if($validUserName < 3 || $validUserName >30){
		$execute = false;
	}
	if($validName < 3 || $validName >30){
		$execute = false;
	}
	if($validPass < 3){
		$execute = false;
	}
	if($validEmail < 3 || $validEmail >30){
		$execute = false;
	}
	if($name == $queryName){
		$execute = false;
	}

}

if($execute){
/*
	$db -> query("
		Insert Into useradd(
			name,password,email,sity,gender	
		)
		Values(
			'$name','$pass','$email','$sity','$gender'
		)

	 ");
*/
	$sql = "INSERT INTO `useradd` (name, password, email, sity, gender, username) VALUES (:name, :pass, :email, :sity, :gender, :username)";
	$stmt = $db->prepare($sql);
	$stmt->bindParam('username', $username);
	$stmt->bindParam('name', $name);
	$stmt->bindParam('pass', $pass);
	$stmt->bindParam('email', $email);
	$stmt->bindParam('sity', $sity);
	$stmt->bindParam('gender', $gender);

	if( $stmt-> execute()){
		header("Location: http://main.dev/users.php");
	}else{
		 header("Location: http://main.dev/Registration/View/index.php");
	}



	// header("Location: http://main.dev/main.php");
}




    