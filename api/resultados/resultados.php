
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Prueba visible</title>
</head>
<body>
<?php
include 'lib/config.php';

$ID_compra=$_POST['ID_compra'];
$email=$_POST['email'];

if ($ID_compra == 0){
    
}else{

$conexion = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);

if(mysqli_connect_errno()){
    
        echo "Error al conectar con la base de datos";
        exit();
    }
    mysqli_set_charset($conexion,"utf8");

        $consulta="SELECT * FROM its WHERE email LIKE '$email' AND ID_compra LIKE '$ID_compra'";        
        $resultado=mysqli_query($conexion,$consulta);
      if($fila=mysqli_fetch_array($resultado)){


        $ID_cookie_compra = &$fila['ID_compra'] . 'pdf';            
        setcookie("ID_cookie_compra","$ID_cookie_compra");

        $cookie_Nombre_Completo = &$fila['Nombre_completo'];            
        setcookie("cookie_Nombre_Completo","$cookie_Nombre_Completo");

        $cookie_estatus = &$fila['Estatus'];            
        setcookie("cookie_estatus","$cookie_estatus");

        header("Status: 301 Moved Permanently");
        header("Location: resultados");
     }else{
        echo"Contraseña incorrecta";
    echo "$respuesta";
    mysqli_close($conexion);
}
}   

?>
</body>
</html>