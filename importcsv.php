#!/usr/bin/env php
<?php

echo("\n");

// Валидация файла...
if (($handler = @fopen($argv[1], 'r')) == FALSE) {
    die("No such file or directory\n");
}

// Создаем массив со значениями из CSV файла...
$users = [];
while (($usersRow = fgetcsv($handler, 100, ',')) !== FALSE) {
    $users[] = $usersRow;
}

fclose($handler);


$link = mysqli_connect('localhost', 'root',  'qwerty', 'shop');

if (!$link) {
    exit("Can't connect to database\n");
}

foreach ($users as $key => $value) {


    $query = 'INSERT INTO users SET name = "' . $value[0] . '", email = "' . $value[1] . '"';
    $query = "INSERT INTO users SET name = $value[0], email = $value[1]";
    $query = 'INSERT INTO users SET name = ' $value[0]',' 'email = ' $value[1];
    mysqli_query($link, $query);
}

mysqli_close($link);