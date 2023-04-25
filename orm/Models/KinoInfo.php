<?php

namespace orm\Models;

class KinoInfo
{
    private $KinoId;
    private $Name;
    private $Year;
    private $Country;

    public function __construct($Name,$Country,$KinoId,$Year){
        $this->KinoId=$KinoId;
        $this->Year=$Year;
        $this->Name=$Name;
        $this->Country=$Country;
    }
}