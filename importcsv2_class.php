#!/usr/bin/env php
<?php

class MySQLWrapper
{
    protected $link;

    public function connect()
    {
        require __DIR__ . '/configs/config.php';

        $this->link = mysqli_connect($dbConfig['host'], $dbConfig['user'],  $dbConfig['password'], $dbConfig['database']);

        return (bool) $this->link;
    }

    public function query($query)
    {
        return mysqli_query($this->link, $query);
    }

    public function checkResultExists($query)
    {
        $result = mysqli_query($this->link, $query);

        return $result->num_rows > 0;
    }

    public function close()
    {
        mysqli_close($this->link);
    }
}

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

$mysqlWrapper = new MySQLWrapper();

if (!$mysqlWrapper->connect()) {
    exit("Can't connect to database\n");
}

foreach ($users as $key => $value) {
    $name = $value[0];
    $email = $value[1];

    $query = 'SELECT * FROM users WHERE email = "' . $email . '"';
    if (!$mysqlWrapper->checkResultExists($query)) {
        $insert = 'INSERT INTO users SET name = "' . $value[0] . '", email = "' . $value[1] . '"';
        $result = $mysqlWrapper->query($insert);
    } else {
        $update = 'UPDATE users SET name = "' . $name . '" WHERE email = "' . $email . '"';
        $mysqlWrapper->query($update);
    }
}

$mysqlWrapper->close();
