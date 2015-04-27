<?php
function getUser($config, $id)
{

    
//     echo "<\br> Esto es getUser <\br>";
//     echo "<pre>Id:";
//     print_r($id);
//     echo "</pre>";
    
    
//     echo "<pre>Config:";
//     print_r($config);
//     echo "</pre>";
    
//     die;
    
    
    
    
    
    
    
    
    
    $users=array();
    // Conectarse al DBMS
    $link = mysqli_connect($config['host'],
        $config['user'],
        $config['password']
    );

    // Seleccionar la DB
    mysqli_select_db($link, $config['database']);

    // Crear la consulta
 //   $query = "SELECT * FROM user where iduser=\". $id .\"";
    $query = "SELECT * FROM user";

    // Enviar la consulta
    $result = mysqli_query($link, $query);

    // Recorrer el recordset
    $contador=0;
    while($row = mysqli_fetch_assoc($result))
    {
        if($contador==$id) //si eres la fila que quiero te guardo
        {
            $users=$row;
        }
        $contador++;
     }

    // Cerra la coneccion
    mysqli_close($link);

     echo "<pre> Users:";
             print_r($users);
     echo "</pre>";            

    echo "<pre>Config:";
       print_r($row);
    echo "</pre>";
 //    die;
    return $users['iduser'];
}
    
    
    
    
    
    
    
    
    
    
    
    