<?php


/**
 * Parse URL
 * @param string $url
 * @return array
 * 
 * array('controller', 'action', 'params'=>array());
 * 
 *  
    /                           -> controller = default, action = index, params = null
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
    $controller = array ('users'=>array('insert', 'update', 'delete', 'select'));
    
    
    return $array;
}