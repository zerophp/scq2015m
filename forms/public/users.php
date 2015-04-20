<?php


if(isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = 'select';

switch($action)
{
    case 'select':
        echo "esto es select";
        // SELECT
        // Leer el archivo users.txt
        // Guardar su contenido en un string
        $string = file_get_contents('users.txt');
        // dibujar Link insert
        echo "<a href=\"/users.php?action=insert\">Insert</a>";
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
            echo "<a href=\"/users.php?action=update&id=".$id."\">Update</a> | ";
            echo "<a href=\"/users.php?action=delete&id=".$id."\">Delete</a>";
            echo "</tr>";
        }
        echo "</table>";
    break;

    case 'insert':
        
        if($_POST)
        {    
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
            
            header("Location: /users.php");
        }
        else 
        {
            echo "esto es insert";
            include('RenderForm.php');
            include('FilterForm.php');
            // include('ValidateForm.php');
            
            $userForm = include ('UserForm.php');
            
            $html = RenderForm($userForm, 'users.php?action=insert');
            
            
            echo $html;
        }
    break;

    case 'update':
        echo "esto es update";
    break;

    case 'delete':
        echo "esto es delete";
    break;
}