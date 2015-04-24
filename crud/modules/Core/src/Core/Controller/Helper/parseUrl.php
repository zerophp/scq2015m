<?php
/**
 * Parse URL
 * @param string $url
 * @return array
 * 
 * array('controller', 'action', 'params'=>array());
 * 
 *  
    /                           -> controller = index, action = index, params = null
    /users                      -> controller = users, action = index, params = null
    /users/insert               -> controller = users, action = insert, params = null
    /users/update/id/8          -> controller = users, action = update, params = array(id=>8)
    /kaka                       -> controller = error, action = 404, params = null
    /users/kaka                 -> controller = error, action = 404, params = null
    /users/update/kaka/kaka2    -> controller = users, action = update, params = array(kaka=>kaka2)
    /users/update/kaka          -> controller = error, action = 400, params = null
 * 
 */

function parseUrl($url)
{
    $controller = array(
        'users' => array(
            'insert',
            'update',
            'delete',
            'select'
        )
    );
     
    // Descomponer la url
    $components = explode('/', $url);
     
    // Determinar el controlador
    if(file_exists(APPLICATION_PATH."/src/Application/Controller/".$components[1].".php"))
        $array['controller'] = $components[1];
    else if(isset($components[1]))
        $array['controller'] = 'error';

     
    if ($components[1] != "")
    {
        // Determinar la accion
        if (isset($components[2]))
        {
            if(in_array($components[2], $controller[$components[1]]))
                $array['action'] = $components[2];
            else {
                $array['controller'] = 'error';
                $array['action'] = 404;
            }
             
            if (isset($components[3]))
            {
                // Si el número de parametros es impar
                if (count($components) > 3 && count($components) % 2 == 0) {
                    $array['controller'] = 'error';
                    $array['action'] = '400';
                    $array['params'] = null;
                }
                else {
                    // Comprobar si existe controlador
                    $existcontroller = false;
                    foreach ($controller as $key => $value) {
                        if (($array['controller'] == $key))
                            $existcontroller = true;
                    }
                    // Si existe controlador
                    if ($existcontroller) {
                        // Comprobar si existe accion
                         
                        if (! in_array($array['action'], $controller[$array['controller']])) {
                            $array['controller'] = 'error';
                            $array['action'] = '404';
                            $array['params'] = null;
                        }
                        else // Existe accion en el controlador
                        {
                            // Asignacion de los parametros
                            $num = 3;
                            while (isset($components[$num]))
                            {
                                $array['params'][$components[$num]] = $components[$num + 1];
                                $num += 2;
                            }
                        }
                    }
                    else {
                        $array['controller'] = 'error';
                        $array['action'] = '404';
                        $array['params'] = null;
                    }
                }
            }
            else
            {
//                 $array['controller'] = 'users';
//                 $array['action'] = 'index';
                $array['params'] = null;
            }
             
        }
        else 
        {
            $array['action'] = 'index';
        }
         
    }
    else {
        $array['controller'] = 'index';
        $array['action'] = 'index';
        $array['params'] = null;
    }
    
     
    return $array;
}