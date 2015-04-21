<?php

include ("../vendor/acl/Core/src/Core/Controller/Helper/parseUrl.php");

define ("APPLICATION_PATH", "../modules/Application");
define ("VENDOR_PATH", "../vendor");

$request = parseUrl($_SERVER['REQUEST_URI']);

// echo "<pre>";
// print_r($request);
// echo "</pre>";

switch($request['controller'])
{
    case 'users':
        include ("../modules/Application/src/Application/Controller/users.php");
    break;
    
    case 'home':
        include ("../modules/Application/src/Application/Controller/home.php");
    break;
    
    case 'fuel':
    break;
    
}