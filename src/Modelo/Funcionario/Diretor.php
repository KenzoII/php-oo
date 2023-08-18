<?php
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(){
        return $this->getSalario() * 2;
    }

    public function autenticavel(string $senha) : bool{
        return $senha == '1234';
    }
}
