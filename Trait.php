<?php

trait SayGoodBye
{
    use HasName;

    public function GoodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye {$this->name}" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    private string $name = "Admin";
}

trait Automate
{
    public abstract function automate(): void;
}

// Menggunakan trait
// Parent
class Job
{
    use HasName;

    public function GoodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye from {$this->name}" . PHP_EOL;
        } else {
            echo "Good Bye from $name" . PHP_EOL;
        }
    }
}

class People extends Job
{
    use SayGoodBye, Automate;

    // Abstract
    public function automate(): void
    {
        echo "This message created by system from user {$this->name}" . PHP_EOL;
    }

    // Overriding
    public function GoodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye Overriding {$this->name}" . PHP_EOL;
        } else {
            echo "Good Bye Overriding $name" . PHP_EOL;
        }
    }
}

$orang = new People();
$orang->GoodBye(null);
$orang->automate();

// var_dump($orang);
