<?php
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;

class Diretor extends Funcionario
{
    public function calculaBonificacao(){
        return $this->getSalario() * 2;
    }

    public function autenticar(string $senha) : bool{
        return $senha == '1234';
    }
}
