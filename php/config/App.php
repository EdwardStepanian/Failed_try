<?php
class App{
	protected $controller = 'home';

	protected $method = 'index';

	protected $params = [];

	public function __construct(){
		var_dump($this->parseUrl());
	}

	public function parseUrl(){
		if(isset($_SERVER['REQUEST_URI'])){
			return $url = explode('/',filter_var(rtrim($_SERVER['REQUEST_URI'], '/'),FILTER_SANITIZE_URL));
		}
	}
}
?>