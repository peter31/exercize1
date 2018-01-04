#!/usr/bin/env php
<?php

require __DIR__ . '/libraries/functions.php';

check_and_show_help($argv,
    "Утилита разбивает строку на подстроки переданую аргументом скрипта.
Пример использования: ./explode.php 'one two three' ' '\n");

if (count($argv) !== 3 ){
    die("Необходимо два строчных элемента!\n");
}

$array = explode($argv[2], $argv[1]);

foreach ($array as $value){
        echo("$value\n");
}