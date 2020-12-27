<?php

namespace Alura\Solid\Model;

class AluraMais extends Video implements Pontuavel
{
    private $categoria;

    public function __construct(string $nome, string $categoria)
    {
        parent::__construct($nome);
        $this->categoria = $categoria;
    }

    public function recuperarUrl(): string
    {
        $slugCategory  = new Slug($this->categoria);
        $slugName = new Slug($this->nome);
        return 'http://videos.alura.com.br/' . $slugCategory->__toString() .'/'. $slugName->__toString();
    }

    public function recuperarPontuacao(): int
    {
        return $this->minutosDeDuracao() * 2;
    }
}
