#!/usr/bin/env php
<?php

require __DIR__ . '/libraries/functions.php';

check_and_show_help($argv,
    "Утилита находит сумму всех чисел больше 10 из переданных аргументами скрипта.
Пример использования: ./longest_string.php 1, 20, 30\n");

$array = my_array_shift($argv);
integer_validation($array);
$result = sum($array);

echo("\n");
echo("Результат - " . $result . "\n\n");