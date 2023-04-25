<?php

namespace orm\Models;

class Member
{

    private $Id;
    private $KinoId;
    private $RoleId;
    private $Fullname;

    public function __construct($Id,$KinoId,$Fullname,$RoleId){
        $this->KinoId=$KinoId;
        $this->Fullname=$Fullname;
        $this->RoleId=$RoleId;
        $this->Id=$Id;
    }
}