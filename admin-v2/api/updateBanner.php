<?php
include '../lib/config.php';
$banner_e = $_POST['banner_espanol'];
$banner_i = $_POST['banner_ingles'];
if($banner_e != NULL && $banner_i != NULL){
    $add = $conn->query("UPDATE banner SET banner_espanol='$banner_e', banner_ingles='$banner_i' WHERE id=1");
    if($add == TRUE){
        header('Location: ../banner?a=true');
    }else{
        header('Location: ../banner?a=false');
    }
}else{
    header('Location: ../banner?a=null');
}

?>



