<?php

require_once("Carro.php");
require_once("Motocicleta.php");

$ferrari = new Carro('Vermelho', 2);
$ferrari->portas =  2;

// $mustang =  new Carro;

// $mustang->color =  'Branco';
// $mustang->engine =  400;
// $mustang->portas =  4;

// $honda = new Motocicleta;

// $honda->color =  'Verde';
// $honda->engine =  400;


echo $ferrari->color;