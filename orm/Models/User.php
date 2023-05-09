<?php

namespace orm\Models;

class User
{
    private $Id;
    private $Name;
    private $Password;
    private $Balance;
    private $IsPremium;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->Balance;
    }

}