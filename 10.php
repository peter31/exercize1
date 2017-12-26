#!/usr/bin/env php
<?php

function shifting($array) {
    array_shift($array);
    return($array);
}

function integer_validation($array) {
    foreach ($array as $key => $value) {
        if (strval(intval($value)) !== $value) {
            die("Argument $key isn't an integer!\n\n");
        }
    }
}

function count_validation($array, $number) {
    if (count($array) < $number) {
        die("Wrong arguments count!\n\n");
    }
}

$array = shifting($argv);
integer_validation($array);
count_validation($array, 4);

print_r($array);

echo (count($array));



