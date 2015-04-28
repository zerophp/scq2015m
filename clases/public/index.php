<?php

define ("APPLICATION_PATH", "../modules/Application");
define ("VENDOR_PATH", "../vendor");
define ("ROOT_PATH", "../");

include ("../vendor/acl/Core/src/Core/Config.php");
include ("../vendor/acl/Core/src/Core/Controller/Dispatch.php");
include ("../vendor/acl/Core/src/Core/Controller/Helper/Router.php");

$routes = include ("../configs/routes.config.php");

$config = Config::readConfig('../configs/application.config.php');
$request = Router::readRoute($_SERVER['REQUEST_URI'], $routes);
$responde = Dispatch::dispatcher($request);