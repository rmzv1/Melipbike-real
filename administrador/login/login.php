<?php session_start(); ?>
<html>

<head>
	<title>Inicio de Sesion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="bootstrap/css/estilos.css">
</head>

<body>
	<div class="container">
		<div class="row contenido d-flex justify-content-center align-items-center">
			<div class="col-md-8">
				<div class="row justify-content-center logo">
					<img src="../img/logo.png" class="img-fluid" alt="">
				</div>

				<form role="form" name="login" action="php/login.php" method="post">
					<div class="form-group">
						<label for="username">Email</label>
						<input type="text" class="form-control" id="username" name="username" placeholder="Correo">
					</div>
					<div class="form-group">
						<label for="password">Contrase&ntilde;a</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
					</div>
					<button type="submit" class="btn btn-primary">Acceder</button>
				</form>
			</div>
			<div class="col-12 link-inicio d-flex justify-content-end">
			<a href="../../index.php"><i class="fas fa-user-tie"></i>Volver a Melipbike</a>
			</div>
		</div>
	</div>
	<script src="js/valida_login.js"></script>
</body>

</html>