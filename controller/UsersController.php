<?php

require_once ROOT.'/models/Users.php';

class UsersController{

	public function actionIndex(){
		// echo "string";
		$userlist = array();
		$userlist = Users::getUserInfo();
		echo '<pre>';
		var_dump($userlist);

		
		return true;
	}
	public function actionInfo($id){
		if($id){
			$user = Users::getUserName($id);
			var_dump($user);
		}else{
			echo "string";
		}
		return true;
	}
}
?>