#!/usr/bin/env php
<?php

$array = [1, 2, 3, 4];

function my_count($array) {
    $result = 0;
    foreach ($array as $value) {
        $result++;
    }
    return ($result);
}

$funcResult = my_count($array);

echo('Result is ' .  $funcResult . "\n");