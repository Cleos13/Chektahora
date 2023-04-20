<?php
include '../../lib/config.php';
session_start();
$conn = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);



if($_SESSION['promotion'] === 0){
    $token = $_POST['token'];
    $cu = curl_init();
    curl_setopt($cu, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($cu, CURLOPT_POST, 1);
    curl_setopt($cu, CURLOPT_POSTFIELDS, http_build_query(array('secret' => '6LeRAI8eAAAAABwA1LCULEW2S2SIAxCfZubweo_m', 'response' => $token)));
    curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($cu);
    curl_close($cu);
    $datos = json_decode($response, TRUE);
    if($datos['success'] == 1 && $datos['score'] >= 0.5){

        date_default_timezone_set("America/Mexico_City");
        session_start();
        $name = $_POST['coupon'];
        if($name != ''){
            $get = $conn->query("SELECT * FROM descuento WHERE cupon='$name'");
            $data = $get->fetch_all(MYSQLI_ASSOC);
            $row = count($data);
            if($row != 0){
                $p = json_decode($_POST['set_products']);
                $num = count($p);
                $discount_ = 0;
                for($i_p = 0; $i_p < $num; $i_p++){
                    for($i = 0; $i < $row; $i++){
                        $actual = strtotime(date("Y-m-d", time()));
                        $vencimiento = strtotime($data[$i]['fecha']);
                        if($actual <= $vencimiento){
                            if($data[$i]['producto'] != 0){
                                if($data[$i]['producto'] === $p[$i_p]->name){
                                    if($data[$i]['tipo'] == 'Cantidad'){
                                        $discount_ += ($data[$i]['descuento_aplicable'] * $p[$i_p]->cant);
                                    }else{
                                        $discount_ += (($p[$i_p]->price * $p[$i_p]->cant) * $data[$i]['descuento_aplicable']) / 100;
                                    }
                                }
                            }else{
                                if($data[$i]['categoria'] === $p[$i_p]->cat && $actual <= $vencimiento){
                                    if($data[$i]['tipo'] == 'Cantidad'){
                                        $discount_ += ($data[$i]['descuento_aplicable'] * $p[$i_p]->cant);
                                    }else{
                                        $discount_ += (($p[$i_p]->price * $p[$i_p]->cant) * $data[$i]['descuento_aplicable']) / 100;
                                    }
                                }
                            }
                        }
                    }
                }
                $_SESSION['descuento_secure'] = $discount_;
                echo $discount_;
            }else{
                $_SESSION['descuento_secure'] = 0;
                echo 0;
            }
        }
    }else{
        $_SESSION['descuento_secure'] = 0;
        echo 0;
    }
}else{
    $_SESSION['descuento_secure'] = 0;
    echo 0;
}





?>


