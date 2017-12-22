#!/usr/bin/env php
<?php

function myCount($myNewArr)
{
    $result = 0;
    foreach ($myNewArr as $value) {
        $result = $result + 1;
    }

    return $result;
}


$arr = [1, 2, 3, 4, 5, 6];


var_dump( myCount($arr) );die;
