<?php

class Zero
{
    private array $property = [];

    public function __get($name)
    {
        // echo "Akses Property $name" . PHP_EOL;
        return $this->property[$name];
    }

    public function __set($name, $value)
    {
        // echo "Set Property $name dan $value" . PHP_EOL;
        return $this->property[$name] = $value;
    }

    public function __isset($name): bool
    {
        // echo "Isset $name" . PHP_EOL;
        return isset($this->property[$name]);
    }

    public function __unset($name)
    {
        // echo "Unset $name" . PHP_EOL;
        unset($this->property[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call Function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call Static Function $name with arguments $join" . PHP_EOL;
    }
}

$zero = new Zero();

// Set
$zero->firstName = "Mahmuda";

// Get
echo $zero->firstName . PHP_EOL;

// Isset
echo isset($zero->firstName) . PHP_EOL;

// Unset
unset($zero->firstName);

// Function Call
$zero->sayHello("Mahmuda Karima");
Zero::sayHello("Mahmuda Karima");
