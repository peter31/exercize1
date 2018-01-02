<?php

function check_and_show_help($argv, $message)
{
    if (isset($argv[1]) && $argv[1] === '-h') {
        echo(PHP_EOL);
        echo($message);
        echo(PHP_EOL);
        die;
    }
}


function arguments_count_validation($array, $number)
{
    if (count($array) < $number) {
        die("Wrong arguments count!\n");
    }
}

//function my_array_shift($array)
//{
//    $value = null;
//    foreach ($array as $key => $value) {
//        unset($array[$key]);
//        break;
//    }
//    return $value;
//}

function my_array_shift($array)
{
    foreach ($array as $key => $value) {
        unset($array[$key]);
        break;
    }
    return $array;
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

function longest_string($array)
{
    $result = "";
    foreach ($array as $value) {
        if (strlen($value) > strlen($result)) {
            $result = $value;
        }
    }
    return $result;
}

function max_integer($array)
{
    $result = 0;
    foreach ($array as $value) {
        if ($value > $result) {
            $result = $value;
        }
    }
    return $result;
}

function sum($array)
{
    $result = 0;
    foreach ($array as $value) {
        if ($value > 10) {
            $result = $result + $value;
        }
    }
    return $result;
}

function repeat_via_while($array)
{
    $phrase = $array[1];
    $number = intval($array[2]);
    $count = 0;
    while ($count <= $number) {
        echo ("$phrase\n");
        $count++;
    }
}


function repeat_via_for($array)
{
    $phrase = $array[1];
    $number = intval($array[2]);
    for ($count = 0; $count <= $number; $count++) {
        echo ("$phrase\n");
    }
}