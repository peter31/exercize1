#!/usr/bin/env php
<?php

class User
{
    public $name;
    public $email;
    public $status = 1;

    public function getFirstName()
    {
        var_dump($this->name);

        $nameArr = explode(' ', $this->name);
        var_dump($nameArr);

        return $nameArr[0];
    }
}


$user1 = new User();
$user1->name = 'Ivan Ivanov';
var_dump($user1->getFirstName());


//$user = [
//    'name' => 'Ivan Ivanov',
//    'email' => 'test@example.com'
//];
//
//var_dump($user);