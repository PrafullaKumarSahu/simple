<?php
// $router->register([
//     '' => 'controllers/index.php',
//     'about' => 'controllers/about.php',
//     'about/culture' => 'controllers/about-culture.php',
//     'contact' => 'controllers/contact.php',
//     'names' => 'controllers/add-name.php'
// ]);

// $router->get('', 'controllers/index.php');
// $router->get('about', 'controllers/about.php');
// $router->get('about/culture', 'controllers/about-culture.php');
// $router->get('contact', 'controllers/contact.php');
// $router->post('names', 'controllers/add-name.php');

use App\controllers;

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
//$router->get('about/culture', 'about-culture.php');
$router->get('contact', 'PagesController@contact');
//$router->post('names', 'add-name.php');


$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');
//$router->put('users', 'UsersController@index');
$router->patch('users', 'UsersController@update');
$router->delete('users', 'UsersController@delete');