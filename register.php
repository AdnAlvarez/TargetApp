<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
	<title>Registrarse</title>
        <link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

 
</body>
</html>


<?php require_once("db_conn.php"); ?>


<?php

if(isset($_POST["register"])){

if(!empty($_POST[‘name’]) && !empty($_POST[’email’]) && !empty($_POST[‘username’]) && !empty($_POST[‘password’])) {
$name = $_POST[‘name’];
$email = $_POST[’email’];
$username = $_POST[‘username’];
$password = $_POST[‘password’];

$query=mysql_query("SELECT * FROM users WHERE username=’".$username."’");
$numrows=mysql_num_rows($query);

if($numrows==0)
{
$sql="INSERT INTO users
(name, email, username,password)
VALUES(‘$full_name’,’$email’, ‘$username’, ‘$password’)";

$result=mysql_query($sql);

if($result){
$message = "Cuenta Correctamente Creada";
} else {
$message = "Error al ingresar datos de la informacion!";
}

} else {
$message = "El nombre de usuario ya existe! Por favor, intenta con otro!";
}

} else {
$message = "Todos los campos no deben de estar vacios!";
}
}
?>

<?php if (!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";} ?>

<div class="container d-flex justify-content-center align-items-center"
style="min-height: 100vh;">
<div id="login">

<form class="border shadow p-3 rounded" 
      	      action="php/check-login.php" 
      	      method="post"
      	      style="width: 600px;">
<center><h1>Registrate</h1></center>
<div class="mb-1" >
		    <label for="name"
		           class="form-label"></label>
		    <input type="text" placeholder="Nombre"
		           name="name"
		           class="form-control"
		           id="name">
		  </div>


<div class="mb-1" >
		    <label for="username"
		           class="form-label"></label>
		    <input type="username" placeholder="Nombre de usuario"
		           name="username"
		           class="form-control"
		           id="username">

</div> <div class="mb-1" >
		    <label for="password"
		           class="form-label"></label>
		    <input type="password" placeholder="Contraseña"
		           name="password"
		           class="form-control"
		           id="password">
		  </div>

<div class="mb-1" >
		    <label for="email"
		           class="form-label"></label>
		    <input type="email" placeholder="Correo"
		           name="email"
		           class="form-control"
		           id="email">
		  </div>

<p>Selecciona tu rol</p>
<label for="">Produccion</label>
<input type="radio" value="1">
<label for="">Compras</label>
<input type="radio" value="2">

<center>
<p class="submit">
<input type="submit" style="width:280px; height:36px; color:#ffffff; margin-top:10px; border-radius:5px; background-color:#8e1c7c; name="register id="register" class="button btn-primary" value="Registrarse" />
</p>
</center>

<p class="regtext">Ya tienes una cuenta? <a href="index.php" >Entra Aquí!</a></p>
</form>

</div>
</div>