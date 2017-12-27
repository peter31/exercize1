#!/usr/bin/env php
<?php

require_once __DIR__ . '/libraries/functions.php';

check_and_show_help($argv, 'Утилита складывает 2 целых числа и выводит результат.
Пример использования:
  ./add.php 1 2');


$arr = shifting($argv);
check_elements_more_than($arr, 2);
check_int_array($arr);

$result = array_sum($arr);
echo "$result\n\n";
