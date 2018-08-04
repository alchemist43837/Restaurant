<?php
//Ejercicio 2.b
// "imprimir.php?nombre=monto&email=montoto@digitalhouse.com"
// $_GET["nombre"];
// $_GET["email"];
// var_dump()//
//Ejercicio 2.c
  // foreach ($_GET as $key => $value) {
  //     echo $key ." : <br>";
  //     echo "<li>$value </li> <br>";
  //
  // }


  //Ejercicio 3
    foreach ($_GET as $componentes => $resultados) {
        echo $componentes ."  <br>";
        if($resultados=="hobbie"){
          foreach ($componentes["hobbie"] as $hobbies => $hobbiesCom ) {
            echo $hobbiesCom;
          }
        }
        else{
            echo "<li>$resultados</li> <br>";
        }


    }

?>
