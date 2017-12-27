#!/usr/bin/env php
<?php

//require __DIR__ . '/libraries/functions.php';


function longest_string($array)
{
    $result = 0;
    foreach ($array as $value) {
        $value = strval($value);
        if (strlen($value) > $result) {
            $result = $value;
        }
    }
    return $result;
}