<?php


function autoload($classname)
{
    $class = explode("\\",$classname);
    $classname = $class[0]."/src/".$classname.".php";
    
    if(file_exists(__DIR__."/modules/".$classname))
        include __DIR__."/modules/".$classname;
    
}

function autoloadVendor($classname)
{ 
    $class = explode("\\",$classname);
    
    $constructor= $class[0];
    unset($class[0]);    
    $classname = implode("\\",$class);
        
    $classname = $class[1]."/src/".$classname.".php";
    
    if(file_exists(__DIR__."/vendor/".$constructor."/".$classname))
        include __DIR__."/vendor/".$constructor."/".$classname;
}

spl_autoload_register("autoload");
spl_autoload_register("autoloadVendor");





