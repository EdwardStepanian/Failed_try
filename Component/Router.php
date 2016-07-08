<?php

/**
 * Created by PhpStorm.
 * User: ed
 * Date: 6/10/16
 * Time: 10:43 AM
 */

class Router
{

	private $routes;

	public function __construct()
	{

		$this->routes = require ROOT.'/config/routes.php';

	}

    /**
    * Returns request string
    */
    private function getURI()
    {
    	if(!empty($_SERVER['REQUEST_URI']))
    	{
    		return trim($_SERVER['REQUEST_URI'],'/');
    	}

    }

    public function run()
    {
    	// get request string

    	$uri = $this->getURI();

  		// checking requests
    	foreach ($this->routes as $uriPattern => $path)
    	{
    		if(preg_match("~$uriPattern~", $uri))
    		{
    			$internalRoute = preg_replace("~$uriPattern~", $path, $uri);
    			$segments = explode('/', $internalRoute);
    			$controllerName = array_shift($segments).'Controller';
    			$controllerName = ucfirst($controllerName);
    			$actionName = 'action'.ucfirst(array_shift($segments));
    			$parametrs = $segments;

    			$controllerFile = ROOT.'/controller/'.$controllerName.'.php';
    			if (file_exists($controllerFile) ){
    				require $controllerFile;
    				$controllerObject = new $controllerName;
    				$result = call_user_func_array(array($controllerObject,$actionName), $parametrs);
    				if($result != null){
    					break;
    				}

    			}
    		}
    	}
    }
}

