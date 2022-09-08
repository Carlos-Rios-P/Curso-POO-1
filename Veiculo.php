<?php

class Veiculo {
    
    public $color;
    public $engine;

    public function getEngine($type = 'horsepower')
    {
        return $this->engine . " $type";
    }
}