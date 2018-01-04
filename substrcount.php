#!/usr/bin/env php
<?php

require __DIR__ . '/libraries/functions.php';

check_and_show_help($argv,
    "Утилита находит количество вхождений aba в переданном аргументом скрипта.
Пример использования: ./substrcount.php 'dfg6dfg9abazd3czaba 4zx2'\n");

if (count($argv) !== 2 ){
    die("Допустим только один аргумент!\n");
}

$result = substr_count($argv[1], 'aba');

echo("Количество вхождений abc = $result\n");