#!/usr/bin/env php
<?php

require __DIR__ . '/libraries/functions.php';

check_and_show_help($argv,
    "Утилита находит наиболее длинную строку среди переданных аргументов.
Пример использования: ./longest_string.php one, two, three\n");

$array = my_array_shift($argv);
$result = longest_string($array);
echo "$result";
