<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Autenticavel;


class Autenticar
{
    public function login(Autenticavel $autenticavel, string $senha)
    {
        if($autenticavel->autenticavel($senha)){
            echo 'Usuario logado no sistema';
        }
        else{
            echo 'Senha incorreta';
        }
    }

}
