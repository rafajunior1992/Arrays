<?php

require_once 'Calculadora.php';

$notas = [ 9, 3, 10, 5, 10, 8 ];

$calculadora = new Calculadora();
echo "A média é {$calculadora->calculaMedia($notas)}";

