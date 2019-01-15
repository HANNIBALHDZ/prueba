<?php
  $mensaje.= "\nNombre: ". $_POST['nombre'];
  $mensaje.= "\nCorreo: ".$_POST['correo'];
  $mensaje.= "\nTelefono: ". $_POST['telefono'];
  $mensaje.= "\nMensaje: \n".$_POST['mensaje'];
  $destino= "dpto.soporte.iintegra@gmail.com";
  $remitente = $_POST['correo'];
  $asunto = "Ticket de Servicio realizado por: ".$_POST['nombre'];
  mail($destino,$asunto,$mensaje,"FROM: $remitente");
  header("location:gracias.html")
?>