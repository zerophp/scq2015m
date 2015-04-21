<?php

switch($request['action'])
{
    case 'index':
    case 'select':
        $string = file_get_contents('../data/users.txt');
        $users = explode("\n", $string);
        
        ob_start();
            include ("../modules/Application/views/users/select.phtml");
            $content = ob_get_contents();
        ob_end_clean();
        
    break;

    case 'insert':        
        if($_POST)
        {              
            foreach($_POST as $key => $value)
            {                
                if(!is_array($value))                  
                    $_POST[$key]=$value;                
                else                   
                    $_POST[$key]=implode("|",$value);
            }            
            $string = implode(",", $_POST); 
            file_put_contents('../data/users.txt', $string."\n", FILE_APPEND);
            header("Location: /users/select");
        }
        else 
        {
            ob_start();
                include("../modules/Application/views/users/insert.phtml");
                $content = ob_get_contents();
            ob_end_clean();
        }
    break;

    case 'update':
        echo "esto es update";
        if ($_POST)
        {
            $users = file('../data/users.txt');      
            foreach($_POST as $key => $value)
            {                
                if(!is_array($value))
                    $_POST[$key]=$value;
                else                    
                    $_POST[$key]=implode("|",$value);
            }
            $id = $_POST['id'];            
            $users[$id] = implode(",", $_POST)."\n";            
            if(file_put_contents('../data/users.txt', $users))
            header("Location: /users/select");
        }
        else
        {                       
            //obtengo la id de la fila en
            $id =  $request['params']['id'];
            //obtengo el archivo de texto
            $fileData = file_get_contents('../data/users.txt');
            $fileLines = explode("\n", $fileData);            
            //get the user, and split it by ',' into a array
            $fieldsLine = explode(",", $fileLines[$id]);   
            
            
            ob_start();
                include ("../modules/Application/views/users/update.phtml");
                $content = ob_get_contents();
            ob_end_clean();
        }
    break;

    case 'delete':
        echo "esto es delete";
        if ($_POST)
        {
            if ($_POST['borrar'] === "SI")
            {
                $users = file_get_contents('../data/users.txt');
                $users = explode("\n", $users);
                unset($users[$_POST['id']]);                
                file_put_contents('../data/users.txt', implode("\n",$users));
            }               
            header("Location: /users/select");    
        }
        else
        {     
            ob_start();
                include ("../modules/Application/views/users/delete.phtml");  
                $content = ob_get_contents();
            ob_end_clean();
        }
    break;
}

// $content = "kaka";

include ("../modules/Application/views/layouts/dashboard.phtml");





