<?php

include ("../vendor/acl/Core/src/Core/Controller/Helper/parseUrl.php");

define ("APPLICATION_PATH", "../modules/Application");
define ("VENDOR_PATH", "../vendor");

$request = parseUrl($_SERVER['REQUEST_URI']);

switch($request['controller'])
{
    case 'users':
        include ("../modules/Application/src/Application/Controller/users.php");
    break;
    
    case 'projects':
    break;
    
    case 'fuel':
    break;
    
}