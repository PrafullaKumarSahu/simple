<?php
namespace App\Config;
use Illuminate\Database\Capsule\Manager as Capsule;
if ( $file = 'settings.ini' ){
    if (!$settings = parse_ini_file($file, TRUE, INI_SCANNER_RAW)) throw new exception('Unable to open ' . $file . '.');
    $capsule = new Capsule;
    $capsule->addConnection([
        'driver' => $settings['database']['driver'],
        'host' => $settings['database']['host'],
        'database' => $settings['database']['schema'],
        'username' => $settings['database']['username'],
        'password' => $settings['database']['password'],
        'prefix' => $settings['database']['prefix']
    ]);

    //Make this Capsule instance available globally.
    $capsule->setAsGlobal();

    //Setup the Eloquent ORM.
    $capsule->bootEloquent();
}