<?php

namespace orm\Controllers;

include_once __DIR__."/ControllerBase.php";
class RoleController extends ControllerBase
{

    public function Insert($model)
    {
        $sql_select = "INSERT INTO role(`RoleName`) VALUES ('{$model->getRoleName()}')";
        return $this->conn->query($sql_select);
    }

    public function Drop()
    {
        // TODO: Implement Drop() method.
    }

    public function Select()
    {
        $sql_select = 'SELECT * FROM role';
        return $this->conn->query($sql_select);
    }

    public function SelectByName($roleName)
    {
        $sql_select = "SELECT * FROM role WHERE RoleName = '".$roleName."'";
        return $this->conn->query($sql_select);
    }

    public function Update()
    {
        // TODO: Implement Update() method.
    }
}