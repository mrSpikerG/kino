<?php

namespace orm\Models;

class Kino
{
    private $Id;
    private $LocalisedName;
    private $Preview;
    private $IMDB;
    private $IsPremium;
    private $GenreId;

    public function __construct($Id,$LocalisedName,$IMDB,$GenreId,$Preview,$IsPremium){
        $this->Id=$Id;
        $this->GenreId=$GenreId;
        $this->IMDB=$IMDB;
        $this->IsPremium=$IsPremium;
        $this->LocalisedName=$LocalisedName;
        $this->Preview=$Preview;
    }
}