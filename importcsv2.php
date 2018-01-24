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

$link = mysqli_connect('localhost', 'root',  'dutyfree', 'test');

if (!$link) {
    exit("Can't connect to database\n");
}

foreach ($users as $key => $value) {
    $name = $value[0];
    $email = $value[1];
    $query = 'SELECT * FROM users WHERE email = "' . $email . '"';
    $insert = 'INSERT INTO users SET name = "' . $value[0] . '", email = "' . $value[1] . '"';
    $update = 'UPDATE users SET name = "' . $name . '" WHERE email = "' . $email . '"';
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_row($result);
    if ($row === NULL) {
        mysqli_query($link, $insert);
    } else {
        mysqli_query($link, $update);
    }
}

mysqli_close($link);
