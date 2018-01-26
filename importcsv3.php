#!/usr/bin/env php
<?php

require __DIR__ . '/config.php';
echo("\n");

// ---------- database check ...
$db = mysqli_connect($database['host'], $database['user'],  $database['pass'], $database['db']);
if (!$db) {
    echo "Error creating table: " . mysqli_error($db) . "\n";
    exit;
}


// ---------- check if *.csv file exist ...
if (($handler = @fopen($argv[1], 'r')) == FALSE) {
    die("No such file or directory\n");
}


// ---------- create array with users imported from *.csv file ...
$users = [];
while (($usersRow = fgetcsv($handler, 100, ',')) !== FALSE) {
    $users[] = $usersRow;
}
fclose($handler);


// ---------- mysql table config ...
$createTable = "CREATE TABLE users (
id int NOT NULL AUTO_INCREMENT,
name varchar(200) NOT NULL,
email varchar(200) NOT NULL,
status int(1) DEFAULT '1',
created TIMESTAMP DEFAULT NOW(),
updated TIMESTAMP DEFAULT NOW() ON UPDATE NOW(),
PRIMARY KEY (id),
UNIQUE KEY (email)
)";

// ---------- mysql work result ...
if (mysqli_query($db, $createTable)) {
    echo "Table users created successfully \n";
} else {
    echo "Error creating table: " . mysqli_error($db) . "\n";
}
echo "\n";


// ---------- add users to table ...
$added = 0;
$updated = 0;
$total = 0;
foreach ($users as $key => $value) {
    $total++;
    $name = $value[0];
    $email = $value[1];
    $query = 'SELECT * FROM users WHERE email = "' . $email . '"';
    $insert = 'INSERT INTO users SET name = "' . $name . '", email = "' . $email . '"';
    $update = 'UPDATE users SET name = "' . $name . '" WHERE email = "' . $email . '"';
    if (mysqli_fetch_row(mysqli_query($db, $query)) === NULL) {
        $added++;
        mysqli_query($db, $insert);
    } else {
        mysqli_query($db, $update);
        $updated++;
    }
}
mysqli_close($db);

echo "Total CSV users - $total\n";
echo "Total updated users is - $updated\n";
echo "Total created users is - $added\n\n";