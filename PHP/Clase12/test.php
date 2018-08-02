//ejercicio 4
<?php
  // echo "<br/>";
  // $num=100;
  // while($num>=85){
  // echo $num."<br/>";
  // $num--;
  // }
  //ejercicio6A, el rand no funciona bien
      // $moneda=rand(0,1);
      // $cara=0;
      // $sello=0;
      //   while($cara<=5){
      //
      //       if($moneda==1){
      //         $cara++;
      //       }
      //       else {
      //         $sello++;
      //       }
      // }
      // echo "Se utilizaron ". ($cara+$sello) ." tiros para obtener ".$cara." caras ";
      //Ejercicio 6b ,other
          //
          // $moneda=rand(0,1);
          // $cara=0;
          // $sello=0;
          //
          // while($cara<=5){
          //   ($moneda==1)?$cara++:$sello++;
          // }
          // echo"Se utilizaron ". ($cara+$sello) ." tiros para obtener ".$cara." caras ";
          // $ceu = array(
          // "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas",
          // "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris",
          // "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin",
          // "Grecia" => "Athenas","Irlanda"=>"Dublin", "Holanda"=>"Amsterdam",
          // "Portugal"=>"Lisbon", "España"=>"Madrid","Suecia"=>"Stockholm",
          // "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius",
          // "Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest",
          // "Latvia"=>"Riga",    "Malta"=>"Valletta", "Austria" => "Vienna",
          // "Polonia"=>"Warsaw") ;
          //   asort($ceu);
          // foreach($ceu as $pais =>$capital){
          //     //multisort($pais.$capital);
          //     echo $capital." es capital de : ".$pais."<br/>";
          // }
          // $ceu = [
          // "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
          // "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
          // "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
          // "Francia" => ["Paris", "Nantes", "Lyon"],
          // "Italia" => ["Roma", "Milan", "Venecia"],
          // "Alemania" => ["Munich", "Berlin", "Frankfurt"]
          // ];
          //
          // print_r($ceu);
          // foreach ($ceu as $pais => $capital) {
          //   echo $pais."<br/>".$capital;
          // }
          // //DO WHILE
          // $numAl=rand(0,10);
          // $array=[$numAl,$numAl,$numAl,$numAl,$numAl,
          //         $numAl,$numAl,$numAl,$numAl,$numAl];
          // // $array=[rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),
          // //     rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10)];
          //
          // $i=0;
          // do{
          //   if ($array[$i]==5){
          //     echo $array[$i]." Se Encontró un 5! en la posicion ".key($array)."\n";
          //     $i++;
          //     exit;
          //   }
          //   $i++;
          //   next($array);
          // }
          // while($i<count($array));

          //Ejercicio14
         //  $ceu = [
         //  "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
         //  "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
         //  "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
         //  "Francia" => ["Paris", "Nantes", "Lyon"],
         //  "Italia" => ["Roma", "Milan", "Venecia"],
         //  "Alemania" => ["Munich", "Berlin", "Frankfurt"]
         //  ];
         //  function recorro($ceu){
         //     foreach($ceu as $key => $value){
         //           if (is_array($value)){
         //            //si es un array sigo recorriendo
         //          echo '<br>';
         //          echo 'Las ciudades de '. $key." son:";
         //          echo '<br>';
         //         recorro($value);
         //      }
         //      else{
         //         //si es un elemento lo muestro
         //         // echo $key.': '.$value ;
         //         echo $value;
         //         echo '<br>';
         //      }
         //   }
         // }
         // echo recorro($ceu);
         // //ejercicio6A, el rand no funciona bien
         //     $cara=0;
         //     $sello=0;
         //       while($cara<=5){
         //         $moneda=rand(0,1);
         //           if($moneda==1){
         //             $cara++;
         //           }
         //           else {
         //             $sello++;
         //           }
         //     }
         //     echo "<br/>";
         //     echo "Se utilizaron ". ($cara+$sello) ." tiros para obtener ".$cara." caras ";
         // //Ejercicio 6b ,other
             //
             // $moneda=rand(0,1);
             // $cara=0;
             // $sello=0;
             //
             // while($cara<=5){
             //   ($moneda==1)?cara++:sello++;
             // }
             // echo "Se utilizaron ". ($cara+$sello) ." tiros para obtener ".$cara." caras ";

             // $cara=0;
             // $sello=0;
             // while($cara<=5){
             //   $moneda=rand(0,1);
             //   ($moneda==1) ? $cara++ : $sello++;
             // }
             // echo "Se utilizaron ". ($cara+$sello) ." tiros para obtener ".$cara." caras ";

             // //ejercicio9
             //     //FOR
             //
             //
             //    for ($i=0; $i <10 ; $i++) {
             //       $numAl=rand(0,10);
             //       $array[]=$numAl;
             //    }
             //   for ($i=0; $i< count($array) ; $i++) {
             //       if ($array[$i]==5){
             //         echo $array[$i]." Se Encontró un 5! en la posicion ".$i."<br>";
             //         exit;
             //       }
             //     }
             // //while a revisar
             //   $i=0;
             //   while ($i < 10) {
             //     $num=rand(0,10);
             //     $array[]=$num;
             //     $i++;
             //   }
             //   $a=0;
             //   while ($a < count($array)) {
             //     if($array[$a]==5){
             //       echo "Se Encontró un 5! en la posicion ".$a."<br>";
             //       exit;
             //     }
             //     $a++;
             //   }
             //ej 6
             // $cara=0;
             // $sello=0;
             // while($cara<5){
             //   $moneda=rand(0,1);
             //   ($moneda==1) ? $cara++ : $sello++;
             // }
             // echo "Se utilizaron ". ($cara+$sello) ." tiros para obtener ".$cara." caras ";
             // $ceu = [
             // "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
             // "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
             // "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
             // "Francia" => ["Paris", "Nantes", "Lyon"],
             // "Italia" => ["Roma", "Milan", "Venecia"],
             // "Alemania" => ["Munich", "Berlin", "Frankfurt"]
             // ];
             //
             // foreach ($ceu as $paises => $ciudades) {
             //     echo "Las ciudades de ".$paises." son : <br>";;
             //     foreach ($ciudades as $ciudad) {
             //       echo $ciudad;
             //       echo "<br>";
             //     }
             // }

             //Ejercicio 15
             $ceu = [
             "Argentina" => [
               "EsAmericano"=>true,
               "Ciudades"=>["Buenos Aires", "Córdoba", "Santa Fé"]
             ],
             "Brasil" => [
               "EsAmericano"=>true,
               "Ciudades"=>["Brasilia", "Rio de Janeiro", "Sao Pablo"]
             ],
             "Colombia" => [
               "EsAmericano"=>true,
               "Ciudades"=>["Cartagena", "Bogota", "Barranquilla"]
             ],
             "Francia" => [
               "EsAmericano"=>false,
               "Ciudades"=>["Paris", "Nantes", "Lyon"]
             ],
             "Italia" => [
               "EsAmericano"=>false,
               "Ciudades"=>["Roma", "Milan", "Venecia"]
             ],
             "Alemania" => [
               "EsAmericano"=>false,
               "Ciudades"=>["Munich", "Berlin", "Frankfurt"]
             ]
             ];

             foreach ($ceu as $paises => $contenido) {
                 // echo "Las ciudades de ".$paises." son : <br>";
                 if ($contenido["EsAmericano"]) {
                    echo "<br>";
                    echo "Las ciudades de ".$paises." son :";
                    echo "<br>";
                    foreach ($contenido["Ciudades"] as $key)  {
                      echo "<li>" .$key."</li>";
                    }
                   }
                 }
                 // foreach ($ciudades as $ciudad) {
                 //   echo $ciudad;
                 //   echo "<br>";
                 // }




 ?>
