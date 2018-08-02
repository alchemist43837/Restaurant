<!DOCTYPE html>
<html>
<?php $color="blue"; ?>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-color:<?=isset($color)?$color:'white'?>">
    <li>  </li>

<?php
switch ($color) {
  case 'blue':
    echo "El color es ".$color;
    break;

  default:
    echo "Es de otro Color";
    break;
}
 ?>

  </body>
</html>
