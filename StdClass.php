<?php

$array = [
    "firstName" => "Mahmuda",
    "lastName" => "Karima"
];

$object = (object)$array;
var_dump($object);

$arrayLagi = (array)$object;
var_dump($arrayLagi);
