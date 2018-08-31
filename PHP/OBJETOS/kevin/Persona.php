<?php

class Persona
{
    private $nombre;
    private $edad;
    private $perro;


    public function setNombre($name)
    {
        $this->nombre = $name;
    }
    public function setPerro(Perro $perro)
    {
        $this->perro = $perro;
    }
    public function getPerro()
    {
        return $this->perro;
    }

    public function getNombre()
    {
        return $this->nombre;
    }


    public function jugarConPerro(){
        return $this->perro->getNombre () .' dijo: '.$this->perro->hacerRuido();
    }

    public function enganiarAMiPerro(Perro $perro)
    {
        return $perro->getNombre () .' dijo: '.$perro->hacerRuido();
    }





}
