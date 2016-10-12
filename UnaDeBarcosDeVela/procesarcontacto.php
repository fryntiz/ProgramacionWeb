<?php
header('Content-Type: text/html; charset=UTF-8');

error_reporting( E_ALL & ~( E_NOTICE | E_STRICT | E_DEPRECATED ) ); //Aquí se genera un control de errores "NO BORRAR NI SUSTITUIR"
require_once "Mail.php"; //Aquí se llama a la función mail "NO BORRAR NI SUSTITUIR"

$to = 'DESTINO@gmail.com'; //Aquí definimos quien recibirá el formulario
$from = 'informacion@nzweb.org'; //Aquí definimos que cuenta mandará el correo, generalmente perteneciente al mismo dominio
$host = 'smtp.nzweb.org'; //Aquí definimos cual es el servidor de correo saliente desde el que se enviaran los correos
$username = 'informacion@nzweb.org'; //Aqui se define el usuario de la cuenta de correo, en hostalia separado con punto en vez de @
$password = 'PASSWORD'; //Aquí se define la contraseña de la cuenta de correo que enviará el mensaje
$subject = 'Contacto desde la página web'; //Aquí se define el asunto del correo
$port = '587'; //Definido el puerto que utilizará

//Datos importados mediante POST
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$comentario = $_POST['comentario'];

//Aquí se define el cuerpo de correo
$mensaje = "Detalles del formulario de contacto:\n\n";
$mensaje .= "Nombre: " . $nombre . "\n";
$mensaje .= "Apellidos: " . $apellidos . "\n";
$mensaje .= "Correo electrónico: " . $email . "\n";
$mensaje .= "Teléfono: " . $telefono . "\n";
$mensaje .= "Comentario: " . $comentario . "\n\n";

//A partir de aquí empleamos la función mail para enviar el formulario

$headers = array ('From' => $from,
'To' => $to,
'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => $host,
'auth' => true,
'username' => $username,
'password' => $password,
'port' => $port,
'SMTPAuth' => true,
'SMTPSecure' => "tsl"));

$mail = $smtp->send($to, $headers, $mensaje);

//Una vez aquí habremos enviado el mensaje mediante el formulario

//El siguiente codigo muestra en pantalla un mensaje indicando que el mensaje ha sido enviado y a que cuenta ES OPCIONAL desde Acens lo incluimos para verificar que el formulario de prueba esta funcionando

if (PEAR::isError($mail)) {
echo("

" . $mail->getMessage() . "
");
} else {
echo "Mensaje enviado desde POA a ". $to ;
}


?>
