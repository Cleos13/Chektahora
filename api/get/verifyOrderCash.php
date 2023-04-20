<?php
 include '../lib/config.php';
 session_start();
 if($_GET['c_ref'] != ''){
     $id = base64_decode($_GET['c_ref']);
     $get = $conn->query("SELECT * FROM its WHERE ID_compra = '$id'");
     $rows = $get->num_rows;
     $_SESSION['status'] = 'pagado';
     if($rows == 0){
         header('Location: detalle-compra');
     }else{
         $user = $get->fetch_all(MYSQLI_ASSOC);
     }
 }else{
    header('Location: detalle-compra');
 }
?>