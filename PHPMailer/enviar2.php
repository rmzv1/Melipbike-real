<?php
/*Visita nuestro canal en Youtube: https://www.youtube.com/c/Tonowebs/ */
	if (isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['asunto']) && isset($_POST['mensaje'])) {
		$nombre = $_POST["nombre"];
		$correo = $_POST['correo'];
		$asunto = $_POST["asunto"];
		$mensaje = $_POST['mensaje'];

		$from = $correo;
		$to = "puertomontt@melipbike.cl";
		$subject = "Nuevo mensaje de ". $correo;
		$message = $mensaje;
		$headers = "From:" . $from;

		
		if (mail($to,$subject,$message, $headers)) {
			echo 1;
		}else{
			echo 0;
		}

	}else{
		echo 0;
	}
?>