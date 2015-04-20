<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";
// ("DibujarTabla.php");

// Take data
// Convert data in string separeted with coma
// Para cada elemento de POST
foreach($_POST as $key => $value)
{
    // Si no array
    if(!is_array($value))
        // poner el elemento
        $_POST[$key]=$value;
    // Si array
    else
        // Separar por pipes
        $_POST[$key]=implode("|",$value);
}

$string = implode(",", $_POST);

// create or modify a file with the string
file_put_contents('users.txt', $string."\n", FILE_APPEND);

include ("../Application/src/Application/Controller/users.php");
