<?php
include '../../lib/config.php';
$conn = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
function sanitize($string){
    $string = trim($string);
    $string = preg_replace("/[<>?={}()#:|&]/", "", $string);
    $string = stripslashes($string);
    return $string;
}
if(isset($_POST['name'])){
    $date = date('d-m-Y');
    $name = sanitize($_POST['name']);
    $email = sanitize($_POST['email']);
    $text = sanitize($_POST['text']);
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
        $conn->query("INSERT INTO messages (name, email, date, pagina, text) VALUES ('$name', '$email', '$date', 'Chektahora', '$text')");
    }
}
?>