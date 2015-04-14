<?php

$fila = 9;
$columna = 60;


include ("TablaMultiplicar.php");


include ("Fibonacci.php");
include ("DibujarTabla.php");



$arrayTabla = TablaMultiplicar($fila , $columna);
$arraySerie = Fibonacci($columna);

DibujarTabla ($arrayTabla);
DibujarTabla ($arraySerie);

