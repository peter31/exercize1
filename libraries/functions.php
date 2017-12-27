<?php

function checkElementsMoreThan($checkArr, $allowedNumber)
{
    if (count($checkArr) < $allowedNumber) {
        die("Wrong arguments count!\n\n");
    }
}

function arguments_count_validation($array, $number)
{
    if (count($array) < $number) {
        die("Wrong arguments count!\n");
    }
}

function my_array_shift(&$array)
{
    $value = null;
    foreach ($array as $key => $value) {
        unset($array[$key]);
        break;
    }
    return $value;
}

function average_value($array) {
    return array_sum($array) / count($array);
}

function change_num($number) {
    if ($number < 100 || $number > 999) {
        die("Argument $number wrong number!\n\n");
    }
    $number = strval($number);
    $number[1] = "0";
    $number = intval($number);
    return $number;
}

function integer_sum($number) {
    if ($number < 100 || $number > 999) {
        die("Argument $number isn't an integer!\n\n");
    }
    $number = strval($number);
    $num1 = $number[0];
    $num2 = $number[1];
    $num3 = $number[2];
    $number = intval($num1) + intval($num2) + intval($num3);
    return $number;
}

function integer_validation($array)
{
    foreach ($array as $key => $value) {
        if (strval(intval($value)) !== $value) {
            die("Argument $key is not an integer\n\n");
        }
    }
}

function sum_of_arr_count($array)
{
    $result = 0;
    foreach ($array as $value) {
        $result++;
    }
    return $result;
}