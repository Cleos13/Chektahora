<?php
 include '../lib/config.php';
 session_start();
 global $conn;
 if($_GET['c_ref'] != ''){
    $id = base64_decode($_GET['c_ref']);
    $get = $conn->query("SELECT * FROM its WHERE ID_compra = '$id'");
    $rows = $get->num_rows;
    if($rows == 0){
        header('Location: detalle-compra');
    }else{
        $user = $get->fetch_all(MYSQLI_ASSOC);
        $_SESSION['status'] = 'pagado';
    }
 }else{
    header('Location: detalle-compra');
 }
?>
