
<?php
$email='';
  if ($_POST) {

      $email=trim($_POST['email']);
      if ($email=='') {
        echo "CampoVacio";
      }
      elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        echo "No es un email KPO";
      }
      if($_FILES['img']['Error'] == UPLOAD_ERR_OK){
        $ext=pathinfo($_FILES['img']['name'],PATHINFO_EXTENSION);
        if ($ext=='jpg') {
          $desde=$_FILES['img']['tmp_name'];
          $hasta=dirname (__FILE__).'/imagenes/'.$email.'.'.$ext;
          move_uploaded_file($desde,$hasta);
        }else {
          echo "El formato es incorrecto";
        }
      }else{
        echo "Error, no estas subiendo nada";
      }
    }

$usuario=[ 'email' => $email, 'src' => $hasta
];

  $usuarioJSON =json_encode($usuario);
  file_put_contents(usuarios.json,$usuarioJSON,FILE_APPEND);

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <label for="email"> email: <input type="text" name="email" value="<?=$email?>"></label>
      <label for=""> imagen :  <input class="form-control" type="file" name="img" value="<?= isset($_FILES['img']) ? $_FILES['img']['name'] : null ?>"> </label>
      <br><br>
      <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
  </body>
</html>
