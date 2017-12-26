#!/usr/bin/env php
<?php

$num = $argv[1];

function intsum($num) {
    if ($num < 100 || $num > 999) {
        die("Argument $num isn't an integer!\n\n");
    }
    $c = $num % 10;
    $b = (($num - $c) % 100) / 10;
    $a = ($num - ($num % 100)) / 100;
    $result = $a + $b + $c;
    return $result;

}
$sum = intsum($num);

echo 'sum = ' . $sum . "\n";