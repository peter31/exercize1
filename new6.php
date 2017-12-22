#!/usr/bin/env php
<?php

if (count($argv) <4) {
    die("Wrong arguments count\n\n");
}

foreach ($argv as $key => $value) {
    if ($key !==0) {
        if (strval(intval($value)) !== $value) {
            die("Argument $key is not an integer\n\n");
        }
    }
}

$sum = ($argv[1] + $argv[2] + $argv[3]);
$result = ($sum/3);

echo ('Result = ' . $result . "\n");



$arr = [];

foreach ($argv as $key => $value) {
    if ($key !== 0) {
        $arr[] = $value;
    }
}