<?php

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

$body = "<strong>NOMBRE: <strong>" . $nombre .
        "<br><br> CORREO: " . $correo.
        "<br><br> TELÉFONO: " . $telefono.
        "<br><br> MENSAJE: " . $mensaje;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';



$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'mail.solucioneshk.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'contacto@solucioneshk.com';                     
    $mail->Password   = 'ContactoHK2020*';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
    $mail->Port       = 587;                                    

    //Enviar a
    $mail->setFrom('contacto@solucioneshk.com', $nombre);
    $mail->addAddress('contacto@solucioneshk.com', 'Soluciones HKk');     
    

   

    // Contenido
    $mail->isHTML(true);                                  
    $mail->Subject = 'Soluciones HK Sitio Web';
    $mail->Body    = $body;
    $mail->CharSet = "UTF-8";
    

   // $mail->send()
    
         
    if ($mail->Send()){
        echo "<script>alert('Formulario enviado exitosamente!');location.href ='https://solucioneshk.com/contacto.php';</script>";    
     }else{
        echo "<script>alert('Error al enviar el formulario');location.href ='https://solucioneshk.com/contacto.php';</script>";
     }
        
         
} catch (Exception $e) {
    echo "No fue posible enviar su mensaje: {$mail->ErrorInfo}";
}

?>