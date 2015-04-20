<?php
    $users = file('users.txt');
    

    
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
    $id = $_POST['id'];
    
    $users[$id] = implode(",", $_POST)."\n";

    
 
    
    if(file_put_contents('users.txt', $users))
        header('Location: users.php');
 ?>
