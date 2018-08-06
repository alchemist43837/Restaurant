<?php

    function triangulo ($b,$h){

        $superficie=$b * $h/2;
        return $superficie;

        }

    echo triangulo(4,6);

    function rectangulo ($b,$h){

        $superficie=$b * $h;
        return $superficie;

        }

    echo rectangulo(4,6);

    function cuadrado ($l){

        $superficie=$l*$l;
        return $superficie;

        }

    echo cuadrado(4);

    function circulo ($r){

        $superficie=$r*$r*pi();
        return $superficie;

        }

    echo circulo(4);
 ?>
