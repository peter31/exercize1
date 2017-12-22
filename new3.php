#!/usr/bin/env php
<?php

var_dump ($argv);

if (count($argv) < 3) {
    die("Wrong arguments count\n");
}

$result = 0;

foreach ($argv as $key => $value) {
    if ($key !== 0) {
        if (strval(intval($value)) !== $value) {
            die("Argument $key is not an integer\n\n");
        }
        $result = $result + $value;
    }
}

echo "$result\n\n";




































