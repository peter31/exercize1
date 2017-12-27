#!/usr/bin/env php
<?php

function arguments_count_validation($array, $number)
{
    if (count($array) < $number) {
        die("Wrong arguments count!\n");
    }
}