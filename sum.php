#!/usr/bin/env php
<?php

//require __DIR__ . '/libraries/functions.php';

$array = [1, 20, 3, 20, 5, 10];

echo "Сумма чисел больше 10 из переданных аргументов\n";

function sum($array)
{
    $result = 0;
    foreach ($array as $value) {
        if ($value > 10) {
            $result = $result + $value;
        }
    }
        return $result;
}

$result = sum($array);

echo ("$result");