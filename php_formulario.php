<?php
if($_SERVER['REQUEST_METHOD'] == 'GET') {

  $usuario = $_GET['usuario'];
  $miemail = $_GET['miemail'];
  $miedad = $_GET['miedad'];

 
  $mensaje = "Usuario: " . $usuario . "\r\n";
  $mensaje .= "Email: " . $miemail . "\r\n";
  $mensaje .= "Rango de Edad: " . $miedad . "\r\n";


  $para = '179719@upslp.edu.mx';
  $asunto = 'Información del formulario';
  $cabeceras = 'From: 179719@upslp.edu.mx' . "\r\n" .
              'Reply-To: 179719@upslp.edu.mx' . "\r\n" .
              'X-Mailer: PHP/' . phpversion();

  if(mail($para, $asunto, $mensaje, $cabeceras)) {
    echo 'El correo se envió correctamente.';
  } else {
    echo 'Error al enviar el correo.';
  }
}
?>

