<?php

  $paises=["Alemania","Argentina","Argelia","Brasil","Colombia","Ecuador","España","Filipinas","Mexico","Chile"];
  $paisSeleccionado =trim($POST["pais"]);
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='' method='post'>
            <fieldset >
                <legend>Registrate</legend>

                <!-- <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos requeridos</div>
                <input type='text' class='spmhidip' name='' />

                <div><span class='error'></span></div> -->
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='container' style='height:40px;'>
                    <label for='password' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>
                <?php if(!isset($_GET["versionCorta"])):?>
                  <div class='container' style='height:40px;'>
                      <label for='confirm_password' >Confirmar Contaseña*:</label><br/>
                      <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                      <input type='password' name='confirm_password' id='confirm_password' maxlength="50" />
                      <div id='register_password_errorloc' class='error' style='clear:both'></div>
                  </div>
                <?php endif;?>
                <fieldset>
                  <label for="">Pais</label>
                  <select class="" name="pais" >
                    <option value="">Elegir Pais .. </option>
                    <?php foreach ($paises as $pais):?>
                        <?php if ($paisSeleccionado == $key): ?>
                          <option selected value="<?=$key?> "><?=$pais?></option>
                        <?php else: ?>
                          <option value="<?=$key?>"><?=$pais?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                  </select>
                </fieldset>
                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>
                <?php  if ($_POST): ?>
                  <!-- pendiente de completar -->
                    <?php= $pais[$_POST["paises"]]?>
                    <?php  var_dump($_POST);?>
                <?php endif; ?>
            </fieldset>
        </form>

    </body>
</html>
