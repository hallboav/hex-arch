<?php

namespace App\Dominio;

interface EleitorInterface extends PessoaInterface
{
    public function obterQuantidadeVotos(): int;
    public function votar(CandidatoInterface $candidato): void;
}