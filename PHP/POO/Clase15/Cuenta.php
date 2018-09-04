<?php
  Class Cuenta {
    protected $numeroCuenta;
    protected $numeroCliente;
    protected $saldo;

    public function __construct($cuenta,$cliente,$saldo){
      $this->numerocuenta=$numeroCuenta;
      $this->numeroCliente=$numeroCliente;
      $this->saldo=$saldo;
    }
    public function depositar($monto){
      $this->monto=$monto;

    }

    public function extraer($monto){

    }


  }
 ?>
