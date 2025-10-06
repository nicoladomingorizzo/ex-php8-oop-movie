<?php

class Film
{
    public $titolo;
    public $anno;
    public $voto;
    public $generi = [];

    public function isGood()
    {
        if ($this >= 4) {
            return true;
        }
        return false;
    }

    public function __construct($titolo, $anno, $voto, $generi)
    {
        $this->titolo = $titolo;
        $this->anno = $anno;
        $this->voto = $voto;
        $this->generi = $generi;
    }
}

?>