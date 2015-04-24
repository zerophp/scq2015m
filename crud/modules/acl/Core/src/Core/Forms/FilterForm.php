<?php
/**
 *
* Filter special character
* Filter Stringtrim StripTags Escape
*
*
*
* @param array $formDefinition
* @param array $data
* @return array $data
*/

include ('stringTrim.php');
include ('stripTags.php');
include ('escape.php');
function FilterForm($formDefinition, $data)
{
    //listado de filtros, (FilterName=>FilterFunction)
    $filtersList = array(   
        'Stringtrim'=>'stringTrim',                                
        'StripTags'=>'stripTags',
        'Escape'=>'escape'
    );    
    foreach ($data as $key => $value)                                              
    {
        if ((array_key_exists($key, $formDefinition) ) && (array_key_exists('filters',$formDefinition[$key])))                  //si el elemento existe en la definicion y si el elemento debe o no ser filtrado  
        {
            foreach ($formDefinition[$key]['filters'] as $valueFilters)            //recorre todos los filtros asociados al elemento
            {
                if (array_key_exists($valueFilters, $filtersList))                 //valida que el filtro definido existe en el listado de filtros
                {
                   $data[$key] = $filtersList[$valueFilters]($data[$key]);         //muestra la funcion filtro del listado de filtros usando como key el filtro definido  
                }
            }
        }
    }
    return $data;
}