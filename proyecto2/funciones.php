<?php

$fila = 9;
$columna = 6;


include ("tabla_multiplicar.php");


include ("fibonacci.php");
include ("dibujar_tabla.php");



$arrayTabla = tabla_multiplicar($fila , $columna);
$arraySerie = fibonacci($columna);

dibujar_tabla ($arrayTabla);
dibujar_tabla ($arraySerie);

