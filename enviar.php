<?php
//llamando a los campos
$nombre=$_POST['nombre'];
$correo=$_POST['email'];
$telefono=$_POST['telefono'];
$comentarios=$_POST['comentarios'];


//datos para el correo 
$destino="brunoandresfontes@gmail.com";
$asunto="Contacto desde nuestra web";

$carta="De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .="Telefono: $telefono \n";
$carta .="Mensaje: \n $comentarios";

mail($destino, $asunto, $carta);
header("location:index.html");

?>