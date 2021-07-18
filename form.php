<?php

$destino = "mexboy34original@gmail.com";
//Esto es al correo que se enviarÃ¡ el mensaje

$name = $_POST['name ']; 
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$header = "Enviado desde formulario de contacto en localhost";
$mensajeCompleto = "\n Nombre: " . $name  . "\n" . "Email: " . $email . "\n" . "\n". "Mensaje :" . $mensaje;
mail($destino, $subject, $mensajeCompleto, $header);
header('Location: index.html');