<?php

$nombre = $_POST['name']
$mail = $_POST['email']
$mensaje = $_POST['textarea']

// Como me va a llegar el cuerpo del mail a mi, o sea lo que la gente escribio en el form //
$mensaje = "Este es un mensaje envaido por " . $nombre . "\r\n";
$mensaje .= "Su e-mail es: " . $mail . "\r\n";
$mensaje .= "Menaje: " . $_POST['mensaje'] . "\r\n";
$mensaje .= "Enviado el" .date('d/m/y', time());

$para = 'comlejopiuquen1@gmail.com';
$asunto = 'Este mail fue enviado desde la web Complejo Piuquen';

//funcion mail
//a quien le mando el mail 
mail($para, $asunto, utf8_decode($mensaje), $header);

//Redierccion al haber enviando el form
header('Location:exito.html');

?>
