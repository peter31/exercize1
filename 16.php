#!/usr/bin/env php
<?php

$number = 235;

function intsum($number) {
    if ($number < 100 || $number > 999) {
        die("Argument $number isn't an integer!\n\n");
    }
    $number = strval($number);
    $num1 = $number[0];
    $num2 = $number[1];
    $num3 = $number[2];
    $number = intval($num1) + intval($num2) + intval($num3);
    return $number;
}
$sum = intsum($number);

echo 'sum = ' . $sum . "\n";




