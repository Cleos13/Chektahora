<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include '../../lib/config.php';
$conn = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
$conn->set_charset("utf8");

 
$ID_compra = $_POST['ID_compra']; 

$resultado = $conn->query("SELECT * FROM its WHERE ID_compra='$ID_compra'");
$row = $resultado->fetch_assoc();

if($row['email']!=''){

    

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'contacto@chektahora.com';                     //SMTP username
        $mail->Password   = 'Ch3k7&mk8';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //obtengo el mail de base de datos
        $email = $row['email'];
        $Nombre_completo = $row['Nombre_completo'];

        //Recipients
        $mail->setFrom('contacto@chektahora.com', 'chektahora');
        $mail->addAddress($email,$Nombre_completo);     //Add a recipient
        
        $error_adjunto='';
        $ruta_fact= __DIR__."/../../backoffice/documento/".$ID_compra."_Fac.pdf";
        $ruta_lab= __DIR__."/../../backoffice/documento/".$ID_compra."_Lab.pdf";

        //Attachments
        if($ID_compra != '' && file_exists($ruta_fact)){
           $mail->addAttachment($ruta_fact);         //Add attachments
        }else{
            $error_adjunto .= "<br><strong> No se ha cargado la factura. </strong>";
        }

        if($ID_compra != '' && file_exists($ruta_lab)){
            $mail->addAttachment($ruta_lab);         //Add attachments
        }else{
            $error_adjunto .= "<br><strong> No se ha cargado el resultado del Laboratorio. </strong>";
        }
        

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Resultados';
        $mail->Body    = 'Adjunto documentos '.$error_adjunto;

        $mail->send();
        echo 'Mensaje enviado correctamente';
    } catch (Exception $e) {
        echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
    }

}else{
    echo "Correo de la compra no definido";
}
 






?>