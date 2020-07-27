<?php
    $destinatario = "Gaastonmaartin12@gmail.com";

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['msj'];    

    $header = "Enviado desde la pagina de Cabaña las Nenas";
    $mensajeCompleto = $mensaje . "\nAtentamente:" . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $email);
    echo "<script> alert('correo enviado con exito');</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",500);</script>";
?>