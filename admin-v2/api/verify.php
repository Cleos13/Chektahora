<?php
include '../lib/config.php';
$_e = base64_decode($_POST['r'][0]['o']);
$_p = base64_decode($_POST['r'][0]['i']);

$_e = trim($_e);
$_e = htmlspecialchars($_e);
$_e = escapeshellcmd($_e);

$_p = trim($_p);
$_p = htmlspecialchars($_p);
if(empty($_e) || empty($_p) || strlen($_e) < 9){
        echo 2;
    }else{
        /* $token = $_POST['token'];
        $cu = curl_init();
        curl_setopt($cu, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($cu, CURLOPT_POST, 1);
        curl_setopt($cu, CURLOPT_POSTFIELDS, http_build_query(array('secret' => '6LeRAI8eAAAAABwA1LCULEW2S2SIAxCfZubweo_m', 'response' => $token)));
        curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($cu);
        curl_close($cu);
        $datos = json_decode($response, TRUE);
        if($datos['success'] == 1 && $datos['score'] >= 0.5){ */
        $get = $conn->query("SELECT * FROM users_backoffice WHERE email='$_e'");
        $data = $get->fetch_all(MYSQLI_ASSOC);
        $row = $get->num_rows;
            if($row != NULL){
                if(password_verify($_p, $data[0]['password'])){
                    session_start();
                    $_SESSION['s'] = [
                        'i' => $data[0]['id']
                    ];
                    echo 1;
                    //header('Location: ../inicio');
                    //Contraseña correcta
                }else{
                    echo 4;
                    //header('Location: ../login?a=null');
                    //Contraseña incorrecta
                }
            }else{
                echo 3;
                //header('Location: ../login?a=user');
                //No existe
            }
    }

?>