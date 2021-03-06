#!/usr/bin/env php
<?php

require __DIR__ . '/libraries/functions.php';

echo ("\n");

$arr = $argv;
array_shift($arr);

checkElementsMoreThan($arr, 3);


foreach ($arr as $key => $value) {
    if (strval(intval($value)) !== $value) {
        die("Argument $key isn't an integer!\n\n");
    }
}

$result = array_sum($arr);

$percent = ($result / 100);
$inc1 = 30;
$inc2 = 120;
$div1 = 3;
$div2 = 5;

$result1 = $result + ($percent * $inc1);
$result2 = $result + ($percent * $inc2);
$result3 = $result % $div1;
$result4 = $result % $div2;


echo ('Result = ' . $result . "\n\n");
echo ('+ 30% = ' . $result1 . "\n\n");
echo ('+ 120% = ' . $result2 . "\n\n");
echo ('Modulo by 3 = ' . $result3 . "\n\n");
echo ('Modulo by 5 = ' . $result4 . "\n\n");
