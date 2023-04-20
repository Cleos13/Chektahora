<?php
session_start();
include '../../lib/config.php';
date_default_timezone_set("America/Mexico_City");
global $conn;

if ($_GET['get'] === 'product') {
    $id = $_POST['id'];
    $get_products = $conn->query("SELECT price FROM products WHERE id='$id' AND store = 1");
    $product = $get_products->fetch_assoc();
    //echo json_encode($products);
    $_SESSION['descuento_secure'] = $_SESSION['descuento_secure'] + $product['price'];
    echo $product['price'];
}

if ($_GET['get'] === 'items-promotion') {
    $id = $_POST['id'];
    $get_products = $conn->query("SELECT * FROM items_promotion WHERE id_promotion='$id'");
    $items = $get_products->fetch_all(MYSQLI_ASSOC);
    echo json_encode($items);
}

if ($_GET['get'] === 'promotion' && $_SESSION['descuento_secure'] === 0) {
    $_SESSION["promotion"] = 0;
    $_SESSION["promotion_name"] = '';
    $cart = json_decode($_POST['cart']);
    $today = date('Y-m-d');
    $get_promotions = $conn->query("SELECT * FROM promotions WHERE date>='$today'");
    $promotions = $get_promotions->fetch_all(MYSQLI_ASSOC);

    $success_apply = false;
    $type = '';
    $total = 0;
    $id_promotion = '';
    $promotions_apply = [];
    $amount_discount = 0;
    $percent_discount = 0;
    foreach ($promotions as $promotion) {
        if($promotion['type'] !== 'gift'){
            foreach ($cart as $item_cart) {
                    if($item_cart->id === $promotion['product']){
                        if($item_cart->cant >= $promotion['amount']){
                            $promotions_apply[] = $promotion;
                            $success_apply = true;
                        }else{
                            $success_apply = false;
                        }
                    }
            }
        }else{
            $success_items_gift = 0;
            $id_promo_gift = $promotion['id'];
            $get_items = $conn->query("SELECT * FROM items_promotion WHERE id_promotion = '$id_promo_gift'");
            $items = $get_items->fetch_all(MYSQLI_ASSOC);
            $num_items = count($items);
            foreach ($cart as $item_cart) {
                foreach ($items as $item) {
                    if($item_cart->id === $item['item']){
                        if($item_cart->cant >= $item['amount']){
                            $success_items_gift++;
                        }
                    }
                }
            }
            if($success_items_gift === $num_items){
                $promotions_apply[] = $promotion;
            }
        }
    }
        if($success_apply === true){
                foreach($promotions_apply as $apply){
                    $success_items = 0;
                    $type_discount = $apply['type_discount'];
                    $amount_discount = $apply['amount_discount'];
                    $type = $apply['type'];
                    $percent_discount = $apply['porcent_discount'];
                    $id_apply = $apply['id'];
                    $get_items = $conn->query("SELECT * FROM items_promotion WHERE id_promotion = '$id_apply'");
                    $items = $get_items->fetch_all(MYSQLI_ASSOC);
                    $num_items = count($items);
                    foreach ($cart as $item_cart) {
                        foreach ($items as $item) {
                            if($item_cart->id === $item['item']){
                                if($item_cart->cant >= $item['amount']){
                                    $total = 0;
                                    if($apply['type'] === 'discount-product-seleted'){
                                        $total = $item_cart->price;
                                    }
                                    if($apply['type'] === 'discount-total'){
                                        $total = $_POST['total_promo'];
                                    }
                                    $success_items++;
                                }
                            }
                        }
                    }
                    if($success_items === $num_items){
                        if($type === 'discount-product-seleted' || $type === 'discount-total'){
                            if($type_discount === 'amount'){
                                $_SESSION['promotion'] = $amount_discount;
                            }else{
                                $discount = $total * ($percent_discount/100);
                                $_SESSION['promotion'] = $discount;
                            }
                        }
                        if($type === '2x1' || $type === '3x2' || $type === '4x3'){
                            $_SESSION['promotion'] = $amount_discount;
                        }
                        $_SESSION["promotion_name"] = $apply['name'];
                        echo json_encode($apply);
                        break 1;
                    }

                }

        }else{
            echo json_encode([]);
        }

}




?>