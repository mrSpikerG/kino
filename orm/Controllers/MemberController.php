<?php

namespace orm\Controllers;
include_once __DIR__."/ControllerBase.php";
class MemberController extends ControllerBase
{

    public function Insert()
    {
        // TODO: Implement Insert() method.
    }

    public function Drop()
    {
        // TODO: Implement Drop() method.
    }

    public function Select()
    {
        $sql_select = 'SELECT * FROM member';
        return $this->conn->query($sql_select);
    }

    public function SelectByRole($roleId)
    {
        $sql_select = 'SELECT * FROM member WHERE RoleId = '.$roleId;
        return $this->conn->query($sql_select);
    }

    public function Update()
    {
        // TODO: Implement Update() method.
    }
}