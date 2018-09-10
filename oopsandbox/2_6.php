<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 10/09/18
 * Time: 10:54
 */

class User
{
    protected $name;
    protected $age;

    /**
     * User constructor.
     * @param string $name
     * @param $age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


}

class Customer extends User
{
    private $balance;

    /**
     * Customer constructor.
     * @param $balance
     */
    public function __construct($name, $age, $balance)
    {
        parent::__construct($name, $age);
        $this->balance = $balance;
    }


    public function pay($amount)
    {
        return $this->name . ' paid $' . $amount;
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param mixed $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }




}

$customer1 = new Customer('John', 29, 1654);
echo $customer1->pay(122) . PHP_EOL;
echo 'Balance is : ' . $customer1->getBalance();