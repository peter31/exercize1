#!/usr/bin/env php
<?php

$array = ['dfg', 5,];

function abc($array[0])
{
    if ($array[0] !== 'abc') {
        $array[0] = 'www';
    }
}

abc()
