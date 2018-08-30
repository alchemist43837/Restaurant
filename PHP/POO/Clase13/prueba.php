<?php
require_once ("usuario.php");

$usuario1= new Usuario ('Luis','luis@abc.com','abcabc');
$usuario2= new Usuario('Mateo','mateo@xyz.com','xyzxyz');

var_dump($usuario1);
var_dump($usuario2);

  $usuario1->saludar($usuario1);
  $usuario2->saludar($usuario2);

  $usuario1->getemail($usuario1);

 ?>
