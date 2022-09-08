<?php

require_once("Carro.php");

$ferrari = new Carro;

$ferrari->marca =  'Ferrari';
$ferrari->cor =  'Vermelho';
$ferrari->motor =  300;

$mustang =  new Carro;

$mustang->marca =  'Mustang';
$mustang->cor =  'Branco';
$mustang->motor =  400;

var_dump($mustang);