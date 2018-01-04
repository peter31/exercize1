#!/usr/bin/env php
<?php

require __DIR__ . '/libraries/functions.php';

check_and_show_help($argv,
    "Утилита находит количество цифр в переданном аргументом скрипта.
Пример использования: ./findint.php 'dfg6dfg9 zd3cz 4zx2'\n");

if (count($argv) !== 2 ){
    die("Допустим только один аргумент!\n");
}

$integers = preg_replace('/[^0-9]/', '', $argv[1]);
$result = strlen($integers);

echo("Количество цифр в строке = $result\n");


