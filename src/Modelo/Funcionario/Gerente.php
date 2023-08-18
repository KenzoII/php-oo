<?php
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Funcionario\Funcionario;

class Gerente extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(){
        return $this->getSalario();
    }

    public function autenticavel(string $senha): bool
    {
        return $senha === '4321';
    }
}
