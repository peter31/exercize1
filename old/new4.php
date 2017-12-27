#!/usr/bin/env php
<?php

if (count($argv) !==3) {
    die("Wrong arguments count\n\n");
}

foreach ($argv as $key => $value) {
    if ($key !==0) {
        if (strval(intval($value)) !== $value) {
            die("Argument $key is not an integer\n\n");
        }
    }
}

$a = $argv[1];
$b = $argv[2];

echo 'Sum = ' . ($a + $b) . "\n";
echo 'Mult = ' . ($a * $b) . "\n\n";




































