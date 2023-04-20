<?php 
include '../lib/config.php';
        $cupon = trim($_POST['cupon']);
        $tipo = trim($_POST['tipo_descuento']);
        $fecha = trim($_POST['vencimiento']);
        $porcentaje = trim($_POST['porcentaje']);
        $cantidad = trim($_POST['cantidad']);
        $aplica = trim($_POST['aplica']);
        $tipo_cupon = trim($_POST['tipo_cupon']);

        $categoria = 0;
        $producto = 0;

        if($tipo_cupon != 'Producto'){
            $categoria = trim($aplica);
        }else{
            $producto = trim($aplica);
        }
        if($tipo == 'Porcentaje'){
            $descuento = $porcentaje;
        }else{
            $descuento = $cantidad;
        }

        $add = $conn->query("INSERT INTO descuento (descuento_aplicable, tipo, cupon, producto, categoria, fecha) 
            VALUES ('$descuento', '$tipo', '$cupon', '$producto', '$categoria', '$fecha')");
            if($add == TRUE){
                echo true;
            }else{
                echo false;
            }
?>