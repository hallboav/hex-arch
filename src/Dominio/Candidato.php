<?php

namespace App\Dominio;

class Candidato extends PessoaAbstrata implements CandidatoInterface
{
    private $partido;

    public function __construct(int $id, string $nome, PartidoInterface $partido)
    {
        $this->partido = $partido;
        
        parent::__construct($id, $nome);
    }

    public function obterPartido(): PartidoInterface
    {
        return $this->partido;
    }

    public function foiVotadoPor(EleitorInterface $eleitor): bool
    {
        return true;
    }
}