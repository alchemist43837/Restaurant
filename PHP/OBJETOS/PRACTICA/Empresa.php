<?php
Class Empresa extends Cliente
{
  private $nombreFantasia;
  private $cuit;

  function __construct (string $nombreFantasia , int $cuit){
    $this->nombreFantasia=$nombreFantasia;
    $this->cuit=$cuit;
  }

  function setNombreFantasia(string $nombreFantasia){
    $this->nombreFantasia=$nombreFantasia;
  }

  function getNombreFantasia(){
    return $this->nombreFantasia;
  }
  function getCuit(){
    return $this->$cuit;
  }
}

 ?>
