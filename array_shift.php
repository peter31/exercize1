#!/usr/bin/env php
<?php

function my_array_shift(&$array)
{
    $value = null;
    foreach ($array as $key => $value) {
        unset($array[$key]);
        break;
    }
    return $value;
}