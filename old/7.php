#!/usr/bin/env php
<?php

echo ("\n");

$arr = [];

foreach ($argv as $key => $value) {
    if ($key !== 0) {
        $arr[] = $value;
    }
}

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

echo ('Result = ' . $result . "\n\n");

//var_dump($arr);
