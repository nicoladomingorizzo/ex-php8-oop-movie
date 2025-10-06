<?php

trait extraInfo
{
    public $regista = null;

    public function hasDirectorInfo()
    {
        return $this->regista !== null;
    }
}

?>