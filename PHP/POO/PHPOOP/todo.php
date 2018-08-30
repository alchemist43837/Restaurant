<?php
require_once('Persona.php');
require_once('Perro.php');

$fran = new Persona('Fran',20);

$lola = new Perro('Lola','BorderCollie');
$manolo = new Perro('Manolo','Boxer');
$enzo = new Perro('Enzo','Rottwailer');
$ticu = new Perro('Ticu','pp');
$bonobon = new Perro('BonOBon','Caniche');

$kevin = new Persona('Kevin',25);


$fran->setPerro($lola);
$fran->setPerro($manolo);
$fran->setPerro($enzo);

$kevin->setPerro($ticu);
$kevin->setPerro($bonobon);

$fran->jugarConTodos($kevin);
