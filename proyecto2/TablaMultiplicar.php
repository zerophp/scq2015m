<?php
/**
 * Multiplica filas por columnas y retorna un array
 *
 * @param $filas int
 * @param $columnas int
 * @return array
 */
function TablaMultiplicar ($filas, $columnas)
{
    /* poner codigo aqui */
    for ($i=0; $i<=$filas; $i++){
        for ($j=0; $j<=$columnas; $j++){
            if ($i == 0){
                $array[$i][$j] = $j;
            }
            else if ($j == 0){
                $array[$i][$j] = $i;
            }
            else {
                $array[$i][$j] = $i*$j;
            }
        }
    }
    
    
    return $array;
}

