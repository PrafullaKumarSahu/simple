<?php
namespace App\Core;

class App
{
	protected static $registry = [];

	public static function bind( $key, $value )
	{
		self::$registry[$key] = $value;
	}

	public static function resolve( $key )
	{
		if ( ! array_key_exists($key, self::$registry) ){
			throw new \Exception("Error Processing Request", 1);	
		}
		return self::$registry[$key];
	}
}
?>