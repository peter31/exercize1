#!/usr/bin/env php
<?php

$string = $argv[1];
$add = 'o';

if (strlen($string) > 10)
{
    $string = substr($string, 0, 6);
} else {
    $string = str_pad($string, 12, $add);
}

echo("$string\n");