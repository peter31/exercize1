#!/usr/bin/env php
<?php

require __DIR__ . '/libraries/functions.php';

check_and_show_help($argv,
    "Утилита выделит и выведет имя файла и его расширение 
    отдельно из переданном аргументом скрипта.
Пример использования: ./myfile.php 'D:\Soft\myfile.txt'\n");

if (count($argv) !== 2 ){
    die("Допустим только один аргумент!\n");
}

$integers = preg_replace('/[^0-9]/', '', $argv[1]);
$result = strlen($integers);

echo("Количество цифр в строке = $result\n");