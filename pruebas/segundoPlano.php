<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');
require 'PHPMAILER/PHPMailerAutoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
//$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
//$mail->Host = 'smtp.gmail.com';
$mail->Host = "localhost"; // SMTP server host.

// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;

$HTML="
<h2>¡Tu compra ha sido registrada exitosamente!</h2>
<h3>Los detalles de tu compra son los siguientes: </h3>
<br />
<p><strong>Pruducto: </strong>".$nombreProducto."</p>
<p><strong>Precio: </strong>€ ".$precio."</p>
<p><strong>Cantidad: </strong>".$cantidad."</p>
<p><strong>Total Compra: </strong>€ ".$cantidad*$precio."</p>


<p>En los próximos minutos nuestro equipo se pondrá en contacto contigo para finiquitar la operación</p>

<p>Gracias por usar los servicios de www.tustramitesenvenezuela.com</p>";



//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "tustramitesweb@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "*webtustramites*";
$mail->setFrom('tustramitesweb envenezuela <tustramitesweb@gmail.com>');
$mail->FromName = "Tus Tramites web en Venezuela";
//Set who the message is to be sent from
$mail->addAddress("jesushalfonzo@gmail.com", "Jesus Alfonzo");
//Set an alternative reply-to address
$mail->addReplyTo('tustramitesweb@gmail.com', 'Tus Tramites Web');
//Set who the message is to be sent to
$mail->addAddress("jesushalfonzo@gmail.com", "Jesus Alfonzo");
//Set the subject line
$mail->Subject = 'Hemos recibido tu solicitud';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($HTML);
//Replace the plain text body with one created manually
$mail->AltBody = 'Hemos recibido tu solicitud';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    $exitoso=false;
} else {
    $exitoso=true;
}



?>
