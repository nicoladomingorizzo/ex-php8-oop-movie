<?php

class Genere
{
    public $genere;
    public $vietatoAiMinori;

    public function __construct($genere, $vietatoAiMinori)
    {
        $this->genere = $genere;
        $this->vietatoAiMinori = $vietatoAiMinori;
    }
}

?>