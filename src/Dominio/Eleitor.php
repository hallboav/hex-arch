<?php

namespace App\Dominio;

class Eleitor extends PessoaAbstrata implements EleitorInterface
{
    private $repositorioVoto;

    public function __construct(int $id, string $nome, RepositorioVotoInterface $repositorioVoto)
    {
        $this->repositorioVoto = $repositorioVoto;
        
        parent::__construct($id, $nome);
    }

    public function votar(CandidatoInterface $candidato): void
    {
        if ($this->jaUsouTodosVotos()) {
            throw new \DomainException(sprintf('Eleitor %s já usou todos seus votos.', $this->obterNome()));
        }

        if ($candidato->foiVotadoPor($this)) {
            throw new \DomainException(sprintf('Eleitor %s já votou no candidato %s.', $this->obterNome(), $candidato->obterNome()));
        }

        $this->repositorioVoto->salvarVoto($this, $candidato);

        file_put_contents('php://output', sprintf('Eleitor %s votou no candidato %s.', $this->obterNome(), $candidato->obterNome()));
    }

    private function jaUsouTodosVotos()
    {
        return 3 <= $this->obterQuantidadeVotos();
    }
}