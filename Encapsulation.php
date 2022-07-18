<?php

class Category
{
    private string $name;
    private bool $expensive;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        if (trim($name) != "") {
            $this->name = $name;
        }
    }

    public function isExpensive(): bool
    {
        return $this->expensive;
    }

    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }
}

$category = new Category();

// Setter
$category->setName("HandPhone");
$category->setExpensive(true);
$category->setName("");

// Getter
echo $category->getName() . PHP_EOL;
echo $category->isExpensive() . PHP_EOL;
