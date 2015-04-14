<?php
/** Esta funcion recibe un array y lo dibuja
 * El array puede tener 1 o 2 dimensiones
 */



function DibujarTabla ($array)
{ 
    $columna = sizeof($array[0]);
    $fila = sizeof($array);
    
    for($i=0;$i<$fila;$i++)
    {
        if ($columna!=1)
        {
            for($f=0;$f<$columna;$f++)
            {
                echo $array[$i][$f] . " ";
            }
    
        }
        else
        {
            echo $array[$i] . " ";
        }
        echo "</br>";
    }    
}




