<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 10/09/18
 * Time: 10:44
 */

class User
{
    private $name;
    private $age;

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

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    public function getName()
    {
        return $this->name;
    }

    public function __get($property)
    {
        if (property_exists($this, $property)){
            return $this->$property;
        }

        return $this;
    }

    public function __set($name, $value)
    {
        if(property_exists($this, $name)){
            $this->$name = $value;
        }

        return $this;
    }
}

$user1 = new User('Bert', 37);
$user1->setName('Jef');
$user1->age = 100;
echo $user1->getName() . PHP_EOL;
echo $user1->age;


