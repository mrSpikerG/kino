<?php

namespace orm\Controllers;

abstract class ControllerBase
{

    protected $conn;
    public function __construct($conn) {
        $this->conn=$conn;
    }

    public abstract function Insert($Model);
    public abstract function Drop();
    public abstract function Select();
    public abstract function Update();
}