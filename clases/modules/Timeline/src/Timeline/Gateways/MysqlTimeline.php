<?php
namespace Timeline\Gateways;

use acl\Core\Adapter\MysqlAdapter;

class MysqlTimeline extends MysqlAdapter
{
    public function getTimelines()
    {
        $data = [];
        $query = "SELECT * FROM timeline";
        $result = $this->query($query);
        $data = $this->recordSet($result);
        
        return $data;
    }
    
    public function getTimeline($id)
    {
        $data = [];
        $query = "SELECT * FROM timeline WHERE idtimeline = '". $id.="'";
        $result = $this->query($query);
        $data = $this->recordSet($result);
        
        return $data;
    }
    
    private function getTableColumns($table)
    {
        $data = [];
        $query = "describe ".$table;
        $result = $this->query($query);
        $data = $this->recordSet($result);
        
        $columns=[];
        foreach ($data as $field)
        {
            $columns[] = $field['Field'];    
        }
        
        return $columns;
    }
    
    public function setTimeline($data)
    {
        $data['idtimeline']=time();
        $columns = $this->getTableColumns('timeline');
        
        
        $vals = [];
        foreach($data as $key => $value)
        {   
            if(in_array($key, $columns))
                $vals[] = $key."='".$value."'";
        }
        $vals = implode(",", $vals);
        
        
        $query = "INSERT INTO timeline SET ".$vals;

        $result = $this->query($query);
        return $result;
        
    }
    
    public function deleteTimeline($id)
    {
        $query = "DELETE FROM timeline WHERE idtimeline='".$id."'";

        $result = $this->query($query);
        
        return $result;
    }
    
    public function putTimeline($id, $data)
    {
        $columns = $this->getTableColumns('timeline');
        
        
        $vals = [];
        foreach($data as $key => $value)
        {
            if(in_array($key, $columns))
                $vals[] = $key."='".$value."'";
        }
        $vals = implode(",", $vals);
        
        $query = "UPDATE timeline SET ".$vals." WHERE idtimeline='".$id."'";
        
        
        $result = $this->query($query);
        return $result;
    }
}



















