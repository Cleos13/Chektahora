<?php
include '../../../../lib/config.php';
$conn = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);

$json = json_decode(file_get_contents('php://input'), true);
$prueba = json_decode(apache_request_headers());

$id = $json['id'];
$conn->query("INSERT INTO prueba (prueba, status) VALUES ('$json', 'JSON')");
$conn->query("INSERT INTO prueba (prueba, status) VALUES ('$id', 'ID')");
$conn->query("INSERT INTO prueba (prueba, status) VALUES ('$prueba', 'HEADERS')");
header("HTTP/1.1 200 OK");

$signature = '';
$date = '';
$digest = '';
/* foreach ($headers as $header => $value) {
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
    header("HTTP/1.1 200 OK");
    if($json['operation']['payment']['status'] == 'APPROVED'){
        $status_pay = 'Pago aprobado. (rappi)';
    }else if($json['operation']['payment']['status'] == 'CANCELED'){
        $status_pay = 'El pago fue cancelado por el usuario o por la pasarela de pagos. (rappi)';
    }else if($json['operation']['payment']['status'] == 'FAILED'){
        $status_pay = 'Ocurrió un error y no fue posible procesar el pago. (rappi)';
    }else if($json['operation']['payment']['status'] == 'REJECTED'){
        $status_pay = 'El pago fue rechazado por la pasarela. (rappi)';
    }else{
        $status_pay = 'Revisar status en panel mi tienda rappi. (rappi)';
    }
    $id = $json['operation']['checkout']['external_checkout_id'];
    $conn->set_charset("utf8");
    $conn->query("UPDATE its SET status_customer = '$status_pay' WHERE ID_compra ='$id'");
    $data = 'true';
}else{
    header("HTTP/1.1 400 BAD REQUEST");
    $data = 'false';
} */
?>