#!/usr/bin/env php
<?php

require __DIR__ . '/libraries/functions.php';

check_and_show_help($argv,
    "Утилита находит файлы с заданым расширением переданным аргументом скрипта.
Пример использования: ./findint.php '/media/sf_php' 'jpg,jpeg,txt'\n");

echo("\n");
if (count($argv) !== 3 ){
    die("Введите два аргумента!\n");
}

$fullpath = '/' . trim($argv[1], '/');
$extarr = explode(',', $argv[2]);
$finded =  NULL;

foreach (scandir($fullpath) as $file){
        if (is_file($file)){
            $parts = pathinfo($fullpath . $file);
            if (in_array($parts['extension'], $extarr)) {
                $finded[] = $file;
            }
        }
}

echo "\n";
print_r($finded);