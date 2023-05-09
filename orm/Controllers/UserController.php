<?php

namespace orm\Controllers;

include_once __DIR__."/ControllerBase.php";
class UserController extends ControllerBase
{

    public function Insert($model)
    {
        $sql_select = "INSERT INTO user(`Name`,`Password`,`Balance`,`IsPremium`) VALUES ('{$model->getName()}', '{$model->getPassword()}', 0, false) ";
        return $this->conn->query($sql_select);
    }

    public function Drop()
    {
        // TODO: Implement Drop() method.
    }

    public function Select()
    {
        $sql_select = 'SELECT * FROM user';
        return $this->conn->query($sql_select);
    }

    public function Update()
    {
        // TODO: Implement Update() method.
    }
}