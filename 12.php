#!/usr/bin/env php
<?php



function my_array_shift($array) {
    $value = null;
    foreach ($array as $value) {
            break;
    }
    return $value;
}

$array = ['id' => 13, 'name' => 'Vasia'];
$total = my_array_shift($array);

var_dump(current($array));



//echo('Result is ' .  $funcResult . "\n");