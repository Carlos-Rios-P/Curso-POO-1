<?php

require_once("Carro.php");

$ferrari = new Carro;

$ferrari->color =  'Vermelho';
$ferrari->engine =  300;

$mustang =  new Carro;

$mustang->color =  'Branco';
$mustang->engine =  400;

echo $mustang->getEngine();