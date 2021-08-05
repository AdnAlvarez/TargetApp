<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Inicio</title>
	
</head>
<body>
	<main>
      <div class="container"
      style="min-height: 30vh">
      	<?php if ($_SESSION['role'] == 'admin') {?>
      		<!-- Para Admin -->
			 
			
			<div class="p-3" style="background-color:fff; border-color:grey;">
				<?php include 'php/members.php';
                 if (mysqli_num_rows($res) > 0) {?>
				  <div class="container">

			</div>
			 <div class="card" style="width:150px; margin-top:40px; margin-left:-10px;">
			<img src="img/admin-default.png" 
		 	class="card-img-top"
			alt="admin image">
			<div class="card-body text-center">
 			 <h5 class="card-title">
	  		<?=$_SESSION['name']?>
  			</h5>
  			<a href="logout.php" class="btn btn-dark">Cerrar Sesion</a>
			</div>
			</div>
				
				<table border class="table border shadow table-hover table-md" 
				    	style="width: 500px; margin-left:190px; margin-top:-290px; margin-right:300px;">
						<th scope="col">#</th>
				    	<th scope="col">Nombre</th>
				    	<th scope="col">Usuario</th>
				    	<th scope="col">Rol</th>
				</tr>

				  <tbody>
					  

				  	<?php 
				  	$i =1;
				  	while ($rows = mysqli_fetch_assoc($res)) {?>
					  
				    <tr>
				      <th scope="row"><?=$i?></th>
				      <td><?=$rows['name']?></td>
				      <td><?=$rows['username']?></td>
				      <td><?=$rows['role']?></td>
				    </tr>
				    <?php $i++; }?>
				  </tbody>
				</table>
				</div>
				<?php }?>
			</div>
			<div class="container" style="margin-top:150px; width:750px; margin-bottom:150px;">
    <div class="row">
      <div class="col-lg-12 border shadow"  style="background-color:#fff">
       <center><h1>Bitácora</h1></center>  

<div class="row row-no-gutters border">
  <div class="col-xs-12 col-md-8">Fecha</div>
  <div class="col-xs-6 col-md-2">Orden de produccion No.</div>
  <div class="col-xs-12 col-md-7">Datos del Cliente</div>
  <div class="col-xs-12 col-md-12">Cliente</div>
  <div class="col-xs-12 col-md-12">Ref. Trabajo</div>
  <div class="col-xs-12 col-md-12">Vendedor</div>
</div>
<div class="row row-no-gutters border ">
<center><div class="col-xs-12 col-md-12"><h5>Caracteristicas del producto</h5></div></center>

</div>

<div class="row row-no-gutters border" style="background-color:#878787; font-weight:bold; text-transform: uppercase;  " >
  <div class="col-xs-2 col-md-2">Item</div>
  <div class="col-xs-2 col-md-2">Objeto</div>
  <div class="col-xs-2 col-md-2">Material </div>
  <div class="col-xs-12 hr col-md-2">Acabado</div>
  <div class="col-xs-12 col-md-2">Ancho</div>
  <div class="col-xs-12 col-md-2">Alto</div>
</div>
<div class="row row-no-gutters border">
  <div class="col-xs-12 col-md-2">1</div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
</div>
<div class="row row-no-gutters border">
  <div class="col-xs-12 col-md-2">2</div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
</div>
<div class="row row-no-gutters border">
  <div class="col-xs-12 col-md-2">3</div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
</div>
<div class="row row-no-gutters border">
  <div class="col-xs-12 col-md-2">4</div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
</div>
<div class="row row-no-gutters border">
  <div class="col-xs-12 col-md-2">5</div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
</div>
<div class="row row-no-gutters border">
  <div class="col-xs-12 col-md-2">6</div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
  <div class="col-xs-12 col-md-2"></div>
</div>
<center><button onclick="window.open('excel.xlsx')" class="btn btn-primary"  style="margin-top:15px; margin-bottom:15px; background-color:#8e1c7c;" )>Descargar bitacora</button></center> 
</div>
</main>
	 
	  
      	<?php }else { ?>
      		<!-- PARA USERS -->
      		<div class="card" style="width: 12rem; margin-top:60px; margin-bottom:20px;">
			  <img src="img/user-default.png" 
			       class="card-img-top" 
			       alt="admin image">
			  <div class="card-body text-center">
			    	<h5 class="card-title">
			    	<?=$_SESSION['name']?>
			    	</h5>
			    	<a href="logout.php" class="btn btn-dark">Cerrar Sesion</a>
				
			  </div>
			</div>
			<div class="container">
						<div class="row">
							<div class="col-lg-12"  style="background-color:#ffffff; padding-bottom:100px; padding-top:100px;">
								<h1></h1>
								<div class="border shadow p-5 rounded">
									<center><h2>Bitácora</h2></center>
									<div class="mb-3">
								<form action="home.php" method="post">
									<div class="col-xxl-12">
								</div>
									<label for="" class="form-label rounded">Fecha</label>
									<input class="form-control input-lg" type="date" placeholder="">
									<label for="" class="form-label rounded">Orden de produccion No.</label>
									<input class="form-control input-lg" type="number" placeholder="">
									<label for="" class="form-label rounded">Cliente</label>
									<input class="form-control input-lg" type="text" placeholder="">
									<label for="" class="form-label rounded">Referencia de trabajo</label>
									<input class="form-control input-lg" type="text" placeholder="">
									<label for="" class="form-label rounded">Vendedor</label>
									<input class="form-control input-lg" type="text" placeholder=""><br>
									<center><h5>Caracteristicas del producto</h5></center>
									<div class="row">
									<div class="col-xs">
									<label for="" class="form-label rounded">Item</label>
									<input class="form-control input-lg" type="text" placeholder="">
		  							</div>
									<div class="col-xs">
									<label for="" class="form-label rounded">Objeto</label>
									<input class="form-control input-lg" type="text" placeholder="">
		  							</div>
									<div class="col-xs">
									<label for="" class="form-label rounded">Material</label>
									<input class="form-control input-lg" type="text" placeholder="">
		  							</div>
									<div class="col-xs">
									<label for="" class="form-label rounded">Acabado</label>
									<input class="form-control" type="text" placeholder="">
		  							</div>
									<div class="col-xs">
									<label for="" class="form-label rounded">Ancho</label>
									<input class="form-control" type="text" placeholder="">
		  							</div>
									<div class="col-xs">
									<label for="" class="form-label rounded">Alto</label>
									<input class="form-control input-lg" type="text" placeholder="">
		  							</div>
									<div class="col-xs">
									<label for="" class="form-label rounded">Cantidad</label>
									<input class="form-control input-lg" type="text" placeholder="">
		  							</div>
									</div>
									
									<center><input type="button" style="width: 180px;  border-radius:5px; background-color:#8e1c7c;"  class="btn btn-primary"value="Enviar Bitácora"></center>
								</form>
		  						</div>
								</div>

							</div>
						</div>
					</div>
				
      	<?php } ?>
      </div>
</body>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</html>
<?php }else{
	header("Location: index.php");
} ?>