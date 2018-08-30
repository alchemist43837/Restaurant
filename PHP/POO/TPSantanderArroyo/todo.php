<?php
require_once('Cliente.php');
require_once('Cuenta.php');
require_once('CajaAhorro.php');
$kevin = new Cliente(1,'Ghio',357767,3756762);
$cajaDeAhorro = new CajaDeAhorro($kevin);
$cajaDeAhorro->depositar(10000);
// echo "<pre>"
echo $cajaDeAhorro->informarSaldo();
echo "<br>";
echo "<br>";
echo $cajaDeAhorro->extraer(8000);
echo "<br>";
echo "<br>";
echo "<br>";
var_dump($cajaDeAhorro);
