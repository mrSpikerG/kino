<?php

namespace orm\Models;

class Role
{
    private $Id;
    private $RoleName;

    /**
     * @return mixed
     */
    public function getRoleName()
    {
        return $this->RoleName;
    }
}