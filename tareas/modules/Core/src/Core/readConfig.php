<?php


function readConfig($config)
{
    
    $globalFile = ROOT_PATH.'/configs/global.php'; 
    $localFile = ROOT_PATH.'/configs/local.php';
    
    if(!file_exists($globalFile))
        die("Config not found");
    
    if(file_exists($localFile))
    {
        $global = include $globalFile;
        $local = include $localFile;
        return array_merge($global, $local);
    }
    else
        return include $globalFile;    
    
}