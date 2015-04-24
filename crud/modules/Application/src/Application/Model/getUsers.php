<?php

function getUsers()
{
    $string = file_get_contents('../data/users.txt');
    $users = explode("\n", $string);
    return $users;
}