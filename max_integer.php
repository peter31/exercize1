#!/usr/bin/env php
<?php

require __DIR__ . '/libraries/functions.php';

check_and_show_help($argv,
    "Утилита находит наибольшее из переданных чисел аргументами скрипта.
Пример использования: ./longest_string.php 1, 20, 30\n");

$array = my_array_shift($argv);
integer_validation($array);
$result = max_integer($array);

echo("\n");
echo("Результат - " . $result . "\n\n");