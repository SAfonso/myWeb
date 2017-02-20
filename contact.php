<?php

$para = 'bfatespinnerr@gmail.com';

$asunto = "Mensaje de tu web.";

$mailheader = "From: ".$_POST["email"]."\r\n";
$mailheader = "Reply-To: ".$_POST["email"]."\r\n";
$mailheader = "Content-type: text/html; charset=utf-8\r\n";

$MESSAGE_BODY = "Nombre: ".$_POST["name"]."\r\n";
$MESSAGE_BODY = "\n<br>Email: ".$_POST["email"]."\r\n";
$MESSAGE_BODY = "\n<br>Message: ".nl2br($_POST["message"])."\r\n";

mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die("¡Error al enviar el email!");

header('Location: ')

?>