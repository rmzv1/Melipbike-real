<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];


$body = " " . $header . "<br>Nombre: " . $nombre . "<br>Correo: " . $correo . "<br>Asunto: " . $asunto . "<br>Mensaje: " . $mensaje;

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
    $mail->Host       = 'mail.melipbike.cl';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'consultasweb@melipbike.cl';                     //SMTP username
    $mail->Password   = 'melipbike2022';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;     //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    //Recipients
    $mail->setFrom ('consultasweb@melipbike.cl','Formulario Web');
    $mail->addAddress('asesorias@melipbike.cl');     //Add a recipient
  


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = $body;
    $mail->CharSet='UTF-8';

    $mail->send();
    echo "<script>alert('correo enviado')</script>";
    echo "<script>setTimeout(\"location.href='../index.php'\",1000)</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
