<?php

require ("../autoload.php");

define ("MODULE_PATH", "../modules");
define ("APPLICATION_PATH", "../modules/Application");
define ("VENDOR_PATH", "../vendor");
define ("ROOT_PATH", "../");
define ("RPATH", $_SERVER['DOCUMENT_ROOT']."/..");

$routes = include ("../configs/routes.config.php");

use acl\Core\Controller\Dispatch;
use acl\Core\Config;
use acl\Core\Controller\Helper\Router;

$config = Config::readConfig('../configs/application.config.php');
$request = Router::readRoute($_SERVER['REQUEST_URI'], $routes);
$response = Dispatch::dispatcher($request);

echo $response;