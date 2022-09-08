<?php

require_once("Carro.php");
require_once("Motocicleta.php");

$ferrari = new Carro('Vermelho', 2);
$ferrari->setPortas(3);

// $mustang =  new Carro;

// $mustang->color =  'Branco';
// $mustang->engine =  400;
// $mustang->portas =  4;

$honda = new Motocicleta('Azul', 500);

// echo $ferrari->getPortas();