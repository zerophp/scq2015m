<?php

function setUser($data)
{
    foreach($data as $key => $value)
    {
        if(!is_array($value))
            $data[$key]=$value;
        else
            $data[$key]=implode("|",$value);
    }
    $string = implode(",", $data);
    file_put_contents('../data/users.txt', $string."\n", FILE_APPEND);
    
    return $data; 
}
