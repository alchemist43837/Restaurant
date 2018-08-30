<?php

class Persona
{
    private $nombre;
    private $edad;
    private $perros;

    public function __construct(string $nombre,int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->perros = [];
    }

    public function setNombre($name)
    {
        $this->nombre = $name;
    }
    public function setPerro(Perro $perro)
    {
        if (count($this->perros) < 3) {
            $this->perros[] = $perro;
        }else {
            echo 'No podes tener mas perros, PERRO';
        }
    }
    public function getPerros()
    {
        return $this->perros;
    }

    public function getNombre()
    {
        return $this->nombre;
    }


    public function jugarConPerros(){
        foreach ($this->perros as $perro) {
            echo $perro->getNombre() . " dijo: ". $perro->hacerRuido();
            echo "<br>";
        }
    }

    public function jugarConOtros($persona)
    {
        foreach ($persona->getPerros() as $perro) {
            echo $perro->getNombre() . " dijo: ". $perro->hacerRuido();
            echo "<br>";
        }
    }

    public function jugarConTodos($persona)
    {
        foreach ($this->perros as $perro) {
            foreach ($persona->getPerros() as $perroDeOtro) {
                echo $perro->jugarConOtroPerro($perroDeOtro);
                echo "<br>";
            }
        }
    }






}
