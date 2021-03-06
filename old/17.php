#!/usr/bin/env php
<?php

foreach ($argv as $key => $value) {
    if (count($argv) > 2) {
        die("One argument can be allowed!\n\n");
    }
}

$num = $argv[1];

function intsum($num) {
    if ($num < 100 || $num > 999) {
        die("Argument $num isn't an right integer!\n\n");
    }
    $c = $num % 10;
    $b = (($num - $c) % 100) / 10;
    $a = ($num - ($num % 100)) / 100;
    $result = $a + $b + $c;
    return $result;

}
$sum = intsum($num);

echo 'sum = ' . $sum . "\n";