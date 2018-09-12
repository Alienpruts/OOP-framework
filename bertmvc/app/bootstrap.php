<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 10/09/18
 * Time: 14:04
 */

require_once __DIR__ . '/config/config.php';

// Autoloader Core Libraries
spl_autoload_register(function ($className){
    require_once 'libraries/' . $className . '.php';
});



