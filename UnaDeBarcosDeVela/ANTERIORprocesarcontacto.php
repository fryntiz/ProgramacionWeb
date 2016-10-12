<?php
// Preferencias
$para = "raupulus@gmail.com";
$asunto = "Contacto desde el sitio web";
//Solo para el servidor hostalia:
$hostaliaFROM = "-fatencion@nzweb.org";
//Variables generales
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$mail = $_POST['mail'];
$telefono = $_POST['telefono'];
$comentario = $_POST['comentario'];

// Validación de datos

//Preparamos el mensaje que contendrá el correo
$mensaje = "Detalles del formulario de contacto:\n\n";
$mensaje .= "Nombre: " . $nombre . "\n";
$mensaje .= "Apellidos: " . $apellidos . "\n";
$mensaje .= "Correo electrónico: " . $mail . "\n";
$mensaje .= "Teléfono: " . $telefono . "\n";
$mensaje .= "Comentario: " . $comentario . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$bool = mail($para, $asunto, $mensaje, $header, $hostaliaFROM);

if ($bool) {
    echo "Mensaje enviado";
} else {
    echo "Mensaje no enviado";
}

//echo "¡El formulario se ha enviado con éxito!";
?>
