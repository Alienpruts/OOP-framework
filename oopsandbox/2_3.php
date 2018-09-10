<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 10/09/18
 * Time: 9:07
 */


// Define a class
class User
{
    public $name;

    public function sayHello()
    {
        return 'Hello ' . $this->name;
    }
}


$user1 = new User();
$user1->name = 'Bert';
echo $user1->name . PHP_EOL;
echo $user1->sayHello() . PHP_EOL;

$user2 = new User();
$user2->name = 'Bertrand';
echo $user2->name . PHP_EOL;
echo $user2->sayHello() . PHP_EOL;