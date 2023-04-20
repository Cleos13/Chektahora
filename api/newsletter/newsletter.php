<?php 
    include '../../lib/config.php';
    $conn = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
    if(isset($_POST['new_user'])){
        $email = trim($_POST['new_user']);
        $email = preg_replace("/[<>?={}()#:|&]/", "", $email);
        $email = stripslashes($email);
        $pagina = 'chektahora';
        $id = md5(uniqid());
        $date = date('Y-m-d');
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
            $add = $conn->query("INSERT INTO newsletter (id, email, moment, pagina) VALUES ('$id', '$email', '$date', '$pagina')");
            if($add == true){
                echo 'true';
            }else{
                echo 'false';
            }
        }else{
            echo 'false';
        }

    }

?>