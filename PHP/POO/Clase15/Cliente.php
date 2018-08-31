<?php
abstract class Cliente
{
  protected int $numeroCliente

  function __construct(int $numeroCliente){
    $this->numeroCliente= $numeroCliente;
  }

  function identificarse(int $identificacion)
  {

  }
}

 ?>
