<?php
require_once('Cliente.php');
require_once('Empresa.php');
require_once('Individual.php');
require_once('Cuenta.php');
require_once('CajaAhorro.php');


  $cliente = new Individual ('Ale','Perez',2432141);
  $caja= new CajaAhorro(123,$cliente,100);
  var_dump($cliente);
  var_dump($caja);

  echo "<pre>";
  echo "<br>";

  echo $caja->getSaldo();
  $caja->extraer(60);
  echo $caja->getSaldo();
 ?>
