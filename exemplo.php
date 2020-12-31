<?php

require_once "vendor/autoload.php";

use Eduar\ExPhp04\Busca;

$busca = new Busca;

$resultado = $busca->obterEnderecoCep('01310-100');

print_r($resultado);