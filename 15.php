#!/usr/bin/env php
<?php

$array = [1, 2, 3, 4];

function value_sum($array) {
    return array_sum($array) / count($array);
}

print_r (value_sum($array));