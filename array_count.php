#!/usr/bin/env php
<?php
function array_count($array)
{
    $result = 0;
    foreach ($array as $value) {
        $result ++;
    }
    return $result;
}