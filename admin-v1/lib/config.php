<?php
if($_SERVER['HTTP_HOST'] == 'dev.chektahora.com') {
    $db_host = "madigen-dev-rds.ce4x6miibqwa.us-east-2.rds.amazonaws.com";
    $db_nombre = "its";
    $db_usuario = "admin";
    $db_contra = "2ukJgABk0QMS8mM7dxak";
}else if($_SERVER['HTTP_HOST'] == 'localhost'){
    $db_host = "localhost";
    $db_nombre = "its";
    $db_usuario = "root";
    $db_contra = "";
}else{
    $db_host = "chektahora-prod.ce4x6miibqwa.us-east-2.rds.amazonaws.com";
    $db_nombre = "its";
    $db_usuario = "admin";
    $db_contra = "2ukJgABk0QMS8mM7dxak";
}

define('HOST', $db_host);
define('DB', $db_nombre);
define('USER', $db_usuario);
define('PASSWORD', $db_contra);


?>


