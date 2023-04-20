<?php
include '../../lib/config.php';
function sanitize($string){
    $string = trim($string);
    $string = preg_replace("/[<>?={}()#:|&]/", "", $string);
    $string = stripslashes($string);
    return $string;
}
    if(isset($_POST['fecha'])){
        $fecha = sanitize($_POST['fecha']);
        $get = $conn->query("SELECT * FROM its WHERE fecha_covid='$fecha' AND estatus_pay=1 AND estatus_customer=1 AND estatus_logistica=1");
        $data = $get->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data);
    }
?>