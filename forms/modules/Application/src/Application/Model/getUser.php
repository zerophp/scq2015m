<?php
function getUser($id)
{

    //obtengo el archivo de texto
    $fileData = file_get_contents('../data/users.txt');
    $fileLines = explode("\n", $fileData);
    //get the user, and split it by ',' into a array
    $fieldsLine = explode(",", $fileLines[$id]);

    return $fieldsLine;
}