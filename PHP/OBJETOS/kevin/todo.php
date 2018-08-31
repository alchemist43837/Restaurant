<?php
require_once('Persona.php');
require_once('Perro.php');

$fran = new Persona;

$fran->setNombre('Fran');

$lola = new Perro;

$lola->setNombre('Lola');
$lola->setRaza('BorderCollie');

$fran->setPerro($lola);


echo $fran->jugarConPerro();


$perroReemplazo = new Perro;
$perroReemplazo->setNombre('LolaDeReemplazo');

$fran->setPerro($perroReemplazo);
echo "<br>";
echo "<br>";
echo $fran->jugarConPerro();

echo "<br>";
echo "<br>";

echo $fran->enganiarAMiPerro($lola);
