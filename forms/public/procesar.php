<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

include ("DibujarTabla.php");

// Tomar los datos
// Juntar los datos en un string separado por comas
$string = implode(",", $_POST);

// escribir en el fichero de texto el string en una linea
file_put_contents('users.txt', $string."\n", FILE_APPEND);

// Leer el contenido del fichero en un string
$string = file_get_contents('users.txt');

// Separar el string por saltos de linea y guardarlo en un array
$array = explode("\n", $string);

// Para cada elemento del array separarlo por comas
foreach($array as $key => $value)
{
    $users[] = explode(",", $value);
}

// dibujar el valor
DibujarTabla($users);