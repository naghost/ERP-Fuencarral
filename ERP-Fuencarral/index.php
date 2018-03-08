
<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesión</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>


	 <form  method="POST" action="loguin.php">
    	<div class="form-group">
      		<label class="col-md-4 control-label" for="textinput">Usuario</label>  
      		<div class="col-md-4">
      			<input  name="username" placeholder="Usuario" class="form-control input-md" type="text">

            <?php
            session_start();

              $fallo = $_SESSION['fallo'];
                if($fallo==true){
                  echo "El usuario no existe o la contraseña no es correcta";
                  unset($_SESSION['fallo']);
                }
              
            ?>

      		</div>
    	</div>

    	<div class="form-group">
      		<label class="col-md-4 control-label" for="textinput">Contraseña</label>  
      		<div class="col-md-4">
      			<input name="contrasena" placeholder="Contraseña" class="form-control input-md"  type="text">
        
      		</div>
    	</div>

    	<div class="form-group">
      		<label class="col-md-4 control-label" for="Enviar"></label>
      			<div class="col-md-4">
        			<button id="Enviar" name="Enviar" type="submit" >Iniciar Sesion</button>
      			</div>
    	</div>
</form>

</body>
</html>