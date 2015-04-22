<?php


function deleteUser($id)
{
    $users = file_get_contents('../data/users.txt');
    $users = explode("\n", $users);
    unset($users[$id]);
    file_put_contents('../data/users.txt', implode("\n",$users));
    
    return true;
}