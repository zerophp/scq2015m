<?php

$bicicleta = new Bicicleta();
$cadena = new Cadena();

// Problema
$cadena->estado = 'NoPuesta';           // La cadena se sale. Hay que ponerla


// Solucion
if($bicicleta->tipo == 'ConCambios')
{
    $pinyon = new Pinyon();
    $cadena->colocarPinyon($pinyon);    
}
$catalina = new Catalina();
$cadena->colocarCatalina($catalina);

echo $cadena->estado;   // Puesta