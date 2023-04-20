<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ClassMail{
    

    public function sendEmailPDF($email,$nombre,$dest_path, $newFileName){
        
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

            //Recipients
            $mail->setFrom('contacto@chektahora.com', 'chektahora');
            $mail->addAddress($email,$nombre);     //Add a recipient

            //Attachments
            if(file_exists(__DIR__.'/../../backoffice/'.$dest_path)){
                $mail->addAttachment(__DIR__.'/../../backoffice/'.$dest_path, $newFileName);    //Optional name
            }

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Compra '.date('Y-m-d');
            $mail->Body    = 'Gracias por tu compra aquí está tu resultado'; 

            $mail->send();
            return  'Mensaje enviado correctamente';
        } catch (Exception $e) {
            return  "Error al enviar el mensaje: {$mail->ErrorInfo}";
        }

    }

}




?>