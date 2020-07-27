<?php

$nombre = $_POST["nombre"];
$from = $_POST["email"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["msg"];    

$aviso = "Este mensaje NO PUEDE ser respondido directamente.\n Para hacerlo tiene que enviar un mail nuevo a " . $from . ".";

$mensajeCompleto = "Enviado desde la pagina de Cabaña Las Nenas.\n\nDe:  " . $nombre . "\nEmail:  " . $from . "\n\n" . $mensaje . "\n\n" . $aviso;
        
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../php/Exception.php';
require '../php/PHPMailer.php';
require '../php/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                     
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                    
    $mail->Username   = 'c.lasnenas@gmail.com';                  
    $mail->Password   = 'cabanaln';                              
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
    $mail->Port       = 587;                                   

    //Recipients
    $mail->setFrom($from, $nombre);
    $mail->addAddress('c.lasnenas@gmail.com');

    // Content
    $mail->Subject = $asunto;
    $mail->Body    = $mensajeCompleto;
    $mail->send();
    echo '<script>
        alert("mensaje enviado con exito.\nGracias por comunicarte!");
        window.history.go(-1);
        </script>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

