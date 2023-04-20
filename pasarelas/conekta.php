<?php 
session_start();
include '../lib/db.php';
require("../api/conekta/php/lib/Conekta.php");
if($_SERVER['HTTP_HOST'] == 'dev.chektahora.com') {
  \Conekta\Conekta::setApiKey("key_wRssDg9XUqymD8mrWEJj8A");
  $key_pub = 'key_ENmxZxAy1SzJqvvY8DCmqHg';
}else if($_SERVER['HTTP_HOST'] == 'localhost'){
  \Conekta\Conekta::setApiKey("key_wRssDg9XUqymD8mrWEJj8A");
  $key_pub = 'key_ENmxZxAy1SzJqvvY8DCmqHg';
}else{
  \Conekta\Conekta::setApiKey("key_CwPowQAWgGyseTrrqGHJeQ");
  $key_pub = 'key_TQxvqqcZyeTno9npjGYjqsg';
}
\Conekta\Conekta::setApiVersion("2.0.0");
$db = new DB();
$id = $_SESSION['id'];
if($id != null){
    $get = $db->connect()->prepare("SELECT * FROM its WHERE ID_compra=:id AND estatus_pay = 1");
    $get->bindParam(':id', $id);
    $get->execute();
    $order = $get->fetch(PDO::FETCH_OBJ);
    if($order == null){
      /* if($_SESSION['checkout_conekta'] == ''){ */
        if(isset($_SESSION['name']) && isset($_SESSION['products']) && isset($_SESSION['email']) && $_SESSION['status'] == 'nuevo'){
          $validCustomer = [
            'name' => $_SESSION['name'],
            'email' => $_SESSION['email']
          ];
          $customer = \Conekta\Customer::create($validCustomer);
          $products = $_SESSION['products'];
          $num = count($_SESSION['products']);
          if($_SESSION['envio'] != 300){
            $envio = 'Envio en la zona';
          }else{
            $envio = 'Envio fuera de la zona';
          }
          $data = array(
              'line_items'=> array(
                array()
                ),
                'checkout' => array(
                  'allowed_payment_methods' => array("cash", "card", "bank_transfer"),
                  'monthly_installments_enabled' => true,
                  'monthly_installments_options' => array(3, 6, 9, 12)
                ),
                'customer_info' => array(
                  'customer_id' => $customer['id'],
                  "email" => $_SESSION['email'],
                ),
                "shipping_contact"=> array(
                  "receiver" => $_SESSION['name'],
                  "address"=> array(
                    "street1"=> $_SESSION['street'] . ' no. ext ' . $_SESSION['no_ext'] . ', ' . $_SESSION['municipality'] . ' ' . $_SESSION['state'] . ' CP. ' . $_SESSION['cp'],
                    "country"=> "MX",
                    "postal_code"=> '10000'
                  )
                ),
                'shipping_lines'    => array(
                  array(
                    'tracking_number' => "Enviar al usuario",
                    'amount' => $_SESSION['envio'] * 100,
                    'carrier' => 'Sin paqueteria asignada',
                    'method' => 'Terrestre',
                    'email' => $_SESSION['email']
                    )
                  ),
                  'currency'    => 'MXN',
                  'metadata'    => array(
                      'Pagina' => 'ChektAhora',
                      'Id' => $_SESSION['id'],
                      'Teléfono' => $_SESSION['tel'],
                      'Información extra de envio' => $envio
                  )
              );
              include '../api/datos/precios.php';
              $num_p_data = count($p);
              $productos = '';
              $total = 0;
              for($i = 0; $i < $num; $i++){
                for($i_2 = 0; $i_2 < $num_p_data; $i_2++){
                  if($products[$i]->id == $p[$i_2]['id'] || $products[$i]->name == $p[$i_2]['name'] || $products[$i]->img == $p[$i_2]['img']){
                    $price = $p[$i_2]['price'] * 100;
                    $total += ($price) * $products[$i]->cant;
                    $total_parcial += ($p[$i_2]['price']) * $products[$i]->cant;
                    $data['line_items'][$i] = [
                      'name' => $p[$i_2]['name'],
                      'quantity' => $products[$i]->cant,
                      'unit_price' => $p[$i_2]['price'] * 100
                    ];
                    $productos .= $p[$i_2]['name'] . ' - Cantidad: ' . $products[$i]->cant . '    - Categoria: ' . $products[$i]->cat . '<br>';
                    if($products[$i]->cant >= 99){
                      header('Location: checkouts');
                    }
                  }
                }
              }
              $_SESSION['total'] = intval($total_parcial) + intval($_SESSION['envio']) - (intval($_SESSION['descuento_secure']) + $_SESSION['promotion']);
              $_SESSION['total_parcial'] = $total_parcial;
              $des = $_SESSION['descuento_secure'] + $_SESSION['promotion'];
          if($des !== 0){
              if($_SESSION['promotion'] !== 0){
                $c = preg_replace("/[<>?={}()%#:|&]/", "", $_SESSION['cupon']);
                $c = trim($c);
              }else{
                  $c = $_SESSION["promotion_name"];
              }
            $data['discount_lines'][0] = [
                  "code" =>  $c,
                  "amount" => $des * 100,
                  "type"=> "coupon"
            ];
          }
          $order = \Conekta\Order::create($data);
          $id = $order['checkout']['id'];
          $_SESSION['checkout_conekta'] = $id;
            if($id == ''){
              header('Location: detalle-compra');
            }
        }else{
            header('Location: detalle-compra');
        }
     /*  }else{
        $id = $_SESSION['checkout_conekta'];
      } */
    }else{
        header('Location: orden-compras?c_ref='. base64_encode($_SESSION['id']));
    }
}else{
  header('Location: detalle-compra');
}
?>