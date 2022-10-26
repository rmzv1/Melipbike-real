<?php

$destino = "renez3394@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;

$header = "Enviado desde la pagina de Melipbike";

mail($destino, $contenido, $header);
echo "<script>alert('correo enviado')</script>";
echo "<script>setTimeout(\"location.href='index.php'\",1000)</script>";







?>