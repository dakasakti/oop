<?php

abstract class Location
{
    protected string $street;
    protected string $district;
    protected string $city;
    protected string $province;
    protected string $country;

    abstract public function info();
}

class Address extends Location
{
    public function __construct(string $street, string $district, string $city, string $province, ?string $country = "Indonesia")
    {
        $this->street = $street;
        $this->district = $district;
        $this->city = $city;
        $this->province = $province;
        $this->country = $country;
    }

    public function info(): void
    {
        echo "Alamat : {$this->street}" . PHP_EOL;
        echo "Kecamatan : {$this->district}" . PHP_EOL;
        echo "Kabupaten/Kota : {$this->city}" . PHP_EOL;
        echo "Provinsi : {$this->province}" . PHP_EOL;
        echo "Negara : {$this->country}" . PHP_EOL;
    }
}

// $location = new Location();
$city = new Address("Jl. Raya Pig. No. 12", "Rambutan", "Banyuasin", "Sumatera Selatan");
$city->info();
