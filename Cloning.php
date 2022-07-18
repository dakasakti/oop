<?php

class Student
{
    public string $id;
    public string $name;
    public int $age;

    // Menghapus data properties
    public function __clone()
    {
        unset($this->age);
    }
}

$mhs = new Student();
$mhs->id = "1";
$mhs->name = "Daka";
$mhs->age = 24;

$mhs2 = clone $mhs;

var_dump($mhs);
var_dump($mhs2);
