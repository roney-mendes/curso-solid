<?php
class Feedback
{
    private int $nota;
    private string $depoimento;

    public function __construct(int $nota, string $depoimento)
    {
        if ($nota < 9 && empty($depoimento)) {
            throw new \DomainException('Depoimento obrigatório');
        }
        
        $this->nota = $nota;
        $this->depoimento = $depoimento;
    }

    public function recuperNota(): int
    {
        return $this->nota;
    }

    public function recuperDepoimento(): ?string
    {
        return $this->depoimento;
    }
}