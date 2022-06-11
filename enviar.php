<?php
$destino= "kmilomejiar@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nnMensaje: " . $mensaje;
mail($destino,"Contacto", $contenido);
header("Location:mensaje.html");
?>