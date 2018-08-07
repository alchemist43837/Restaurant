<?php//borador
$name=trim($_POST["name"]);
$email=trim($_POST["email"]);
$pais=trim($_POST["pais"]);;
$errores[];

  if ($name==null) {
    $errores['name']="texto";
    // code...
  }
  if ($email==null) {
    $errores['email']="texto";
    // co
  }elseif ($email) {
    // code...
  }





// selected de paises


if($_POST){



  if(trim($_POST['name'])==null){
    echo "Por favor ingrese su nombre"
  }
  if (trim($_POST["email"])==null){
    echo "Por favor completa tu nombre";
  }
  elseif (!filter_var(trim($_POST["email"])))== {
    // code...
  }
}

$name='';
$email='';
$pais='';



 ?>
