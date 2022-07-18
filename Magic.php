<?php

class Student
{
    public string $id = "1";
    public string $name = "Daka";
    public int $age = 24;

    // To String
    public function __toString(): string
    {
        return "Student name : {$this->name}" . PHP_EOL;
    }

    // Invoke
    public function __invoke(...$arguments)
    {
        $join = join(",", $arguments);
        echo "Invoke Student with arguments $join" . PHP_EOL;
    }

    // Debug Info
    public function __debugInfo()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "age" => $this->age,
            "author" => "By System",
            "version" => "22.07.15"
        ];
    }
}

$mhs = new Student();

// konversi string dari object
echo $mhs;

$string = (string)$mhs;
echo $string;

// invoke
$mhs(1, 2, 3, 4, 5);

// debug
var_dump($mhs);
