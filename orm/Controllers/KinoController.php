<?php

namespace orm\Controllers;
include_once __DIR__."/ControllerBase.php";
class KinoController extends ControllerBase
{

    public function Insert($model)
    {
        // TODO: Implement Insert() method.
    }

    public function Drop()
    {
        // TODO: Implement Drop() method.
    }

    public function Select()
    {
        $sql_select = 'SELECT * FROM kino';
        return $this->conn->query($sql_select);
    }

    public function SelectById($id)
    {
        $sql_select = 'SELECT * FROM kino WHERE Id = '.$id;
        return $this->conn->query($sql_select);
    }

    public function Update()
    {
        // TODO: Implement Update() method.
    }
}