<?php

require_once("Veiculo.php");
class Carro extends Veiculo {
    private $portas;

    public function setPortas($portas){
        $this->portas = $portas;
    }

    public function getPortas(){
        return $this->portas;
    }
}