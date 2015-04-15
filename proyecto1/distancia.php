<?php

$diccionario = array ('descanso', 
                      'descalzo',
                      'descalsificar',
                      'descansar'
);

$entrada = 'descanzo';

foreach($diccionario as $value)
{
    echo levenshtein ( $entrada , $value );
    echo "<br/>";    
}

