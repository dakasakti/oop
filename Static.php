<?php

class Helper
{
    static public string $name = "MathHelper";

    static public function sum(int ...$numbers): int
    {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }

        return $total;
    }
}

$math = Helper::$name . PHP_EOL;
echo $math;

$hitung = Helper::sum(1, 2, 3, 4, 5);
echo $hitung;
