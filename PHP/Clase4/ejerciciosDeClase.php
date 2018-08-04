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

ejercicio 1 - B OK
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
ejercicio 1 - C
$numeroMagico=0;

function mayor($a,$b){
  return($a>$b)?$a:$b;
}
echo mayor(4,620);

 ?>
