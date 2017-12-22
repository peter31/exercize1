#!/usr/bin/env php
<?php

echo ("\n");

if (count($argv) !==4) {
    die("Wrong arguments count!\n\n");
}

$arr = [];
$arr[] = $value;

if ($key !== 0) {
    $arr[] = $value;
}

$a = array_sum($arr);
$b = count($arr);

$result = $a / $b;

echo ('Sum of values = ' . $a . "\n");
echo ('Sum of elements = ' . $b . "\n");
echo ('Arithmetic mean = ' . $result . "\n\n");