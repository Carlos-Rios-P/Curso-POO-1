<?php

class Veiculo {

    protected $color;
    private $engine;

    public function __construct($color, $engine)
    {
        $this->color = $color;
        $this->engine =  $engine;
    }

    public function getEngine($type = 'horsepower')
    {
        return $this->engine . " $type";
    }
}