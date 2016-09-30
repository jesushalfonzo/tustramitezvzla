<?php

include('../extras/conexion.php');
$link=Conectarse();
if((isset($_POST["nombre"]))&&($_POST["nombre"]!="")){ $nombre=strip_tags(htmlentities(mysqli_real_escape_string($link, $_POST["nombre"]))); } else {$aErrores[] = "El campo nombre está vacío";}
if((isset($_POST["correo"]))&&($_POST["correo"]!="")){ $correo=strip_tags(htmlentities(mysqli_real_escape_string($link, $_POST["correo"]))); } else {$aErrores[] = "No se indicó un email";}
if((isset($_POST["country"]))&&($_POST["country"]!="")){ $country=mysqli_real_escape_string($link, $_POST["country"]); } else {$aErrores[] = "Debe indicar el país de procedencia";}
if((isset($_POST["mensaje"]))&&($_POST["mensaje"]!="")){ $mensaje=strip_tags(htmlentities(mysqli_real_escape_string($link, $_POST["mensaje"]))); } else {$aErrores[] = "Debe introducir su mensaje";}


if(count($aErrores)==0) { 
	sendMail("$correo", "$nombre", "$mensaje");
		//Envío la respuesta al Front
		$jsondata["success"] = true;
		$jsondata["data"] = array(
			'message' => "Su correo ha sido enviado correctamente"
			);

	echo json_encode($jsondata, JSON_FORCE_OBJECT);

}
else{ 
	$jsondata["success"] = false;
	$jsondata["data"] = array(
		'message' => $aErrores
		);

	echo json_encode($jsondata, JSON_FORCE_OBJECT);

}

function sendMail($email, $nombre, $mensaje){
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
$mail->SMTPDebug = 0;
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

$HTML="<h2>¡El Usuario $nombre desea ponerse en contacto con usted!</h2>
<h3>Ha dejado el siguiente mensaje: </h3>

<p>$mensaje</p>
<p>Responda este correo directamente o escriba uno nuevo a la dirección: $email</p>
";




//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "tustramitesweb@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "*webtustramites*";
$mail->setFrom('tustramitesweb envenezuela <tustramitesweb@gmail.com>');
$mail->FromName = "Tus Tramites web en Venezuela";
$mail->AddReplyTo($email, $nombre);

//Set who the message is to be sent from
$mail->addAddress("tustramitesweb@gmail.com", "Tus Tramites Web");
//Set an alternative reply-to address
$mail->addReplyTo('tustramitesweb@gmail.com', 'Tus Tramites Web');
//Set who the message is to be sent to
$mail->addAddress("tustramitesweb@gmail.com", "Tus Tramites Web");
//Set the subject line
$mail->Subject = 'Nueva Solicitud de contacto';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($HTML);
//Replace the plain text body with one created manually
$mail->AltBody = 'Nueva Solicitud de contacto';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    $exitoso=false;
} else {
    $exitoso=true;
}


}

?>