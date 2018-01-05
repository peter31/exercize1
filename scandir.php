#!/usr/bin/env php
<?php

require __DIR__ . '/libraries/functions.php';

check_and_show_help($argv,
    "Утилита находит файлы больше 200 байт в директории переданной аргументом скрипта.
Пример использования: ./findint.php '/media/sf_php'\n");

if (count($argv) !== 2 ){
    die("Допустим только один аргумент!\n");
}

foreach (scandir($argv[1]) as $filename) {
    if (filesize($filename) > 200) {
        echo ($filename . " = " . filesize($filename) . " bytes\n");
    }
}