<?php
        //Enter your code here, enjoy!
//Practica en http://sandbox.onlinephpfunctions.com/

//$array = array("1" => "PHP code tester Sandbox Online",
  //            "foo" => "bar", 5 , 5 => 89009,
    //          "case" => "Random Stuff: " . rand(100,999),
      //        "PHP Version" => phpversion()
        //      );

//foreach( $array as $key => $value ){
    //echo $key."\t=>\t".$value."\n";
    //Practica 3 php Clase 11
    //ejercicio1
    for ($i=0 ; $i<100 ;$i++){
        echo $i."\n";
    }
//ejercicio2

    $num=rand(0,100);

    for($i=0;$i<$num;$i++){
    echo $i."\n";
    }
//ejercicio3
    //obs del incremental $i+2

    for($i=0;$i<=20; 2*$i++){
      echo "2 x ".$i." = ". $i*2 ."\n";
    }
//ejercicio 4
    $num=100;
    while($num>=85){
      echo $num"\n";
      $num--;
    }
//ejercicio5
    $contador=1;
    while($contador<=5){
      echo $contador*2 . "\n";
      $contador++;
    }
//ejercicio6A, el rand no funciona bien
    $moneda=rand(0,1);
    $cara=0;
    $sello=0;
      while($cara<=5){

          if($moneda==1){
            $cara++;
          }
          else {
            $sello++;
          }
    }
    echo "Se utilizaron ". ($cara+$sello) ." tiros para obtener ".$cara." caras ";
//Ejercicio 6b ,other

    $moneda=rand(0,1);
    $cara=0;
    $sello=0;

    while($cara<=5){
      ($moneda==1)?cara++:sello++;
    }
    echo "Se utilizaron ". ($cara+$sello) ." tiros para obtener ".$cara." caras ";

//Ejercicio7 naaaaa

//ejercicio8
    //FOR
    $nombres=["juan","pedro","lucho","beto","marcelo"];

    for ($i=0; $i<count($nombres) ; $i++) {
      echo $nombres[$i]."\n";
    }

    //WHILE
    $nombres=["juan","pedro","lucho","beto","marcelo"];
    $i=0;
    while($i<count($nombres)){
      echo $nombres[$i]."\n";
      $i++;
    }
    //DO WHILE
    $nombres=["juan","pedro","lucho","beto","marcelo"];
    $i=0;
    do{
      echo $nombres[$i]."\n";
       $i++;
    }
    while(count($nombres)>$i)

    //FOR EACH
    $nombres=["juan","pedro","lucho","beto","marcelo"];
    foreach($nombres as $i){
      echo $i."\n";
    }


//ejercicio9
    //FOR
    $numAl=rand(0,10);
    $array=[$numAl,$numAl,$numAl,$numAl,$numAl,
            $numAl,$numAl,$numAl,$numAl,$numAl];
    // $array=[rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),
    //     rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10)];
    for ($i=0; $i <count($array) ; $i++) {
      if ($array[$i]==5){
        echo $array[$i]." Se Encontró un 5! en la posicion ".key($array)."\n";
        exit;
      }
       next($array);
    }

    //while a revisar
    $numAl=rand(0,10);
    $array=[$numAl,$numAl,$numAl,$numAl,$numAl,
            $numAl,$numAl,$numAl,$numAl,$numAl];
    // $array=[rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),
    //     rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10)];
    $i=0;
    while($i<count($array)) {

          if ($array[$i]==5){
            echo $array[$i]." Se Encontró un 5! en la posicion ".key($array)."\n";

            $i++;
            exit;
          }
        next($array);
        $i++;
    }
    //DO WHILE
    $numAl=rand(0,10);
    $array=[$numAl,$numAl,$numAl,$numAl,$numAl,
            $numAl,$numAl,$numAl,$numAl,$numAl];
    // $array=[rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),
    //     rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10)];

    $i=0;
    do{
      if ($array[$i]==5){
        echo $array[$i]." Se Encontró un 5! en la posicion ".key($array)."\n";
        $i++;
        exit;
      }
      $i++;
      next($array);
    }
    while($i<count($array));

//Ejercicio10
    // ejm Range
    foreach (range(0, 12) as $número) {
    echo $número."\n";
    }

    foreach (range("a","o") as $letra) {
    echo $letra."\n";
    }
    //solucion
    $letra = range("a","o");
    print_r ($letra );

    for($i=0; $i<count($letra);$i++){
       echo "En la posicion ".key($letra)." esta la letra ".$letra[$i]."\n";
       next($letra);
    }
  //Ejercicio 11
    //Array Asociativo ejercicio 11
    //$mascota=['animal','edad','altura','nombre'];
    $mascota=[
            'animal'=>'Perro',
            'edad'=>5,
            'altura'=>0.60,
            'nombre'=>'Sonic'
            ];
    //Ejercicio12
    foreach($mascota as $i => $value ){
        echo $i. ": ".$value."\n";
    }

    //Ejercicio 13 (incompleto , falta ordenamiento )
    $ceu = array(
    "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas",
    "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris",
    "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin",
    "Grecia" => "Athenas","Irlanda"=>"Dublin", "Holanda"=>"Amsterdam",
    "Portugal"=>"Lisbon", "España"=>"Madrid","Suecia"=>"Stockholm",
    "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius",
    "Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest",
    "Latvia"=>"Riga",    "Malta"=>"Valletta", "Austria" => "Vienna",
    "Polonia"=>"Warsaw") ;

    foreach($ceu as $pais =>$capital){
    echo $pais." su capital es : ".$capital."\n";
      }



      //EJM
      <?php
      $datos[] = array('volumen' => 67, 'edición' => 2);
      $datos[] = array('volumen' => 86, 'edición' => 1);
      $datos[] = array('volumen' => 85, 'edición' => 6);
      $datos[] = array('volumen' => 98, 'edición' => 2);
      $datos[] = array('volumen' => 86, 'edición' => 6);
      $datos[] = array('volumen' => 67, 'edición' => 7);
      ?>
      <?php
      // Obtener una lista de columnas
      foreach ($datos as $clave => $fila) {
          $volumen[$clave] = $fila['volumen'];
          $edición[$clave] = $fila['edición'];
      }

      // Ordenar los datos con volumen descendiente, edición ascendiente
      // Agregar $datos como el último parámetro, para ordenar por la clave común
      array_multisort($volumen, SORT_DESC, $edición, SORT_ASC, $datos);
      ?>

      //solucion Ejercicio 13
      $ceu = array(
      "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas",
      "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris",
      "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin",
      "Grecia" => "Athenas","Irlanda"=>"Dublin", "Holanda"=>"Amsterdam",
      "Portugal"=>"Lisbon", "España"=>"Madrid","Suecia"=>"Stockholm",
      "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius",
      "Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest",
      "Latvia"=>"Riga",    "Malta"=>"Valletta", "Austria" => "Vienna",
      "Polonia"=>"Warsaw") ;
        asort($ceu);
      foreach($ceu as $pais =>$capital){
          //multisort($pais.$capital);
          echo $capital." es capital de : ".$pais."\n";
      }

      //Ejercicio 14 -- Con Mucho ayudin de la web
      $ceu = [
      "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
      "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
      "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
      "Francia" => ["Paris", "Nantes", "Lyon"],
      "Italia" => ["Roma", "Milan", "Venecia"],
      "Alemania" => ["Munich", "Berlin", "Frankfurt"]
      ];
      function recorro($ceu){
         foreach($ceu as $key=>$value){
               if (is_array($value)){
                  //si es un array sigo recorriendo
                echo '<br>';
                echo 'Las ciudades de '. $key." son:";
                echo '<br>';
                recorro($value);
                }
              else{
                 //si es un elemento lo muestro
                 // echo $key.': '.$value ;
                 echo $value;
                 echo '<br>';
                }
            }
        }
      echo recorro($ceu);
      //Ejercicio 15
      $ceu = [
      "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
      "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
      "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
      "Francia" => ["Paris", "Nantes", "Lyon"],
      "Italia" => ["Roma", "Milan", "Venecia"],
      "Alemania" => ["Munich", "Berlin", "Frankfurt"]
      ];
      $esAmericano=[
        "Argentina" => [true],
        "Brasil" => [true],
        "Colombia" => [true],
        "Francia" => [false],
        "Italia" => [false],
        "Alemania" => [false]
        ];

?>
