<?php

function putUser($id, $data)
{
    $users = file('../data/users.txt');
    foreach($data as $key => $value)
    {
        if(!is_array($value))
            $data[$key]=$value;
        else
            $data[$key]=implode("|",$value);
    }
    
    $users[$id] = implode(",", $data)."\n";
    file_put_contents('../data/users.txt', $users);
        
    return true;
}