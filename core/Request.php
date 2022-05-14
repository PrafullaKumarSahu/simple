<?php
namespace App\Core;

class Request
{
	public static function uri()
	{
		return trim(
			parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ),
			 '/'
			);
	}

	public static function method()
	{
		if ( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['_method']) && ! empty($_POST['_method']) ){	
			return $_POST['_method'];
		} else {
			return $_SERVER['REQUEST_METHOD'];
		}
	}
}