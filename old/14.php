#!/usr/bin/env php
<?php



function my_array_shift($array) {
    if (count($array) == 0) {
        return null;
    }
    $value = reset($array);
    return $value;
}

$array = [10];
$total = my_array_shift($array);

var_dump($total);