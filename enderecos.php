<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$endereco = new Endereco('Cidade','Bairro','Rua','10');


echo $endereco->bairro;