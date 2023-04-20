<?php
include '../../lib/config.php';
$conn = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
function sanitize($string){
    $string = trim($string);
    $string = preg_replace("/[<>?={}()#:|&]/", "", $string);
    $string = stripslashes($string);
    return $string;
}
    $id =$_POST['id'];
    $ID_compra =sanitize($_POST['ID_compra']);
    $Nombre_completo =sanitize($_POST['Nombre_completo']);
    $Sexo =sanitize($_POST['Sexo']);
    $its =sanitize($_POST['its']);
    $Calle =sanitize($_POST['Calle']);
    $No_exterior =sanitize($_POST['No_exterior']);
    $No_interior =sanitize($_POST['No_interior']);
    $CP_usuario =sanitize($_POST['CP_usuario']);
    $Colonia =sanitize($_POST['Colonia']);
    $Municipio =sanitize($_POST['Municipio']);
    $Estado =sanitize($_POST['Estado']);
    $email =sanitize($_POST['email']);
    $Telefono =sanitize($_POST['Telefono']);
    $Fecha_nacimiento =sanitize($_POST['Fecha_nacimiento']);
    $Medicamentos =sanitize($_POST['Medicamentos']);
    $Sintomas =sanitize($_POST['Sintomas']);
    $Pasaporte =sanitize($_POST['Pasaporte']);
    $conoce =sanitize($_POST['conoce']);
    $envio =sanitize($_POST['envio']);
    $total_parcial =sanitize($_POST['total_parcial']);
    $total =sanitize($_POST['total']);
    $producto = $_POST['producto'];
    $cantidad =sanitize($_POST['cantidad']);
    $cupon =sanitize($_POST['cupon']);
    $hora_covid =sanitize($_POST['hora_covid']);
    $fecha_covid =sanitize($_POST['fecha_covid']);
    $cant_cupon =sanitize($_POST['cant_cupon']);
    $status_logistica =sanitize($_POST['status_logistica']);
    $status_laboratorio =sanitize($_POST['status_laboratorio']);
    $status_customer =sanitize($_POST['status_customer']);
    $status_admin =sanitize($_POST['status_admin']);
    $conn->set_charset("utf8");
    echo $conn->query("UPDATE its SET ID_compra = '$ID_compra', Nombre_completo = '$Nombre_completo', Sexo = '$Sexo', its = '$its', Calle = '$Calle', No_exterior = '$No_exterior', No_interior = '$No_interior', CP_usuario = '$CP_usuario', Colonia = '$Colonia', Municipio = '$Municipio', Estado = '$Estado', email = '$email', Telefono = '$Telefono', Fecha_nacimiento = '$Fecha_nacimiento', Medicamentos = '$Medicamentos', Sintomas = '$Sintomas', Pasaporte = '$Pasaporte', conoce = '$conoce', envio = '$envio', total_parcial = '$total_parcial', total = '$total', producto = '$producto', hora_covid = '$hora_covid', fecha_covid = '$fecha_covid', cant_cupon = '$cant_cupon', cupon = '$cupon', status_logistica = '$status_logistica', status_customer = '$status_customer', status_laboratorio = '$status_laboratorio', status_admin = '$status_admin', cantidad = '$cantidad' WHERE ID ='$id'");

?>
