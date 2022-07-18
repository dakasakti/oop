<?php

interface HelloWorld
{
    function sayHello(): void;
}

$helloworld = new class("Testing") implements HelloWorld
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "{$this->name} Anonymous Class" . PHP_EOL;
    }
};
$helloworld->sayHello();
