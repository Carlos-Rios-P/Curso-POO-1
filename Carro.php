<?php

class Carro {
    public $color;
    public $engine;

    public function getEngine()
    {
        return $this->engine . " horsepower";
    }
}