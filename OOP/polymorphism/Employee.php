<?php

class Employee
{
    private $name;
    private $age;
    private $address;

    private Salary $salary;

    /**
     * @param $name
     * @param $age
     * @param $address
     * @param Salary $salary
     */
    public function __construct($name, $age, $address, Salary $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    public function getSalary(): Salary
    {
        return $this->salary;
    }
}