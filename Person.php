<?php

// Membuat Class
class Person
{
    const AUTHOR = "Mahmuda Karima";

    // Properties
    // Type Declaration
    var string $name;

    // Nullable
    var ?string $address;

    // Default Value
    var string $country = "Indonesia";

    // Method
    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function __destruct()
    {
        echo "Object person {$this->name} is destroyed" . PHP_EOL;
    }

    function sayHello(?string $name)
    {
        // This Keyword
        if (is_null($name)) {
            echo "Hi, my name is {$this->name}" . PHP_EOL;
        } else {
            echo "Hello $name, my name is {$this->name}" . PHP_EOL;
        }
    }

    function info()
    {
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }
}

// Membuat Object (Constructor)
$person = new Person("Daka", "Palembang");

// Manipulasi Properties
// $person->name = "Diubah";
// $person->address = "Jakarta";
// $person->country = "Indonesia";

// Error
// $person->name = [];

// Display
var_dump($person);
echo "Name : {$person->name}" . PHP_EOL;
echo "Address : {$person->address}" . PHP_EOL;
echo "Country : {$person->country}" . PHP_EOL;

$person->sayHello("Dakasakti");
// $person->sayHello(null);

// Constant
define("APP_NAME", "BELAJAR PHP OOP");
const APP_VERSION = "1.0";

// Aksesnya Nempel ke class tidak bisa dari object (tidak perlu membuat object)
echo "Name Author : " . Person::AUTHOR . PHP_EOL;
$person->info();

// Destructor
echo "Program Selesai" . PHP_EOL;
