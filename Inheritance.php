<?php

namespace Data\Product;

class Product
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function info(): void
    {
        echo "Nama Produk : {$this->name}" . PHP_EOL;
    }
}

class Makanan extends Product
{
    private $jenis;

    public function __construct(string $name, string $jenis)
    {
        // tidak wajib (direkomendasikan)
        parent::__construct($name);
        $this->jenis = $jenis;
    }

    // Overriding
    public function info(): void
    {
        echo "=============================" . PHP_EOL;
        echo "Nama Produk dari Makanan : {$this->name}" . PHP_EOL;
        echo "Jenis Makanan : {$this->jenis}" . PHP_EOL;
        echo "=============================" . PHP_EOL;
    }

    // Akses Parent
    public function ParentInfo()
    {
        // return $this->info();
        return parent::info();
    }
}

// $taro = new Makanan("Taro");
// $taro->info();
