<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 12/09/18
 * Time: 11:00
 */

// DB Parameters
define('DB_HOST', 'localhost');
define('DB_USER', getenv('DB_USER'));
define('DB_PASS', getenv('DB_PASS'));
define('DB_NAME', getenv('DB_NAME'));

// App Root
define('APP_ROOT', dirname(dirname( __FILE__)));

// URL Root
define('URL_ROOT', getenv('URL_ROOT'));

// Site Name
define('SITE_NAME', getenv('SITE_NAME'));