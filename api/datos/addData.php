<?php
session_start();
include '../../lib/config.php';
function sanitize($string){
    $string = trim($string);
    $string = preg_replace("/[<>?={}()#:|&]/", "", $string);
    $string = stripslashes($string);
    return $string;
}

include 'precios.php';
    $num_p_data = count($p);
    $prod = json_decode($_POST['set_products']); 
    $num = count($prod);
    $productos = "";
    $total = 0;
    if($num != 0){
        for ($i = 0; $i < $num; $i++) { 
            for($i_2 = 0; $i_2 < $num_p_data; $i_2++){
                if($prod[$i]->id == $p[$i_2]['id'] && $prod[$i]->name == $p[$i_2]['name'] && $prod[$i]->img == $p[$i_2]['img']){
                    $total += $p[$i_2]['price'] * $prod[$i]->cant;
                }
            }
        }
    }
    $id_order = md5(uniqid());
    $id     = intval(trim($_POST['id']));
    $name   = sanitize($_POST['name']);
    $sex    = sanitize($_POST['sexo']);
    $its    = sanitize($_POST['its']); //Es opcional, puede ser vacio
    $street = sanitize($_POST['street']);
    $no_ext = sanitize($_POST['no_ext']);
    $no_int = sanitize($_POST['no_int']);
    $cp     = intval(sanitize($_POST['cp']));
    $suburb = sanitize($_POST['suburb']); //Colonia
    $municipality = sanitize($_POST['municipality']);
    $state  = sanitize($_POST['state']);
    $email  = sanitize($_POST['email']);
    $clinicos  = $_POST['clinicos'];
    $tel    = intval(sanitize($_POST['tel']));
    $date   = sanitize($_POST['date']);
    $option = sanitize($_POST['conoce']);
    $envio  = intval($_SESSION['envio']);
    $total_parcial  = intval($total);
    $total = $total + $_SESSION['envio'] - ($_SESSION['descuento_secure'] + $_SESSION['promotion']);

    $medicamentos  = $_POST['medicamento'];
    $pasaporte  = $_POST['pasaporte'];
    $sintomas  = $_POST['sintomas'];

    $promotion = 'Sin promoción';
    if($_SESSION['promotion_name'] != ''){
        $promotion = $_SESSION['promotion_name'];
    }

    $cupon  = sanitize($_POST['coupon']);

    $descuento  = intval($_SESSION['descuento_secure']);

    if($_POST['num_c'] != 0) {
        $fecha_covid = $_POST['covid'];
        $hora_covid = $_POST['covid_hora'];
    }else{
        $fecha_covid = 'El usuario no agrego productos de la categoria covid';
        $hora_covid = 'El usuario no agrego productos de la categoria covid';
    }

    $cantidad_personas = intval($_POST['cantidad_personas']);
    $d = $_POST['informacion_personas_extra'];

   $token = $_POST['token'];
    $cu = curl_init();
    curl_setopt($cu, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($cu, CURLOPT_POST, 1);
    curl_setopt($cu, CURLOPT_POSTFIELDS, http_build_query(array('secret' => '6LeRAI8eAAAAABwA1LCULEW2S2SIAxCfZubweo_m', 'response' => $token)));
    curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($cu);
    curl_close($cu);

    $datos = json_decode($response, TRUE);
    if($datos['success'] == 1 && $datos['score'] >= 0.5){
        if(!empty($d)){
            $n = count($d);
            $add = $conn->query("INSERT INTO its (ID ,ID_compra, nombre, sexo, its, calle, no_ext, no_int, cp, colonia, municipio, estado, email, tel, fecha_nacimiento, conoce, envio, total_parcial, total, medicamentos, clinicos, sintomas, pasaporte, hora_covid, fecha_covid, cant_cupon, cupon, personas_extras, promotion) 
            VALUES ('$id_order','$id', '$name', '$sex', '$its', '$street', '$no_ext', '$no_int', '$cp', '$suburb', '$municipality', '$state', '$email', '$tel', '$date', '$option', '$envio', '$total_parcial', '$total', '$medicamentos', '$clinicos', '$sintomas', '$pasaporte', '$hora_covid', '$fecha_covid', '$descuento', '$cupon', '$cantidad_personas', '$promotion')");
            for ($i = 0; $i < $num; $i++) { 
                for($i_2 = 0; $i_2 < $num_p_data; $i_2++){
                    if($prod[$i]->id == $p[$i_2]['id'] && $prod[$i]->name == $p[$i_2]['name'] && $prod[$i]->img == $p[$i_2]['img']){
                        $name_p = $prod[$i]->name;
                        $cant_p = $prod[$i]->cant;
                        $cat_p = $prod[$i]->cat;
                        $add = $conn->query("INSERT INTO productos_orden (id, nombre, cantidad, categoria) 
                        VALUES ('$id_order', '$name_p', '$cant_p', '$cat_p')");
                    }
                }
            }
            if($add == true){
                for ($i = 0; $i < $n; $i++) { 
                    if($i != 0){
                        $conn->query("INSERT INTO personas_extras (id, nombre, email, fecha_nacimiento, pasaporte) 
                        VALUES ( '$id_order', '".$d[$i][0]['nombre']."', '".$d[$i][0]['correo']."', '".$d[$i][0]['fecha']."', '".$d[$i][0]['pasaporte']."')");
                    }
                }
                echo true;
            }else{
                echo false;
            }
        }else{
            $add = $conn->query("INSERT INTO its (ID ,ID_compra, nombre, sexo, its, calle, no_ext, no_int, cp, colonia, municipio, estado, email, tel, fecha_nacimiento, conoce, envio, total_parcial, total, medicamentos, clinicos, sintomas, pasaporte, hora_covid, fecha_covid, cant_cupon, cupon, personas_extras, promotion) 
            VALUES ('$id_order','$id', '$name', '$sex', '$its', '$street', '$no_ext', '$no_int', '$cp', '$suburb', '$municipality', '$state', '$email', '$tel', '$date', '$option', '$envio', '$total_parcial', '$total', '$medicamentos', '$clinicos', '$sintomas', '$pasaporte', '$hora_covid', '$fecha_covid', '$descuento', '$cupon', '$cantidad_personas', '$promotion')");
            if($add == true){
                for ($i = 0; $i < $num; $i++) { 
                    for($i_2 = 0; $i_2 < $num_p_data; $i_2++){
                        if($prod[$i]->id == $p[$i_2]['id'] && $prod[$i]->name == $p[$i_2]['name'] && $prod[$i]->img == $p[$i_2]['img']){
                            $name_p = $prod[$i]->name;
                            $cant_p = $prod[$i]->cant;
                            $cat_p = $prod[$i]->cat;
                            $add = $conn->query("INSERT INTO productos_orden (id, nombre, cantidad, categoria) 
                            VALUES ('$id_order', '$name_p', '$cant_p', '$cat_p')");
                        }
                    }
                }
                echo true;
            }else{
                echo false;
            }
        }
    }
?>
