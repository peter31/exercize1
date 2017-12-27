#!/usr/bin/env php
<?php

echo ("\n");

$arr = $argv;
//print_r ($arr);

array_shift($arr);
//print_r ($arr);

if (count($arr) <3) {
    die("Wrong arguments count!\n\n");
}

foreach ($arr as $key => $value) {
    if (strval(intval($value)) !== $value) {
        die("Argument $key isn't an integer!\n\n");
    }
}

$a = array_sum($arr);
$b = count($arr);

$result = $a / $b;

$percent = ($result / 100);
$inc1 = 30;
$inc2 = 120;

$result1 = $result + ($percent * $inc1);
$result2 = $result + ($percent * $inc2);

echo ('Result = ' . $result . "\n\n");
echo ('+ 30% = ' . $result1 . "\n\n");
echo ('+ 120% = ' . $result2 . "\n\n");