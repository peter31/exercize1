#!/usr/bin/env php
<?php


for ($int = 1; $int <= 100; $int++) {
    if ($int % 3 == 0) {
        echo("$int\n");
    }
}

$int = 1;
while ($int <= 100) {
    if ($int % 3 == 0) {
        echo("$int\n");
    }
    $int++;
}