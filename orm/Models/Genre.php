<?php

namespace orm\Models;

class Genre
{

    private $Id;
    private $Name;

    public function __construct($Id,$Name) {
        $this->Id=$Id;
        $this->Name=$Name;

    }

}