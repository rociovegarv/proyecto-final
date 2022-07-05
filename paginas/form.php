<?php
$email = $_POST [name];
$consulta = $_POST [consulta];

$mensaje = "Este mensaje fue enviado por " . $email . ",\r\n";
$mensaje .= "La consulta es" . $_POST ['mensaje'] . ",\r\n";
$mensaje .= "Enviado el" . date ('d/m/y' time () );

$destinatario = 'rociovegarv@hotmail.com';
$asunto = 'Este mail fue enviado desde la web'; 

mail ($destinatario, $asunto,  utf8_decode ($mensaje), $header);

header ('index.html')