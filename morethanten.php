#!/usr/bin/env php
<?php

require __DIR__ . '/libraries/functions.php';

check_and_show_help($argv,
    "Утилита обрабатывает первую строку  переданую аргументом скрипта.
Пример использования: ./explode.php 'onetwothree'\n");

if (count($argv) !== 2){
    die("Только один аргумент допускается\n");
}

$string = $argv[1];

if (strlen($string) > 10)
{
    $string = substr($string, 0, 6);
} else {
    $string = str_pad($string, 12, 'o');
}

echo("$string\n");