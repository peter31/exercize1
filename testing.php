#!/usr/bin/env php
<?php

require __DIR__ . '/libraries/functions.php';


$string = "jhjaxajhjahxjhb334jbjbjhb5";

$regexp = '|[0-9]|';

$result = preg_match_all($regexp, $string);

var_dump($result);
