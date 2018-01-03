#!/usr/bin/env php
<?php

require __DIR__ . '/libraries/functions.php';

check_and_show_help($argv,
    "Утилита заменяет первые три символа переменной переданую аргументом скрипта.
Пример использования: ./explode.php 'abc'\n");

if (count($argv) !== 2) {
    die("Только один аргумент допускается!\n");
}

if (strlen($argv[1]) < 3){
    die("Не допустимая длина строки (мин. 3 символа\n");
}

$string = $argv[1];
$search = 'abc';
$replace = 'www';
$add = 'zzz';

if (strpos($string, $search) === 0){
    $string = str_replace($search, $replace, $string);
} else {
    $string = $string . $add;
}

echo("$string\n");

