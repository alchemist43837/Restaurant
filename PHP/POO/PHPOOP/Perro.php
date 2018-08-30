<?php

class Perro
{
    private $nombre;
    private $raza;

    public function __construct(string $nombre,string $raza)
    {
        $this->nombre = $nombre;
        $this->raza = $raza;
    }

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

    public function jugarConOtroPerro(Perro $perro)
    {
        echo $this->getNombre() . ' dijo: ' .$this->hacerRuido();
        echo "<br>";
        echo $perro->getNombre() . ' dijo: ' .$perro->hacerRuido();
    }
}
