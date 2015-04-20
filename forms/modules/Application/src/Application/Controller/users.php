<?php


if(isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = 'select';

switch($action)
{
    case 'select':
        include ("../modules/Application/views/users/select.phtml");
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
            include(VENDOR_PATH.'/acl/Core/src/Core/Forms/RenderForm.php');
            include(VENDOR_PATH.'/acl/Core/src/Core/Forms/FilterForm.php');
            // include('ValidateForm.php');
            
            $userForm = include (APPLICATION_PATH.'/src/Application/Forms/UserForm.php');
            
            $html = renderForm($userForm, 'users.php?action=insert', 'POST', array('id'=>0));
            
            
            echo $html;
        }
    break;

    case 'update':
        echo "esto es update";
        if ($_POST)
        {
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

            header("Location: /users.php");
        }
        else
        {
            include ('../../../../../vendor/acl/Core/src/Core/Forms/RenderForm.php');            
            $formDefinition = include ('../Forms/UserForm.php');            
            //obtengo la id de la fila en
            $id = $_GET['id'];
            //obtengo el archivo de texto
            $fileData = file_get_contents('users.txt');
            $fileLines = explode("\n", $fileData);
            
            $fieldsLine = explode(",", $fileLines[$id]);   #get the user, and split it by ',' into a array
            
            $data = array();    #initialize the data as a array
            $userFieldsIndex = 0;
            foreach ($formDefinition as $fieldName => $fieldAttributes) 
            {
                $valuesField = $fieldsLine[$userFieldsIndex];
                $data[$fieldName] = $valuesField;
                $userFieldsIndex = $userFieldsIndex + 1;
            }
            
            $data['id'] = $id;
            echo(renderForm($formDefinition, '/users.php?action=update', 'post', $data));
        }
    break;

    case 'delete':
        echo "esto es delete";
        if ($_POST)
        {
            foreach($_POST as $key => $value)
            {
                if ($value == "NO")
                {
                    //Llmar a la tabla con la informaciÃ³n
                    header('Location: users.php');
                }
                else
                    // Leer el archivo users.txt
                    // Guardar su contenido en un string
                    $string = file_get_contents('users.txt');
                $users = explode("\n", $string);
                // Separar el string por saltos de linea
                // Recorrer cada linea
            
                if ($value !== "NO")
                {
                    unset($users[$value]);
                    file_put_contents('users.txt', implode("\n",$users));
                }
               
                header("Location: /users.php");
            
            }
        }
        else
        {
            
            echo '<form method ="POST" action="/users.php?action=delete">
                    Estas segutro que queires borrar el usuario: ?
                    <input type="hidden" name="id" value="'.$_GET['id'].'"/>
                    <input name="borrar" value="SI" type ="submit"/>
                    <input name="borrar" value="NO" type ="submit"/>
                </form>
            ';           
            
        }
    break;
}