#!/usr/bin/env php
<?php

function change_num($number) {
    if ($number < 100 || $number > 999) {
        die("Argument $number wrong number!\n\n");
    }
    $number = strval($number);
    $number[1] = "0";
    $number = intval($number);
    return $number;
}