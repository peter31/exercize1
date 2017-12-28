#!/usr/bin/env php
<?php

require __DIR__ . '/libraries/functions.php';

check_and_show_help($argv,
    "Утилита находит наиболее длинный строковый элемент из переданных аргументами скрипта.
Пример использования: ./longest_string.php one, two, three\n");

$array = my_array_shift($argv);
$result = longest_string($array);

echo("\n");
echo("Результат - " . $result . "\n\n");