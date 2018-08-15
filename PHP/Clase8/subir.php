<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class=""  method="post" enctype="multipart/form-data">
            <input type="file" name="archivos" value="">
            <button type="submit" name="button">Enviar</button>
        </form>
    </body>
</html>

<?php



if ($_POST) {

     if ($_FILES['archivos']['error'] === UPLOAD_ERR_OK) {
       $extension= strtolower(pathinfo($_FILES['archivos']['name'],PATHINFO_EXTENSION));

       if ($extension == 'jpg'||$extension=='png'||$extension=='jpeg') {
         $hasta = dirname(__FILE__).'/subidos/'.'archivosubido'.'.'.$extension;
         $desde = $_FILES['archivos']['tmp_name'];
         move_uploaded_file($desde, $hasta);
       }

       // echo $extension;
      var_dump($_FILES['archivos']);

     }
}
// if ($_POST) {
//     if ($_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
//         $ext = strtolower(pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION));
//
//         if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg') {
//             $hasta = dirname(__FILE__) .'/subidos/'.'nombre'.'.'.$ext ;
//             $desde = $_FILES['avatar']['tmp_name'];
//             move_uploaded_file($desde, $hasta);
//         }else {
//             var_dump('extension invalida!');
//         }
//
//
//     }else {
//         var_dump('chino no come eso cosa, NUNCA');
//     }
// }
