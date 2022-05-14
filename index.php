<?php

require_once( 'core/bootstarp.php' );
require 'vendor/autoload.php';
require 'config/database.php';
require 'start.php';

use App\Core\Router;
use App\Core\Request;

//OR
//use App\Core\{Router,Request};
Router::load('app\\routes.php')->direct(Request::uri(), Request::method());
