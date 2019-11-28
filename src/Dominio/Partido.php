<?php

namespace App\Dominio;

class Partido
{
    private $id;
    private $nome;

    public function __construct(int $id, string $nome)
    {
        $this->id = $id;
        $this->nome = $nome;
    }

    public function obterId(): int
    {
        return $this->id;
    }

    public function obterNome(): string
    {
        return $this->nome;
    }
}