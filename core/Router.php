<?php
namespace App\Core;

class Router
{
	protected $routes = [
	    'GET' => [],
	    'POST' => [],
	    'PATCH' => [],
	    'PUT' => [],
	    'DELETE' => [],
	];

	public static function load( $file )
	{
		$router = new static;
		require  $file;
		return $router;
	}

	public function register($routes)
	{
		$this->routes = $routes;
	}

	public function direct($uri, $reuestType)
	{
		$reuestType = strtoupper($reuestType);

        if ( array_key_exists($uri, $this->routes[$reuestType]) ){
			
			return $this->callAction(
			...explode('@', $this->routes[$reuestType][$uri])
			);
		}
	}

	public function get($uri, $controller)
	{
		$this->routes['GET'][$uri] = $controller;
	}

	public function post($uri, $controller)
	{
		$this->routes['POST'][$uri] = $controller;	
	}

	public function put($uri, $controller)
	{
		$this->routes['PUT'][$uri] = $controller;	
	}

    public function patch($uri, $controller)
	{
		$this->routes['PATCH'][$uri] = $controller;	
	}

    public function delete($uri, $controller)
	{
		$this->routes["DELETE"][$uri] = $controller;	
	}

	protected function callAction($controller, $action)
	{
		$controller = "App\\Controllers\\{$controller}";
		$controller = new $controller;
		if ( ! method_exists($controller, $action) ){
			throw new Exception("{$controller} does not responds to the {$action} action!", 1);
			
		}
		return ( new $controller )->$action();
	}
}