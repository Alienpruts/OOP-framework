<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 10/09/18
 * Time: 9:40
 */

class User
{
    public $name;
    public $age;

    /**
     * User constructor.
     * @param $name
     * @param $age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __destruct()
    {
        echo 'End of the line folks';
    }

    public function sayHello()
    {
        return $this->name . ' aged ' . $this->age .  ' says hello';
    }


}

$user1 = new User('Bert', 37);

echo $user1->sayHello();