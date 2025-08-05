<?php

require_once 'Employee.php';
require_once 'Salary.php';
require_once 'OrgSalary.php';

$employee = new Employee(
    'Mustafa',
    21,
    'Mansoura',
    new OrgSalary(4500, 2.5, 30, 40, 2, 20, 3.2)
);

var_dump($employee->getSalary()->calculateSalary());

