<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Servico\Autenticar;

require_once 'autoload.php';

$auth = new Autenticar();

$diretor = new Titular(
    'Kenzo',new CPF('41254851512'), 10000
);

$auth->login($diretor, 'abc');