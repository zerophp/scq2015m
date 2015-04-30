<?php
namespace Timeline\Mapper;

use acl\Core\Config;

class TimelineMapper
{
    private $resource = 'Timeline';
    public $adapter;
    
    public function getTimelines()
    {
        $gatewayName = "Timeline\\Gateways\\".Config::$config['adapter'].$this->resource;
        $gateway = new $gatewayName(Config::$config['database']);
        
        $timelines = $gateway->getTimelines();
        
        return $timelines;
    }
    
    public function getTimeline($id)
    {
        $gatewayName = "Timeline\\Gateways\\".Config::$config['adapter'].$this->resource;
        $gateway = new $gatewayName(Config::$config['database']);
    
        $timelines = $gateway->getTimeline($id);
    
        return $timelines;
    }
    
    public function setTimeline($data)
    {
        $gatewayName = "Timeline\\Gateways\\".Config::$config['adapter'].$this->resource;
        $gateway = new $gatewayName(Config::$config['database']);
        
        $timelines = $gateway->setTimeline($data);
        
        return $timelines;
    }
    
    public function putTimeline($id, $data)
    {
        $gatewayName = "Timeline\\Gateways\\".Config::$config['adapter'].$this->resource;
        $gateway = new $gatewayName(Config::$config['database']);
        
        $timelines = $gateway->putTimeline($id, $data);
        
        return $timelines;
    }
    
    public function deleteTimeline($id)
    {
        $gatewayName = "Timeline\\Gateways\\".Config::$config['adapter'].$this->resource;
        $gateway = new $gatewayName(Config::$config['database']);
        
        $timelines = $gateway->deleteTimeline($id);
        
        return $timelines;
    }
    
    
    
}