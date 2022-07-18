<?php

interface HasBrand
{
    public function getBrand(): string;
}

interface IsMaintenance
{
    public function IsMaintenance(): bool;
}

interface Car extends HasBrand, IsMaintenance
{
    public function drive(): void;

    public function getFuel(): int;
}

class Avanza implements Car
{
    public function getBrand(): string
    {
        return 'Avanza';
    }

    public function IsMaintenance(): bool
    {
        return true;
    }

    public function drive(): void
    {
        echo "Driving a car with {$this->getBrand()}" . PHP_EOL;
        echo "Is it in maintenance? " . ($this->IsMaintenance() ? 'Yes' : 'No') . PHP_EOL;
    }

    public function getFuel(): int
    {
        return 10;
    }
}

$car = new Avanza();
$car->drive();
echo "Fuel: " . $car->getFuel() . PHP_EOL;
