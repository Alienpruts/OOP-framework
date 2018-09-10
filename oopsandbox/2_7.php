<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 10/09/18
 * Time: 11:01
 */

class User
{
    public $name;
    public $age;
    public static $minPassLength = 6;

    public static function validatePass($pass)
    {
        if (strlen($pass) >= self::$minPassLength){
            return true;
        }

        return false;
    }
}

$password = 'haha';
if (User::validatePass($password)){
    echo 'Valid';
} else {
    echo 'Not Valid!';
}