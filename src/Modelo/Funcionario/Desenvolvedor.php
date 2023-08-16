<?php
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;

class Desenvolvedor extends Funcionario
{
    public function promocao(){
        $this->recebeAumento($this->getSalario() * 0.75);
    }
}