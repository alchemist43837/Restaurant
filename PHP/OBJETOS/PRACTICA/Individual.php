<?php

Class Individual extends Cliente
{
  private $nombre;
  private$apellido;
  private $dni;

  function __construct(string $nombre, string $apellido, int $dni){
      $this->nombre=$nombre;
      $this->apellido=$apellido;
      $this->dni=$dni;
  }
  function setNombre(string $nombre){
    $this->nombre=$nombre;
  }
  function getNombre(){
    return $this->nombre;
  }
  function getApellido(){
    return $this->apellido;
  }
  function getDNI(){
    return $this->dni;
  }
  // parent::__construct(){
  // }
}
 ?>
