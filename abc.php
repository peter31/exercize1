#!/usr/bin/env php
<?php

require __DIR__ . '/libraries/functions.php';

check_and_show_help($argv,
    "Утилита заменяет первые три символа переменной переданую аргументом скрипта.
Пример использования: ./explode.php 'abc'\n");

$string = $argv[1];
$search = 'abc';
$replace = 'www';
$add = 'zzz';

if (strlen($string) < 3)
{
    die("Не допустимая длина строки (мин. 3 символа\n");
}

if (substr($string, 0, 3) == $search)
{
    $string = str_replace($search, $replace, $string);
} else {
    $string = $string . $add;
}

echo("$string\n");

//$string = str_replace($search, $replace, $string);

