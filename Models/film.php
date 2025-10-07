<?php

class Film
{
    use ExtraInfo;

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

    public function __construct($titolo, $anno, $voto, $generi, $regista)
    {
        $this->titolo = $titolo;
        $this->anno = $anno;
        $this->voto = $voto;
        $this->generi = $generi;
        $this->regista = $regista;
    }

    public function getGeneriAsString()
    {
        $nomiGeneri = [];
        foreach ($this->generi as $genere) {
            $nomiGeneri[] = $genere->genere;
        }

        return implode(', ', $nomiGeneri);
    }
}

?>