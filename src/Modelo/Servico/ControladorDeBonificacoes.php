<?php

namespace Alura\Banco\Modelo\Servico;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private int $totalDeBonificacoes = 0;

    public function adicionaBonificacao(Funcionario $funcionario){
        $this->totalDeBonificacoes += $funcionario->calculaBonificacao();
    }

    public function getTotalDeBonificacoes(): int
    {
        return $this->totalDeBonificacoes;
    }
}
