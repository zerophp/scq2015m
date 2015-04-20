<?php
/**
 *
 * Filter Escape Characters
 * Filter Escape
 *
 *
 *
 * @param string $valueToEscape
 * @return string
 */
function escape($valueToEscape){
    $pattern = array('/\\"/','/\\\'/','/\\\n/','/\\\r\n/');     //patrones a usar
    return preg_replace ($pattern,'', $valueToEscape);          
}