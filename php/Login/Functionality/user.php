<?php

class User{

	public $name = 'name';
	public $password = 'pass';
	public $email = 'email';
	public $sity = 'sity';
	public $gender = 'male';
	

	function sayHi(){
		echo "Hi!".$this->name;
		echo "This is your personal page in my project my dear".$this->name;
	}
	function about(){
		
	}


}

?>