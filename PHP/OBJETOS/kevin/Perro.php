<?php

class Perro
{
    private $nombre;
    private $raza;

    public function setNombre($name)
    {
        $this->nombre = $name;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setRaza($raza)
    {
        $this->raza = $raza;
    }

    public function getRaza()
    {
        return $this->raza;
    }

    public function hacerRuido()
    {
        return 'Guau Guau';
    }
}
