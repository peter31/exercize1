#!/usr/bin/env php
<?php

$string = $argv[1];
$search = 'abc';
$replace = 'www';
$add = 'zzz';

if ($string == $search)
{
    $string = $replace;
} else {
    $string = $string . $add;
}

var_dump($string);

//$string = str_replace($search, $replace, $string);