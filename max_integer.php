#!/usr/bin/env php
<?php

//require __DIR__ . '/libraries/functions.php';


function max_integer($array)
{
    $result = 0;
    foreach ($array as $value) {
        if ($value > $result) {
            $result = $value;
        }
    }
    return $result;
}

$result = max_integer($array);

echo ("$result");