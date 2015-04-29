<?php
namespace Application\Controller;

use Application\Mapper\UserMapper;
use acl\Core\View\View;

class Crud
{
    
    public $layout = 'dashboard';
    
    public function index()
    {
        
    }
    
    public function select()
    {
        echo "esto es select";
  
        $mapper = new UserMapper();
        $users = $mapper->getUsers();
        
        $content = View::renderView("../modules/Application/views/crud/select.phtml",
            array('users'=>$users)
        );
        
        return $content;
    }
    
    public function insert()
    {
        if($_POST)
        {
            $user = setUser($_POST, $config['database']);
            header("Location: /crud/select");
        }
        else
        {
            $content = renderView("../modules/Application/views/crud/insert.phtml",
                array('configDatabase'=>$config['database']));
        }
    }
    
    public function update()
    {
        if ($_POST)
        {
            $user = putUser($_POST['id'], $_POST);
            header("Location: /crud/select");
        }
        else
        {
            $user = getUser($request['params']['id']);
            $content = renderView("../modules/Application/views/crud/update.phtml",
                array('fieldsLine'=>$user)
            );
        }
    }
    
    public function delete()
    {
        if ($_POST)
        {
            if ($_POST['borrar'] === "SI")
            {
                deleteUser($_POST['id']);
            }
            header("Location: /crud/select");
        }
        else
        {
            $user = getUser($request['params']['id']);
            $content = renderView("../modules/Application/views/crud/delete.phtml",
                array('user'=>$user)
            );
        }
    }
    
   
    
    
}


// include ("../modules/Application/views/layouts/dashboard.phtml");













