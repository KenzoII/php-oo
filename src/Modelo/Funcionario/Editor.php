<?php
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;

class Editor extends Funcionario
{
    public function calculaBonificacao(){
        return 600;
    }

   
}
