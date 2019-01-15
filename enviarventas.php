<?php
  $mensaje.= "\nNombre: ". $_POST['nombre'];
  $mensaje.= "\nCorreo: ".$_POST['correo'];
  $mensaje.= "\nTelefono: ". $_POST['telefono'];
  $mensaje.= "\nProducto: ". $_POST['producto'];
  $mensaje.= "\nNumero de Serie: ". $_POST['serie'];
  $mensaje.= "\nMensaje: ".$_POST['mensaje'];
  $destino= "dpto.soporte.iintegra@gmail.com";
  $remitente = $_POST['correo'];
  $asunto = "Cotización solicatado realizado por: ".$_POST['nombre'];
  mail($destino,$asunto,$mensaje,"FROM: $remitente");
  header("location:gracias.html")
?>