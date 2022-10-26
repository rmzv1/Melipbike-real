<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

$header = "Enviado desde la pagina de Melipbike";

$body = " " . $header . "<br>Nombre: " . $nombre . "<br>Correo: " . $correo . "<br>Telefono: " . $telefono . "<br>Mensaje: " . $mensaje;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = "renez3394@gmail.com";                     //SMTP username
    $mail->Password   = '06anacleto1994';                               //SMTP password
    $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($correo, $nombre);
    $mail->addAddress('renez3394@gmail.com');     //Add a recipient
  


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Mensaje de pruebas';
    $mail->Body    = $body;
    $mail->CharSet='UTF-8';

    $mail->send();
    echo "<script>alert('correo enviado')</script>";
    echo "<script>setTimeout(\"location.href='../index.php'\",1000)</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
