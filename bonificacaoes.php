<?php

use Alura\Banco\Servico\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Editor;

require_once 'autoload.php';

$desenvolvedor = new Desenvolvedor(
    'Desenvolvedor', new CPF('151252512810'),
     1000
);


$gerente = new Gerente(
    'Gerente', new CPF('98426715415'),
    3000
);

$diretor =  new Diretor(
    'Diretor', new CPF('12584154515'),
    5000
);

$editor =  new Editor(
    'Editor', new CPF('12584154515'),
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($desenvolvedor);
$controlador->adicionaBonificacao($gerente);
$controlador->adicionaBonificacao($diretor);
$controlador->adicionaBonificacao($editor);

echo $controlador->getTotalDeBonificacoes();