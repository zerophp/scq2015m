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
* @return array $filterArray
*/

function FilterForm($formDefinition, $data)
{
    //----------- este es el array que devolveremos con los datos filtrados (Los campos que lo requieran)
    $filterArray= $data;
    //    echo "</br>Estoy dentro de la funcion";
    //--- recoremos todas las variables del array del formulario
    foreach ($formDefinition as $key => $value)
    {
        //       echo "</br>Estoy en el foreach";
        //--- buscamos en cada variable del array del formulario si tiene o no el campo filter
        if ( array_key_exists("filters", $value) )
        {
            //-------- ahora obtenemos el array de filtros
            //     echo "</br>Estoy en el if";
            foreach($value["filters"] as $filtros)
            {
                //           echo "</br>Estoy en el 2º foreach: Value=" . $value["filters"] . " Key2=" . $key2 . " Filtros=" . $filtros;

                switch ($filtros)//------- ahora aplicamos cada filtro segun sea necesario
                {
                    case 'Stringtrim':
                        //                            echo "</br>Estoy en Stringtrim";
                        $filterArray[$key] = trim($data[$key]);
                        //                            echo "FilterArray: " . $filterArray[$key] . "Data: "  . $data[$key] . "</br>";
                        break;
                    case 'StripTags':
                        //                      echo "</br>Estoy en StripTags";
                        $filterArray[$key] = strip_tags($data[$key]);
                        break;
                    case 'Escape':
                        //                    echo "</br>Estoy en Escape";
                        $filterArray[$key] =  preg_replace ('([^A-Za-z0-9])', ' ', $data[$key]);
                        break;
                    default://---------- ponemos esto por si nos envias un filtro que no tengamos
                        //                  echo "</br>Estoy en el default";

                }
            }
        }
    }
    return $filterArray; //---- devolvemos el array data filtrado
}









