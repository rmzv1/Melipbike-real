<?php

/*
*
* Endeos, Working for You
* blog.endeos.com
*
*/
require_once('mail/config.php');
require_once('mail/PHPMailerAutoload.php');




$mail = new PHPMailer;

//$mail->SMTPDebug    = 3;


$destino = "puertomontt@melipbike.cl";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$asunto = $_POST["Asunto"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;


$header = "Enviado desde la pagina de Melipbike";

mail($destino, $asunto, $contenido, $header);
echo "<script>alert('correo enviado')</script>";
echo "<script>setTimeout(\"location.href='index.php'\",1000)</script>";







?>