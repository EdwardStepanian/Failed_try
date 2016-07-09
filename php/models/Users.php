<?php
session_start();
class Users{
	public static function getUserName($id){
		$id = intval($id);
		if ($id) {
			require 'connect.php';
			$sql = 'SELECT * FROM `useradd` where id='. $id;
			$result = $db->query($sql);
			$result->setFetchMode(PDO::FETCH_ASSOC);
			$userslist = $result->fetch();

			return $userslist;
		}
	}
	public static function getUserInfo(){
		require 'connect.php';
		$sql = "SELECT id,username FROM `useradd`";
		$result = $db->query($sql);
		//$row = $result->fetch();
		$userslist = array();
		$i = 0;
		while($row = $result->fetch()){
			$userslist[$i]['id'] = $row['id'];
			$userslist[$i]['username']= $row['username'];
			$i++;
		}
		return $userslist;
	}	
}
?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
 if($_SESSION['id'])
	echo "string";
?>
	<a href="../Signout/View/logout.php">
		Prkeeeq!!
	</a>
</body>
</html>
 -->