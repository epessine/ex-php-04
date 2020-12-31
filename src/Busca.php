<?php

namespace Eduar\ExPhp04;

class Busca
{
    private $url = "https://viacep.com.br/ws/";

    public function obterEnderecoCep(string $cep) : array
    {
        $cep = preg_replace('/[^0-9]/im', '', $cep);

        $get = file_get_contents($this->url . $cep . '/json');

        return (array) json_decode($get);
    }
}