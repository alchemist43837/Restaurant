<?php
Abstract Class Cuenta
{
  private $nroCuenta;
  private $clienteAsociado;
  private $saldo;

  function __construct(int $nroCuenta, Cliente $clienteAsociado, int $saldo){
    $this->nroCuenta=$nroCuenta;
    $this->clienteAsociado=$clienteAsociado;
    $this->saldo=$saldo;
  }

  public function getSaldo(){
    return $this->saldo;
  }

  function depositar(int $monto){
    $this->saldo +=$monto;
  }

  function extraer($monto){

  }


}

 ?>
