<?php

namespace Alura\Banco\Modelo;

interface Autenticavel
{
    public function autenticavel(string $senha) : bool;
}
?>