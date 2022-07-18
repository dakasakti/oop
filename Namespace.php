<?php

require_once "Inheritance.php";
require_once "Helper.php";

// Import
// Group
use Data\Product\{Makanan};
use function Helper\helpMe as info;
use const Helper\APPS;

// dari file Inheritance
$taro = new Makanan("Taro", "Ringan");
$taro->ParentInfo();
$taro->info();

// $taro->name; || ERROR karena akses private

// dari file Helper
echo info();
echo APPS;
