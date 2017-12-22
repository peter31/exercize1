#!/usr/bin/env php
<?php

if (count($argv) < 3) {
    die("Wrong arguments count\n");
}

$result = 0;

foreach ($argv as $key => $value) {
    if ($key !== 0) {
        if (strval(intval($value)) !== $value) {
            die("Argument $key is not an integer\n\n");
        }
        $result = $result + $value;
    }
}

echo "$result\n\n";


//./new2.php 1 2 3
//./new2.php 4 5
//./new2.php
//./new2.php 1
//./new2.php "1a"
//./new2.php 1 "2a" 3
//./new2.php 1.5 2.5


































