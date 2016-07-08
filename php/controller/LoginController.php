<?php


class LoginController{

	public function actionIndex(){
		header("Location: /Login/View/index.php");
	}
	public function actionSuccess(){
		return true;
	}
}


?>