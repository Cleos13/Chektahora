<?php
include '../lib/config.php';

$id = $_POST['id'];

$nombre = $_POST['nombre'];
$its = $_POST['its'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$fecha = $_POST['fecha_nacimiento'];
$conoce = $_POST['conoce'];

$medicamentos = $_POST['medicamentos'];
$sintomas = $_POST['sintomas'];
$fecha_covid = $_POST['fecha_covid'];
$hora_covid = $_POST['hora_covid'];

$calle = $_POST['calle'];
$no_ext = $_POST['no_ext'];
$no_int = $_POST['no_int'];

$cp = $_POST['cp'];
$colonia = $_POST['colonia'];
$municipio = $_POST['municipio'];
$estado = $_POST['estado'];

$estatus_customer = $_POST['estatus_customer'];
$estatus_logistica = $_POST['estatus_logistica'];

$add = $conn->query("UPDATE its SET nombre='$nombre', its='$its', sexo='$sexo', email='$email', 
tel='$tel', fecha_nacimiento='$fecha', conoce='$conoce', medicamentos='$medicamentos', sintomas='$sintomas', 
fecha_covid='$fecha_covid', hora_covid='$hora_covid', calle='$calle', no_ext='$no_ext', no_int='$no_int', cp='$cp',
colonia='$colonia', municipio='$municipio', estado='$estado', estatus_customer='$estatus_customer', estatus_logistica='$estatus_logistica' WHERE id='$id'");
if($add == TRUE){
    header('Location: ../order?a=true&order=' . $id);
}else{
    header('Location: ../order?a=false&order=' . $id);
}
