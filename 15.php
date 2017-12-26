#!/usr/bin/env php
<?php

$array = [1, 2, 3, 4];

function value_sum($array) {
    $result = 0;
    foreach ($array as $value) {
        $result += $value;
    }
    $result = $result / count($array);
    return $result;
}

print_r (value_sum($array));