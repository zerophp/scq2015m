<?php
namespace Application\Mapper;

use acl\Core\Config;

class UserMapper
{
    private $resource = 'User';
    public $adapter;
    
    public function getUsers()
    {
        
        
        $gatewayName = "Application\\Gateways\\".Config::$config['adapter'].$this->resource;
        $gateway = new $gatewayName(Config::$config['database']);
        
        $users = $gateway->getUsers();
        
        return $users;
    }
    
    
}