#!/usr/bin/env php
<?php

for ($int = $argv[1]; $int <= 100; $int++) {
    echo("$int\n");
}

$int = $argv[1];
while ($int <= 100) {
    echo("$int\n");
    $int++;
}