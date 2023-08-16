<?php

use Alura\Banco\Modelo\Servico\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;

require_once 'autoload.php';

$funcionario = new Desenvolvedor(
    'Kenzo', new CPF('151252512810'),
     1000
);


$funcionaria = new Gerente(
    'Sayuri',
    new CPF('98426715415'),
    3000
);

$diretor =  new Diretor(
    'Kathelin',
    new CPF('12584154515'),
    5000
);

$funcionario->promocao();
$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($funcionario);
$controlador->adicionaBonificacao($funcionaria);
$controlador->adicionaBonificacao($diretor);

echo $controlador->getTotalDeBonificacoes();