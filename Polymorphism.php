<?php

class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class Backend extends Programmer
{
}

class Frontend extends Programmer
{
}

class Company
{
    public Programmer $programmer;
}

$company = new Company();

$company->programmer = new Programmer("Daka");
var_dump($company);

$company->programmer = new Backend("Dwi");
var_dump($company);

$company->programmer = new Frontend("Pringgo");
var_dump($company);
