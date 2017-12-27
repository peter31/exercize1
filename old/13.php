#!/usr/bin/env php
<?php

$array = ['id' => 13, 'name' => 'Vasia'];
next($array);
$result = reset($array);

var_dump($result);