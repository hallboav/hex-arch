<?php

namespace App\Dominio;

interface PartidoInterface
{
    public function obterId(): int;
    public function obterNome(): string;
}