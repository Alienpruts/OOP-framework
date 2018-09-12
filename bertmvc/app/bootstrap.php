<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 10/09/18
 * Time: 14:04
 */

use Dotenv\Dotenv;

require_once '../vendor/autoload.php';

try {
    (new Dotenv(__DIR__))->load();
} catch (Exception $exception) {
    echo "Could not load .env file, check if your configuration is correct";
    exit();
}

require_once __DIR__ . '/config/config.php';

// Autoloader Core Libraries
spl_autoload_register(function ($className){
    require_once 'libraries/' . $className . '.php';
});



