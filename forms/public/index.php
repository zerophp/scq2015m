<?php


define ("APPLICATION_PATH", "../modules/Application");
define ("VENDOR_PATH", "../vendor");

echo "<pre>";
print_r($_SERVER['REQUEST_URI']);
echo "</pre>";

echo "<pre>";
print_r(explode("/", $_SERVER['REQUEST_URI']));
echo "</pre>";






if(isset ($_GET['controller']))
    $controller = $_GET['controller'];
else
    $controller = 'users';

switch($controller)
{
    case 'users':
        include ("../modules/Application/src/Application/Controller/users.php");
    break;
    
    case 'projects':
    break;
    
    case 'fuel':
    break;
    
}