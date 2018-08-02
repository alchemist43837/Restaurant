
<?php
  // ejercicio1
  $num1=5;
  $num2=8;

  if($num1<$num2){
    echo "el num ".$num2." es mayor al numero ".$num1;
  }
  else {
    echo "El num " .$num1." es mayor al numero ".$num2;
  }
  // ejercicio2
  $numx = rand(1,5);
  echo "<br/>";
  echo "<br/>";

  if($numx==3 ||$numx==5){
    echo $numx;
  }
  // ejercicio3
  echo "<br/>";
  echo "<br/>";
  if($numx!=3){
    echo "El numero no es 3";
  }
  //ejercicio 4
  echo "<br/>";
  echo "<br/>";

  $numy=rand(1,100);

  if ($numy>50) {
    echo "El numero es mayor a 50";
  }
  else if($numy==50){
    echo "El numero es 50";
  }
  else{
    echo "El numero es menor a 50";
  }

  //ejercicio 5
  echo "<br/>";
  echo "<br/>";
  $nombreDeUsuario="";
  $ContraseniaDeUsuario="";

 if ($nombreDeUsuario=="admin"||$ContraseniaDeUsuario=="1234") {
   echo "Bienvenido";
 }
 else{
   echo "Error de Login";
 }

 //ejercicio 5 a
 echo "<br/>";
 echo "<br/>";
 $nombreDeUsuario="";
 $ContraseniaDeUsuario="1234";


echo ($nombreDeUsuario=="admin"||$ContraseniaDeUsuario=="1234")?"Bienvenido":"Error de Login";
echo "<br/>";
echo "<br/>";
if ($nombreDeUsuario=="admin"||$ContraseniaDeUsuario=="1234") {
  echo "Bienvenido";
}
else if ($nombreDeUsuario!="admin") {
  echo "Error de usuario";
}
else if ($ContraseniaDeUsuario !="1234") {
  echo "Error de Password";
}
//ejercicio 5 a
echo "<br/>";
echo "<br/>";
$nombreDeUsuario="";
$ContraseniaDeUsuario="";

//Ejercicio 6
echo "<br/>";
echo "<br/>";
$edad=20;
$casado= false;
$sexo="";

  if ($edad>18 && $casado==false) {
    echo "Bienvenido ejercicio6";
  }

  //Ejercicio 6 a
  echo "<br/>";
  echo "<br/>";
  $edad=10;
  $casado= true;
  $sexo="otro";

    if (($edad>18 && $casado==false)||$sexo=="otro") {
      echo "Bienvenido ejercicio6";
    }

//ejercicio7
echo "<br/>";
echo "<br/>";
$cantidadDeAlumnos=-19;

if($cantidadDeAlumnos){
  echo "true";
}
else {
  echo "false";
}

//ejercicio 7a/8
echo "<br/>";
echo "<br/>";

if ($i=0) {
  echo "true";
}
else {
  echo "false";
}

echo "<br/>";
echo "<br/>";

//ejercicio 9
$numero=123;
echo ($numero%2==0)?"El numero es par":"el numero es impar";
//ejercicio 10

echo "<br/>";
echo "<br/>";
$nombre="Maria";

switch ($nombre) {
  case 'Pedro':
    echo "Hola".$nombre;
    break;

  default:
    echo "no hay a quien saludar";
    break;
}
//Ejercicio 11
echo "<br/>";
echo "<br/>";
$remera="azul";

switch ($remera) {
  case 'azul':
    echo "La remera es color ".$remera;
    break;
  case 'amarillo':
    echo "La remera es color ".$remera;
    break;
  case 'rojo':
    echo "La remera es color ".$remera;
    break;

  default:
    echo "no es color primario";
    break;
}
?>
<?php
  for ($i=0; $i <100 ; $i++) {
    echo "$i <br/>";
  }

 ?>
