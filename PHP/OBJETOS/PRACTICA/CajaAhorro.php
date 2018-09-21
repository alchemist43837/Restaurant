<?php
Class CajaAhorro extends Cuenta
{
  private $tasaInteres;

  public function extraer($monto){
    if ($this->saldo - $monto > 0 ){
      $this->saldo= $this->saldo-$monto;
    }
    else  {
      // return echo "no tiene saldo suficiente" ;
    }
  }
  public function cobrarInteres(){
  }
}
 ?>
