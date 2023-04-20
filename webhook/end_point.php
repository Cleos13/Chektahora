<?php
include '../lib/config.php';
require '../api/resultados/PHPMailer/Exception.php';
require '../api/resultados/PHPMailer/PHPMailer.php';
require '../api/resultados/PHPMailer/SMTP.php';
require '../api/datos/precios.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$conn = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
$json = json_decode(file_get_contents('php://input'), true);
$headers = apache_request_headers();

$signature = '';
$date = '';
$digest = '';
foreach ($headers as $header => $value) {
    if($header == 'Signature'){
        $signature = $value;
    }
    if($header == 'Date'){
        $date = $value;
    }
    if($header == 'digest'){
        $digest = $value;
    }
}
$ex = explode(",", $signature);
//partner id
$secret_key = $json['operation']['partner']['id'];
//date, digest and encrypt signature
$da = utf8_encode("date:\040{$date}");
$di = utf8_encode("digest:\040{$digest}");
$concat_date_digest = utf8_encode("{$da}\n{$di}");
$h = hash_hmac('sha256', $concat_date_digest, $secret_key, true);
$s = base64_encode($h);
if(strpos($ex[4], $s)){
    $id = $json['operation']['checkout']['external_checkout_id'];
    if($json['operation']['payment']['status'] == 'APPROVED'){
        $status_pay = 'Pago aprobado. (Rappi)';
        $conn->set_charset("utf8");
        date_default_timezone_set("America/Mexico_City");
        $fecha = date('d/m/Y');
        $fecha_ = date('d-m-Y');
        $time = strtotime($fecha_);
        $hora = date('H:i A');

        $get = $conn->query("SELECT * FROM its WHERE estatus_pay = 1");
        $id_order = $get->num_rows + 1;

        $conn->query("UPDATE its SET estatus_pay = 1, type_pay='Rappi', fecha_pago='$fecha', hora_pago='$hora', time_pago='$time', orden='$id_order' WHERE ID_compra ='$id'");
        http_response_code(200);
        $products = $json['operation']['products'];
        $total = $json['operation']['payment']['amount'];
        $email = $json['operation']['shipping']['address']['email'];
        $num = count($products);
        $num_p = count($p);
        $template = '';
        for($i = 0; $i < $num; $i++){
            for($i_2 = 0; $i_2 < $num_p; $i_2++){
                if($products[$i]['name'] == $p[$i_2]['name']){
                    $template .= '<div style="margin-top: 60px; padding-left: 10%; display: flex;  align-items: center;">
                                            <div style="display: flex; align-items: center;">
                                                <img src="https://www.chektahora.com/'.$p[$i_2]['img'].'" alt="" width="150px" style="background-color: #fff; padding: 5px 18px; margin-left: -18px; border: 1px dashed #dbd2f7; border-width: 2px;">
                                            </div>
                                        <div style="margin: auto 40px; font-size: 20px; font-weight: 400; font-style: italic; font-family: \'Montserrat\', sans-serif !important;">
                                        <div style="margin: auto;">'.$p[$i_2]['name'].'</div></div>
                                    </div>';
                }
            }
        }

    $mail = new PHPMailer(true);
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
    $mail->setFrom('contacto@chektahora.com', 'ChektAhora');
    $mail->addAddress($email, 'Gracias por tu compra en ChektAhora');     //Add a recipient
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Gracias por tu compra en ChektAhora';
    $template = '
    <!DOCTYPE html>
    <html>
        <head>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
        </head>
        <body style="background-color: #fff;">
            <div style="width: 100%; height: 100%; background-color: #fff;">
                <div style="display: flex; align-items: center; margin: 40px 0;">
                    <img src="https://dev.chektahora.com/css/img/logoChektahora.png" alt="" width="250px" style="margin: auto;">
                </div>
                <div style="border-top: rgb(185, 185, 185) 1px solid; padding: 80px 8%;">
                    <div style="font-size: 30px; font-weight: 600; color: #452e81;">
                        <span style="border-bottom: 1.5px solid #4f2d8360; padding: 5px 0; font-family: \'Montserrat\', sans-serif !important;">
                            ¡Gracias por tu compra en ChektAhora!
                        </span>
                    </div>
                    <div style="margin-top: 30px; font-size: 25px; font-weight: 200; color: #452e81; font-family: \'Montserrat\', sans-serif !important;">
                        Uno de nuestros asesores médicos se contactará<br>contigo para confirmar tus datos y explicarte con detalle<br>el proceso de tu toma de muestra.
                    </div>
                    <div style="margin-top: 45px; font-size: 23px; font-weight: 600; color: #452e81; font-family: \'Montserrat\', sans-serif !important;">
                        Tu ID de compra es:&nbsp;&nbsp;&nbsp;<span style="font-weight: 700;">#'. $id .'</span>
                    </div>
                    <div>
                        <div style="margin-top: 70px; font-size: 20px; font-weight: 400; font-style: italic; font-family: \'Montserrat\', sans-serif !important;">Resumen de tu compra</div>
                        '. $template .'
                        <div style="display: flex; margin-top: 50px; padding: 0 50px;">
                        <table width="100%">
                        <thead>
                        <td></td>
                        <td></td>
                        </thead>
                        <tbody>
                        <td></td>
                        <td id="legal" width="50%" class="textcenter paddingsi blockwrap" style="vertical-align:top;text-align: right;padding: 20px 20px 20px 20px;margin: 0 auto !important;">
                        <div style="display: flex; font-size: 20px; font-weight: 800; margin: 40px auto;justify-content: flex-end;">
                            <div style="color: #452e81;font-family: \'Montserrat\', sans-serif !important; margin-right: 15px;">TOTAL DE TU COMPRA</div>
                            <div style="color: #ac9cde;font-family: \'Montserrat\', sans-serif !important;">'. $total .'</div>
                        </div>
                        </td>
                        </tbody>
                        </table>
                    </div>
                </div>
                <div style="width: 100%; background-color: #452e81; display: flex;  align-items: center;">
                    <div style="color: #fff;font-size: 20px; font-weight: 500;padding: 18px 20px;font-family: \'Montserrat\', sans-serif !important; margin: auto;text-align: center;">
                        Recuerda que tu compra se proceso mediante plataformas de pago como Conekta, Rappi o Stripe
                    </div>
                </div>
                <div style="padding: 50px 0;">
                    <div style="display: flex; align-items: center; font-size: 18px; color: #452e81; font-weight: 500;font-family: \'Montserrat\', sans-serif !important;">
                        <div style="text-align: center; width: 100%;">
                            Guarda este código de descuento para tu proxima compra
                        </div>
                    </div>
                    <div style="display: flex; align-items: center;">
                        <div style="display: flex; justify-content: space-around; margin: 40px auto;">
                            <div style="margin-right: 40px;margin-left: 10px;width: 180px;border-radius: 3px;border: 1px dashed #dbd2f7;border-width: 3px;display: flex;align-items: center;">
                                <div style="display: flex;align-items: center;padding: 7px 23px;font-weight: 700;font-style: italic;font-size: 19px;color: #452e81;background-color: #fff; font-family: \'Montserrat\', sans-serif !important;">
                                    Chekt10%Des
                                </div>
                            </div>
                            <a href="https://www.chektahora.com" style="display: inline-block;padding: 0.7rem 2.5rem;color: #452e81 !important;border-radius: 20px;text-decoration: none;font-size: 18px;transition: all .3s;position: relative;overflow: hidden;text-align: center;font-weight: 500;z-index: 1;background: #FFEB00;margin: 0 10px;font-family: \'Montserrat\', sans-serif !important;">Realiza otra compra</a>
                        </div>
                    </div>
                    <div style="display: flex; align-items: center; font-size: 14px; color: #452e81; font-weight: 500; margin-top: 35px; font-family: \'Montserrat\', sans-serif !important;">
                        <div style="text-align: center; width: 100%;">*Este descuento no aplica despues de 1 mes de realizar tu compra</div>
                    </div>
                </div>
                <div style="width: 100%; height: 60px; border-top: 1px solid #dbd2f7; display: flex;  align-items: center;">
                    <div style="color: #452e81; font-size: 18px; font-family: \'Montserrat\', sans-serif !important; width:100%; text-align: center;padding: 30px 20px;">
                        Si tiene alguna pregunta, responda a este correo electrónico a <a style="font-weight: 700; text-decoration: none;color: #452e81; font-family: \'Montserrat\', sans-serif !important;" href="mailto: customer.service@glowdx.com">customer.service@glowdx.com</a>
                    </div>
                </div>
            </div>
        </body>
    </html>';
    $mail->Body    = $template;
    $mail->AltBody = 'empty';
    $mail->CharSet = 'UTF-8';
    $mail->send();
    echo 'Notificacion '. $json['operation']['payment']['status'] .' recibida de Rappi';
    }else{
        http_response_code(200);
        echo 'Notificacion '. $json['operation']['payment']['status'] .' recibida de Rappi';
    }
}else{
    http_response_code(400);
    echo 'Notificacion no recibida de Rappi';
}
?>