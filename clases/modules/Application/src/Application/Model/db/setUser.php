<?php

function setUser($data, $config)
{
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
    
   
    // Conectarse al DBMS
        $link = mysqli_connect($config['host'], 
                                $config['user'], 
                                $config['password']
                               );
        
    // Seleccionar la DB
        mysqli_select_db($link, $config['database']);
        
        
        $cities = array ('scq'=>1);
        $genders = array ('mujer'=>1);
        
    // Crear la consulta
        $query = "INSERT INTO user SET iduser='".time()."',
					 name = '".$data['name']."',
                     email='".$data['email']."',
					 password='".$data['password']."',
                     description='".$data['description']."',
                     
                     gender_idgender=".$genders[$data['gender']].",
                     city_idcity=".$cities[$data['city']]."";

//         echo $query;
//         die;
    // Enviar la consulta
        $result = mysqli_query($link, $query);
    
//         echo "<pre>";
//         print_r($result);
//         echo "</pre>";
   
    // Cerra la coneccion
        mysqli_close($link);

        
    return $result;
}