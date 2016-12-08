<?php
/**
 * This example shows sending a message using PHP's mail() function.
 */
require 'PHPMailer/PHPMailerAutoload.php';


$mail = new PHPMailer();

//Luego tenemos que iniciar la validación por SMTP:
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = "mail.limpiemoselreconquista.org"; // SMTP a utilizar. Por ej. smtp.elserver.com
$mail->Username = "info@limpiemoselreconquista.org"; // Correo completo a utilizar
$mail->Password = "*****"; // Contraseña
$mail->Port = 25; // Puerto a utilizar

//Con estas pocas líneas iniciamos una conexión con el SMTP. Lo que ahora deberíamos hacer, es configurar el mensaje a enviar, el //From, etc.
$mail->From = "info@elserver.com"; // Desde donde enviamos (Para mostrar)
$mail->FromName = "Nombre";

//Estas dos líneas, cumplirían la función de encabezado (En mail() usado de esta forma: “From: Nombre <correo@dominio.com>”) de //correo.
$mail->AddAddress("info@limpiemoselreconquista.org"); // Esta es la dirección a donde enviamos
$mail->IsHTML(true); // El correo se envía como HTML
$mail->Subject = “Titulo”; // Este es el titulo del email.
$body = “Hola mundo. Esta es la primer línea<br />”;
$body .= “Acá continuo el <strong>mensaje</strong>”;
$mail->Body = $body; // Mensaje a enviar
$exito = $mail->Send(); // Envía el correo.

//También podríamos agregar simples verificaciones para saber si se envió:
if($exito){
echo "El correo fue enviado correctamente.";
}else{
echo "Hubo un inconveniente. Contacta a un administrador.";
}
?>
