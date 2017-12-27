#!/usr/bin/env php
<?php

function sum_of_arr_count($array)
{
    $result = 0;
    foreach ($array as $value) {
        $result++;
    }
    return $result;
}