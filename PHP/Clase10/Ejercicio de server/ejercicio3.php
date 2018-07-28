<?php
//
// $variable01 = true;
//
// $variable02 = false;
//
// $variable03 = 0;
//
// $variable04 = 1;
//
// $variable05 = 6;
//
// $variable06 = '';
//
// $variable07 = "3";
//
// $variable08 = "true";
//
// $variable09 = 'false';
//
// $variable10 = null;
//
// function tipoDato($varN)
// {
//     if ( $varN == true )
//     {
//         echo 'el valor  ' . $varN . ' es verdadero.';
//     }
//     else
//     {
//         echo 'el valor  ' . $varN . ' es falso.';
//     }
// }
//
// tipoDato($variable04);
  $uno="tres";
  $dos="tristes";
  $tres="tigres";
  $cuatro="comen";
  $cinco="trigo";
  $seis="en";
  $siete="un";
  $ocho="trigal";

  echo $uno." ".$dos." ".$tres." ".$cuatro." ".$cinco." ".$seis." ".$siete." ".$ocho."</br> </br> "  ;

  echo $seis." ".$siete." ".$ocho." ".$cuatro." ".$uno." ".$dos." ".$tres ;
  /*arrays*/
  $array=[];
  $animales=['perro','gato'];
  $ejemplo=array();

  /*push*/
  $animales[100]='dinosaurio';
  $animales[50]='ptedactilo';
  $animales[]='jirafa';
  // $animales[1]='mi abuela';
  $animales[2]=['hola',2];


  $nombre="kevin";
  echo "<pre>";
  var_dump($animales);
  echo "</br>";
  var_dump($animales[2]);



  $usuario=[
      'name' => 'Kevin',
      'lastname' => 'Guio',
      'phone'=> 3342313,
      'direccion'=>'direccion1'
  ];
    var_dump($usuario);

  $numarray=['perro','ave','gato','lobo','zorro'];
    var_dump($numarray);
  $numarray[]='gato2';
  $numarray[]='perro3';

    var_dump($numarray);

  echo "Me gustan los animales  ".$numarray[0]. ",".$numarray[1]. ",".$numarray[2]. ",".$numarray[3]. ",".$numarray[4]. ",".$numarray[5]. ",".$numarray[6];

  $numarray[0]='animal1cambiado';
  echo "</br></br></br>";
  echo "Me gustan los animales  ".$numarray[0]. ",".$numarray[1]. ",".$numarray[2]. ",".$numarray[3]. ",".$numarray[4]. ",".$numarray[5]. ",".$numarray[6];

  $numarray[100]='animal100cambiado';

    echo "Me gustan los animales  ".$numarray[0]. ",".$numarray[1]. ",".$numarray[2]. ",".$numarray[3]. ",".$numarray[4]. ",".$numarray[5]. ",".$numarray[6]. ",".$numarray[100];
    echo "</br></br></br>";
$numarray[16]='animal16cambiado';
    echo "Me gustan los animales  ".$numarray[0]. ",".$numarray[1]. ",".$numarray[2]. ",".$numarray[3]. ",".$numarray[4]. ",".$numarray[5]. ",".$numarray[6]. ",".$numarray[100]. ",".$numarray[16];
/*punto 5*/
echo "</br></br></br>";
  $auto=[
    'Marca' =>'Nissan',
    'Modelo'  => 'Skyline',
    'Color'  =>'Negro',
    'Año'  =>2010,
    'Patente' =>'xyz1234'
  ];
  $auto[0]='Paolo Matterazzi';
  $auto[14]='CHUBB Seguros';
  $auto['poliza']='Poliza98797100';

  var_dump($auto);

  $auto['Patente']='ABC9802';
  var_dump($auto);
  $auto[0]='Francesco Bugatti';
  var_dump($auto);
  /*Punto 6*/

  $entero = 1;
  $decimal = 1.34;
  $sum = $entero+$decimal;
  $newvar= $entero/$decimal;
  echo 'Sum: '. ($entero+$decimal);
  echo 'Rest: '. ($entero-$decimal);
  echo 'Div: '. ($entero/$decimal);
  echo 'Mult: '. ($entero*$decimal);
  echo 'Div:'.($newvar);

  echo "Sum: ".($sum +1);



?>
