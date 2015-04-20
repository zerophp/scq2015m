<?php
// SELECT
    // Leer el archivo users.txt    
    // Guardar su contenido en un string
    $string = file_get_contents('users.txt');
        // dibujar Link insert
        echo "<a href=\"formulario.php\">Insert</a>";
    // Separar el string por saltos de linea
    $users = explode("\n", $string);
        // dibujar table
        echo "<table border=1>";
    // Recorrar cada linea 
    foreach($users as $id => $user)
    {
        // Dibujar tr
        echo "<tr>";
        // Separar por comas las lineas
        $user = explode(",", $user);
        // Para cada columna
            foreach ($user as $value)
            {
                // Dibujar td
                echo "<td>".$value."</td>";
            }
        // Agregar columna options
        echo "<td>";
        echo "<a href=\"formulario_lleno.php?id=".$id."\">Update</a> | ";
        echo "<a href=\"deleteForm.php?id=".$id."\">Delete</a>";
        echo "</tr>";
    }        
        echo "</table>";