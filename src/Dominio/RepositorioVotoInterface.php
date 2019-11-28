<?php

namespace App\Dominio;

interface RepositorioVotoInterface
{
    public function salvarVoto(EleitorInterface $eleitor, CandidatoInterface $candidato): void;
}