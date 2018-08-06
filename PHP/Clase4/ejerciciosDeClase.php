<?php

// //ejercicio 1 - A

echo "<br>";

function mayor($a,$b,$c){
  if($a>$b && $a>$c){
    return $a;
  }
  else if ($b>$a && $b>$c) {
    return $b;
  }
  else {
    return $c;
  }
}

echo mayor(4,620,8);

// ejercicio 1 - B OK
echo "<br>";

function tabla($base,$limite){
  if ($limite< $base) {
      while ($limite <=$base) {
              $array[]=$limite;
              $limite++;
      }
  }
  else {
    while ($base <=$limite) {
            $array[]=$base;
            $base++;
    }

  }
return  $array;
}

var_dump(tabla(41,89)) ;
// ejercicio 1 - C
// $numeroMagico=0;
//
// function mayor($a,$b){
//   return($a>$b)?$a:$b;
// }
// echo mayor(4,620);

// ejercicio 1 - C
$numeroMagico=rand(0,100);

function mayor($a,$b,$c=false){
    //global $numeroMagico;
    //$c=$numeroMagico;
  if (!$c){
          global $numeroMagico;
          $c=$numeroMagico;
          if($a>$b && $a>$c){
            return $a;
          }
          else if ($b>$a && $b>$c) {
            return $b;
          }
          else {
            return $c;
          }
  }
  else {  if($a>$b && $a>$c){
            return $a;
          }
          else if ($b>$a && $b>$c) {
            return $b;
        }
          else {
            return $c;
        }
  }
}
echo mayor(4,9,1);

//Ejercicio 1 D

$numeroMagico=rand(0,100);

function tabla($base,$limite=false ){

  if(!$limite){
      global $numeroMagico;
      $limite=$numeroMagico;
        if ($limite< $base) {
            while ($limite <=$base) {
                $array[]=$limite;
                $limite++;
            }
        }
        else {
            while ($base <=$limite) {
                $array[]=$base;
                $base++;
            }

        }
    }
    else{
            if ($limite< $base) {
              while ($limite <=$base) {
                      $array[]=$limite;
                      $limite++;
              }
            }
          else {
            while ($base <=$limite) {
                    $array[]=$base;
                    $base++;
            }

            }
        }
    return  $array;
}
print_r (tabla(92));

// Utilizando strpos(), encontrar la posición de la primera aparición de "php" dentro de
// la cadena: "Me encanta php, a mi también me encanta php!"
  $buscar="php";
  $cadena="Me encanta php, a mi también me encanta php!"
    $res = strpos($buscar,$cadena);
    echo $res ;
 ?>
