<?php
    include_once("loader.php");
    
    if ($auth->loginControl()) {
        //SI la instancia de Auth, haciendo uso de su metodo loginControl(), devuelve true, es porque el usuario ya inicio sesion y no necesitamos mostrarle esta pagina, asi que sistematicamente lo derivamos a su perfil.
        header("Location:perfil.php");
        exit;
	}

	$errores = [];
	if ($_POST) {
        //SI hay $_POST
        $errores = $validator->validarLogin($_POST, $db);
        //llenamos el array de errores, esta vez con nuestra instancia de Validator, haciendo uso de sus metodos.
		if (count($errores) == 0) {
            $email = $_POST["email"];
			// si no hay errores, LOGUEAR
            $auth->login($email);
            //nuestra instancia de Auth usa su metodo login() para loguear al usuario
      		header("Location:perfil.php");
			exit;
		}
	}
    
    
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/master.css">
        <title>Demo Perfil</title>
    </head>
        <body>
            <main class="flex-container">
            <header>
                <h1> Login </h1>
            </header>
            <form class="formulario form" action="login.php" method="post">

                <?php if(count($errores) > 0) {?>
            
                    <h4>Nombre de usuario o pass invalidos</h4>
                    <a href="login.php">Volver</a>

                <?php } else {?>

                    <label>E-mail</label>
                    <input type="text" name="email"> 
                    <label>Password</label>
                    <input type="password" name="password">
                    <input type="submit" class="btn-registro" value="Loguearme">
            </form>
            <p>Si todavia no tenes cuenta, <a href="registro.php">registrate acá!</a></p>
            <?php } ?>
        </main>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>
