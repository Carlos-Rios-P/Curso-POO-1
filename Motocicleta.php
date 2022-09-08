<?php

require_once("Veiculo.php");

class Motocicleta extends Veiculo {

    public function __construct($color, $engine)
    {
        parent::__construct(strtoupper($color), $engine);
    }
}