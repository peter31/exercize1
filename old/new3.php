#!/usr/bin/env php
<?php

function integer_validation ($array)
{
$result = 0;
foreach ($array as $key => $value) {
    if (strval(intval($value)) !== $value) {
            die("Argument $key is not an integer\n\n");
        }
        $result = $result + $value;
    }
}






































