#!/usr/bin/env php
<?php

require __DIR__ . '/libraries/functions.php';

check_and_show_help($argv,
    "Утилита находит файлы в директории с заданым расширением переданными аргументом скрипта.
Пример использования: ./extensions.php '/media/sf_php/' 'jpg,jpeg,txt'\n");

echo("\n");
if ( count($argv) !== 3 ){
    die("Введите два аргумента!\n");
}

if (count(scandir($argv[1])) == 0) {
    die("Папка не содержит файлов");
}

$path = $argv[1];
$extensions = explode(',', $argv[2]);

$files = [];
foreach ( scandir($path) as $value ) {
    if ( is_file($value) ) {
        $files[] = $path . $value;
    }
}

$result = [];
foreach ( $files as $value ) {
    $parts = pathinfo($value);
    if ( in_array($parts['extension'], $extensions) ) {
        $result[] = str_replace($path, "" ,$value);
    }
}

if ( count($result) !==0 ) {
    echo('Найдено (' . count($result) . ") файлов :\n");
    foreach ( $result as $value ) {
        echo ($value . "\n");
    }
    echo("\n");
} else {
    echo("Данный путь не содержит искомых файлов\n\n");
}