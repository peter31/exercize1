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

$a = pow($argv[1], 2);
$b = pow($argv[2], 2);

echo ('Result = ' . ($a + $b) . "\n");
