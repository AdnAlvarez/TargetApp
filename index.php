<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Target App</title>
</head>
<body>
<script typ="text/javascript" src="jQuery.js"></script>
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh;">
      	<form class="border shadow p-3 rounded" 
      	      action="php/check-login.php" 
      	      method="post"
      	      style="width: 460px;">
				<center><img src="img/logo-target.png" width="200" height="100"></center>
      	      <h5 class="text-center p-3">INICIAR SESION</h5>
      	      <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?>
		  <div class="mb-1">
		    <label for="username" 
		           class="form-label rounded">Usuario</label>
		    <input type="text" placeholder="ingresa tu Usuario"
		           class="form-control"
		           name="username"
		           id="username">
		  </div>
		  <div class="mb-1" >
		    <label for="password"
		           class="form-label">Contraseña</label>
		    <input type="password" placeholder="ingresa tu Contraseña"
		           name="password"
		           class="form-control"
		           id="password">
		  </div>
		  <div class="mb-1">
		    <label
			class="form-label">Selecciona tu rol:</label>
		  </div>
		  <select class="form-select mb-3"
		          name="role" 
		          aria-label="Default select example">
			  <option selected value="user">Produccion</option>
			  <option value="admin">Compras</option>
		  </select>
		 <div class="row gap-3 d-md-flex justify-content-md-center mb-2">
		  <center><button type="submit" 
		          class="btn btn-primary" style="width: 280px; border-radius:5px; background-color:#8e1c7c;">Iniciar Sesion</button></a></center>
				  <center><a href="forget.php"><button type="button" class="btn btn-link" style="margin:-10px;">Olvidaste tu contraseña?</button></center>
		</form>
		<center><a href="register.php"><input type="button" style="width:280px; height:36px; color:#ffffff; border-radius:5px; background-color:#8e1c7c;" value="Registrarse"></a></center>
      </div>
</body>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</html>
<?php }else{
	header("Location: home.php");
} ?>