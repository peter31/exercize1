#!/usr/bin/env php
<?php

//require __DIR__ . '/libraries/functions.php';

check_and_show_help($argv, 'Утилита находит наиболее длинную строку среди переданных аргументов.
Пример использования:
  ./longest_string.php "one", "two", "three"');

$array = my_array_shift($argv);

function longest_string($array)
{
    $result = 0;
    foreach ($array as $value) {
        $value = strval($value);
        if (strlen($value) > $result) {
            $result = $value;
        }
    }
    return $result;
}