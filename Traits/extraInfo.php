<?php

trait ExtraInfo
{
    public $regista = null;

    public function hasDirectorInfo()
    {
        return $this->regista !== null;
    }
}

?>