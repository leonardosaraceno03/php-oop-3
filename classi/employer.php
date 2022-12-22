<?php
class Employer
{
    public $nome;
    public $reparto;
    public function __construct(
        String $nome,
        String $reparto
    ) {

        $this->nome = $nome;
        $this->reparto = $reparto;
    }
}
