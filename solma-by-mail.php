<?php

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "contacto@solmasoluciones.com"; //Direcciones a las que se enviara el correo
$email_from ="contacto@solmasoluciones.com"; //Direccion que quieras que le aparezca al cliente
$email_subject = "Formulario desde sitio web Solma"; //Asunto
$email_bcc = "webmaster@morraldeyute.com, admorral@gmail.com"; //Direcciones copias ocultas

// Variables del mensaje
$nombre = $_POST['nombre'];
$correo =  $_POST['correo'];
$telefono =  $_POST['telefono'];
$mensaje =  $_POST['mensaje'];
$contenido= "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;

$header =
'From: '.$email_from."\r\n".
'Bcc: ' .$email_bcc. "\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $contenido, $header);

header("Location:http://solmasoluciones.com/manufactura/");

?>
