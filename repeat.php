#!/usr/bin/env php
<?php
echo("\n");

require __DIR__ . '/libraries/functions.php';

check_and_show_help($argv,
    "Утилита выводит строку N-ое количество раз переданных аргументами скрипта.
Пример использования: ./repeat.php \"Превед медвед!\" 10\n");

$array = my_array_shift($argv);

repeat_via_for($array);

echo("\n");
echo("\n");

repeat_via_while($array);

echo("\n");
