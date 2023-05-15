<?php

if(isset($_POST['submit']))
{
    $para= "179719@upslp.edu.mx"; /*A donde se mandara*/
    $asunto= "Mensaje de dudas"; /*Lo que se resivira*/

    /*Datos que se tomaran*/
    $nombre= $_POST['name'];
    $correo= $_POST['email'];
    $mensaje = $_POST['message'];
    $phone = $_POST['phone'];

    /*Tipo de contenido que se esta enviando */
    $headers= "MINE-Version: 1.0\r\n";
    $headers= "Content-type: text/html; charset=utf8\r\n";

    /*Concatenar toda esa informacion */
    $cuerpo= "Enviado por: $nombre\n E-mail: $correo\n Telefono: $phone\n Mensaje: $mensaje\n";
    $bool=mail($para,$asunto,$cuerpo,$headers);
}
else
{
    echo "Algo salio mal..."; /*Si algo no paso muestra el error */
}