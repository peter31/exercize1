#!/usr/bin/env php
<?php

$number = $argv[1];

function intsum($number) {
    if ($number < 100 || $number > 999) {
        die("Argument $number isn't an integer!\n\n");
    }
    $number = strval($number);
    $number[1] = "0";
    $number = intval($number);
    return $number;
}
$modNumber = intsum($number);

echo '$number = ' . $modNumber . "\n";