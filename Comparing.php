<?php

class Comparing
{
    public string $name;
    public int $age;
}

$student1 = new Comparing();
$student1->name = "Daka";
$student1->age = 24;

$student2 = new Comparing();
$student2->name = "Daka";
$student2->age = 24;

var_dump($student1 == $student2); // Properties
var_dump($student1 === $student2); // Object
