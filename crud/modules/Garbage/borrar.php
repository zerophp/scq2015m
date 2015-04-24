<?php
echo "<pre>Get: ";
print_r($_GET);
echo "</pre>";

echo "<pre>Post: ";
print_r($_POST);
echo "</pre>";

//Leer la informaciÃ³n que nos llega
//Si borrar registro seleccionado y mostrar otra vez la informaciÃ³n
//No mostrar otra vez la tabla
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
//     unlink('users.txt');
//     foreach($users as $id => $user)
//     {
//         //eliminar el registro seleccionado
//         if ($id != $value)
//         {
//             file_put_contents('users.txt', $user."\n", FILE_APPEND);
//         }
//     }
    include("../Application/src/Application/Controller/users.php");
    //Actualizar archivo
    //Mostrar otra vez la tabla

}