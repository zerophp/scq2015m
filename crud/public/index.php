<?php

define ("APPLICATION_PATH", "../modules/Application");
define ("VENDOR_PATH", "../vendor");
define ("ROOT_PATH", "../");

include ("../vendor/acl/Core/src/Core/readConfig.php");

$config = readConfig('../configs/application.config.php');

// echo "<pre>config: ";
// print_r($config);
// echo "</pre>";

include ("../vendor/acl/Core/src/Core/Controller/Helper/parseUrl.php");


$request = parseUrl($_SERVER['REQUEST_URI']);

// echo "<pre>request: ";
// print_r($request);
// echo "</pre>";

// die("aqui");

switch($request['controller'])
{
    case 'index':
    case 'users':
        include ("../modules/Application/src/Application/Controller/users.php");
    break;
    
    case 'home':
        include ("../modules/Application/src/Application/Controller/home.php");
    break;
    
    case 'crud':
        include ("../modules/Application/src/Application/Controller/crud.php");
    break;
    
}