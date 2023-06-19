<?php

class Genre {
    public String $genName;
    public String $genId;


    public function __construct($genName, $genId){
        $this->genName = $genName;
        $this->genId = $genId;


    }
}
