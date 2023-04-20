<?php
session_start();
include '../lib/db.php';
$db = new DB();
$id = $_SESSION['id'];
$country = 'COP';
if($_SERVER['HTTP_HOST'] == 'dev.chektahora.com') {
    $url_rappi = 'https://microservices.dev.rappi.com';
}else if($_SERVER['HTTP_HOST'] == 'localhost'){
    $url_rappi = 'https://microservices.dev.rappi.com';
}else{
    $country = 'MXN';
    $url_rappi = 'https://services.rappi.com';
}


if($id != null){
    $get = $db->connect()->prepare("SELECT * FROM its WHERE ID_compra=:id AND estatus_pay = 1");
    $get->bindParam(':id', $id);
    $get->execute();
    $order = $get->fetch(PDO::FETCH_OBJ);
    if($order == null){
        if(isset($_SESSION['products']) && (substr($_SESSION["rappi_token"]->expires_in, 0, -3) >= strtotime("now"))){
            $products = $_SESSION["products"];
            $num = count($_SESSION['products']);
            $prd = [];
            $data = [
                "discounts" => $_SESSION['descuento_secure'] + $_SESSION["promotion"], //$_SESSION['discount']
                "currency" => $country,
                "reference_id" => $_SESSION['id'],
                "products" => array(
                array()
                ),
                "shipping_required"=> false,
                "shipping_address_updatable"=> false,
                "shipping_cost" => $_SESSION['envio'],
                "shipping_method" => "Terrestre",
                "taxes" => 0
            ];
            include '../api/datos/precios.php';
            //print_r($p);
            $num_p_data = count($p);
            $price = 0;
            $productos = '';
            $total = 0;
            for($i = 0; $i < $num; $i++){
                for($i_2 = 0; $i_2 < $num_p_data; $i_2++){
                    if($products[$i]->id == $p[$i_2]['id'] || $products[$i]->name == $p[$i_2]['name'] || $products[$i]->img == $p[$i_2]['img'] && ($products[$i]->cant >= 1)){
                        $total += $p[$i_2]['price'] * $products[$i]->cant;
                        $data['products'][$i] = [
                            'image' => 'https://dev.chektahora.com/' . $p[$i_2]['img'],
                            'items' => $products[$i]->cant,
                            'name' => $p[$i_2]['name'],
                            'price' => $p[$i_2]['price']
                        ];
                        $productos .= $p[$i_2]['name'] . ' - Cantidad: ' . $products[$i]->cant . '    - Categoria: ' . $products[$i]->cat . '<br>';
                    }
                }
            }
            $_SESSION['total_parcial'] = $total;
            $_SESSION['total'] = $total - ($_SESSION['descuento_secure'] + $_SESSION['promotion']) + $_SESSION['envio'];
            // Setup url + payload
            $url = $url_rappi . "/rms/merchant-services/api/v1/integration/checkout";
            $ch = curl_init($url);
            // Setup options for cURL
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Cookie: '.$_SESSION["rappi_fg"][0],
            'Access-Token: '.$_SESSION["rappi_token"]->access_token
            ]);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // Send Request
            $result = curl_exec($ch);
            curl_close($ch); // Don't forget to release the handler to avoid memory leaks later
            if ($result !== false) {
                $r = json_decode($result);
                if(!isset($r->id)){
                    //header('Location: checkout-conekta');
                }else{
                    $id = $r->id;
                }
            }else{
                //header('Location: checkout-conekta');
            }
        }else{
            header('Location: detalle-compra');
        }
    }else{
        header('Location: orden-compras?c_ref='. base64_encode($_SESSION['id']));
    }
}else{
    header('Location: detalle-compra');
}
?>