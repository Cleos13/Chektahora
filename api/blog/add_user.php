<?php
include '../../lib/db.php';
$db = new DB();
if(isset($_POST['u'])){
    $email = trim($_POST['u']);
    $email = preg_replace("/[<>?={}()#:|&]/", "", $email);
    $email = stripslashes($email);
    $id = md5(uniqid());
    $date = date('Y-m-d');
    $token = trim($_POST['token']);
    $cu = curl_init();
    curl_setopt($cu, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($cu, CURLOPT_POST, 1);
    curl_setopt($cu, CURLOPT_POSTFIELDS, http_build_query(array('secret' => '6LeRAI8eAAAAABwA1LCULEW2S2SIAxCfZubweo_m', 'response' => $token)));
    curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($cu);
    curl_close($cu);
    $datos = json_decode($response, TRUE);
    $add = $db->connect()->prepare("INSERT INTO users_mailing_blog (id, email, moment) VALUES (:id, :email, :moment)");
    $add -> bindParam(':id', $id);
    $add -> bindParam(':email', $email); 
    $add -> bindParam(':moment', $date);
    $add -> execute();
    if($add == TRUE){
        echo 'true';
    }else{
        echo 'false';
    }
}
?>