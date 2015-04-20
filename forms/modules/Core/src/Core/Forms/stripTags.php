<?php
/**
 *
 * Filter HTML tags
 * Filter StripTags
 *
 *
 *
 * @param string $valueToStrip
 * @return string
 */
function stripTags($valueToStrip){
    return trim(strip_tags($valueToStrip)); //trim para filtrar los espacios en blanco entre etiqueta y texto aceptado ejemplo: "<br>   texto correcto" devuelve "texto correcto"
}

