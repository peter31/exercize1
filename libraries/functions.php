<?php

function check_elements_more_than($checkArr, $allowedNumber)
{
    if (count($checkArr) < $allowedNumber) {
        die("Wrong arguments count!\n\n");
    }
}

function shifting($array)
{
    array_shift($array);
    return($array);
}

function check_int_array($arr)
{
    foreach ($arr as $key => $value) {
        if (strval(intval($value)) !== strval($value)) {
            die("Argument $key is not an integer\n\n");
        }
    }
}

function check_and_show_help($argv, $message)
{
    if (isset($argv[1]) && $argv[1] === '-h') {
        echo(PHP_EOL);
        echo($message);
        echo(PHP_EOL);
        die;
    }
}
