<?php

class Genere
{
    public $genere;
    public $vietatoAiMinori;

    public function __construct($genere, $vietatoAiMinori)
    {
        if ($genere == 'Horror') {
            return true;
        } else
            false;
    }
}

?>