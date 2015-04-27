<?php
/**
 * Esta funcion borra una fila de una tabla de la base de datos
 * 
 * @param  $config --> configuration conection MySQL
 * @param  $id    
 * @return boolean
 */
function deleteUser( $id , $config)
{
echo "/n Estas en deleteUser.php /n";
    echo "<pre>Id:";
        print_r($id);
    echo "</pre>";
    

    echo "<pre>Config:";
        print_r($config);
    echo "</pre>";
    
  die;  
    
    
    
    // Conectarse al DBMS
    $link = mysqli_connect($config['host'],
        $config['user'],
        $config['password']
    );
    // Seleccionar la DB
    mysqli_select_db($link, $config['database']);
    // Crear la consulta
    // 1º delete from user_has_transport where user_iduser="id1";
    // 2º delete from user_has_language where user_iduser="id1";
    // 3º delete user.* from user,gender,city where	iduser="id1" && idgender=gender_idgender && idcity=city_idcity;

    $query = "delete from user_has_transport where user_iduser=\"".$id."\";
               delete from user_has_language where user_iduser=\"".$id."\";
               delete user.* from user where iduser=\"".$id."\";";
   // Enviar la consulta
    $result = mysqli_query($link, $query);
    // Recorrer el recordset
    //     while($row = mysqli_fetch_assoc($result))
        //     {
        //         $users[]=$row;
        //     }

    // Cerra la coneccion
    mysqli_close($link);
    return true;
}