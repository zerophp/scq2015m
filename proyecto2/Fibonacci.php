<?php
/**
 * Retorna la serie de fibonacci hasta $max
 * @param $max int
 * @return array
 */

function fibonacci($max)
{
    $array_fibo = array();
    
    $array_fibo[]=0;
    $array_fibo[]=1;
    
    $f0 = 0;
    $f1 = 1;
    $f2 = $f0 + $f1;
    
    while ($f2<=$max)
    {
        $array_fibo[]=$f2;
        $f0 = $f1;
        $f1 = $f2;
        $f2 = $f0 + $f1;
    }
    
    return $array_fibo;
}