<?php
namespace Application\Gateways;

use acl\Core\Adapter\MysqlAdapter;

class MysqlUser extends MysqlAdapter
{
    public function getUsers()
    {
        $users = [];
        $query = "SELECT * FROM user";
        $result = $this->query($query);
        $users = $this->recordSet($result);
        
        return $users;
    }
}