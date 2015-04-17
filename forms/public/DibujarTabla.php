<?php
/** Esta funcion recibe un array y lo dibuja
 * El array puede tener 1 o 2 dimensiones
 */



function DibujarTabla ($array)
{ 
    echo "<table border=1>";
//     for($i=0;$i<$fila;$i++)
    foreach($array as $key => $value)
    {
        echo "<tr>";
//         if ($columna!=1)
        if (is_array($value))
        {
//             for($f=0;$f<$columna;$f++)
            foreach($value as $key2 => $value2)
            {
//                 echo $array[$i][$f] . " ";
                echo "<td>".$value2."</td>";
            }    
        }
        else
        {
                echo "<td>".$value."</td>";
        }
        echo "</tr>";
    } 
    echo "</table>";
}




