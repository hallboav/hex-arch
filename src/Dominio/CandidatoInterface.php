<?php

namespace App\Dominio;

interface CandidatoInterface extends PessoaInterface
{
    public function obterPartido(): PartidoInterface;
    public function foiVotadoPor(EleitorInterface $eleitor): bool;
}