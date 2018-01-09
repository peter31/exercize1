#!/usr/bin/env php
<?php

require __DIR__ . '/libraries/functions.php';

check_and_show_help($argv,
    "Утилита находит файлы больше 200 байт в директории переданной аргументом скрипта.
Пример использования: ./findint.php '/media/sf_php'\n");

if (count($argv) !== 2 ){
    die("Допустим только один аргумент!\n");
}
echo ("\n");

$fullpath = '/' . trim($argv[1], '/') . '/';

foreach (scandir($fullpath) as $filename) {
    $size = filesize($filename) / 1024;
    if ($size > 1) {
        echo ($fullpath . $filename . " = " . $size . " Kbytes\n");
    }
}

var_dump($fullpath);
echo ("\n");
