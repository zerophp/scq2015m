<?php


$array = array();
$array =[];

$array = array('nombre'=>"Agustin",
               'apellido'=>"Calderon",
               'edad'=>12,
               8=>'valor',
               '9'=>"que llave tengo",
                "y esta que llave tiene",
                'una mas',
                'llave?',
               '96'=>'aqui',
                'mas alla',
                '1.6'=>'jajaja',
                9,
                7=>98,98,
                7=>'Esto que llave tiene?',
                9.8877=>12893,
                'user'=>array('nombre'=>null,
                              'apellido'=>'calderon')                
                
);


foreach ($array['user'] as $key => $value)

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<pre>";
print_r($array[3]);
echo "</pre>";


foreach ($array as $key => $value)
{
   echo $key.": ".$value;
   echo "<br/>";
        
}

echo "<hr/>";
foreach ($array as $value)
{
    echo $value;
    echo "<br/>";

    
    
    
}















