<?php
    $destinatario = 'gaastonmaartin12@gmail.com';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['msj'];    

    $header = "Enviado desde la pagina de Cabaña las Nenas";
    $mensajeCompleto = $mensaje . "\nAtentamente:" . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script> alert('correo enviado con exito');</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000);</script>";
?>