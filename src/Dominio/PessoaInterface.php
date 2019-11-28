<?php

namespace App\Dominio;

interface PessoaInterface
{
    public function obterId(): int;
    public function obterNome(): string;
}