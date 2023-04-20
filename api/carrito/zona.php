<?php
  session_start();
  include '../../lib/db.php';
  $db = new DB();
if(isset($_POST['cp'])){
    $cp = $_POST['cp'];
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
        $add = $db->connect()->prepare("SELECT * FROM zona WHERE CP LIKE :cp");
        $add->bindParam(':cp', $cp);
        $add->execute();
        $row = $add->fetch(PDO::FETCH_OBJ);
        if($row != null){
            $_SESSION['envio'] = 0;
            echo '1';
        }else{
            $_SESSION['envio'] = 300;
            echo '3';
        }
    }
}else{
    $_SESSION['envio'] = 300;
    echo '3';
}
?>