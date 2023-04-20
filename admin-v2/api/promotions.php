<?php
date_default_timezone_set("America/Mexico_City");
include '../lib/config.php';
global $conn;
if ($_GET['get'] === 'products-all') {
    $get_products = $conn->query("SELECT * FROM products WHERE store=1");
    $products = $get_products->fetch_all(MYSQLI_ASSOC);
    echo json_encode($products);
}
if ($_GET['get'] === 'items') {
    $id = $_POST['id'];
    $get_items = $conn->query("SELECT * FROM items_promotion WHERE id_promotion='$id'");
    $items = $get_items->fetch_all(MYSQLI_ASSOC);

    $get_products = $conn->query("SELECT * FROM products");
    $products = $get_products->fetch_all(MYSQLI_ASSOC);
    $p = [];
    foreach ($items as $item){
        foreach ($products as $prod){
            if($item['item'] === $prod['id']){
                $p[] = [$prod['name'],  $item['amount']];
            }
        }
    }

    echo json_encode($p);
}
if($_GET['action'] === 'delete'){
    $id = $_POST['id'];
    $conn->query("DELETE FROM promotions WHERE id='".$id."'");
    $conn->query("DELETE FROM items_promotion WHERE id_promotion='".$id."'");
}
if ($_GET['get'] === 'promotions-all') {
    $get_promotions = $conn->query("SELECT * FROM promotions");
    $promotions = $get_promotions->fetch_all(MYSQLI_ASSOC);
    echo json_encode($promotions);
}
if ($_GET['action'] === 'add') {
    $id = md5(uniqid());
    $name = $_POST['name'];
    $date = $_POST['date'];
    $type = $_POST['type'];

    //Promotion 1
    $product_1 = $_POST['product_1'];
    //Promotion 2
    $product_2 = $_POST['product_2'];
    $amount_product_2 = $_POST['amount_product_2'];
    //Promotion 3
    $porcent_3 = $_POST['porcent_3'];
    $amount_3 = $_POST['amount_3'];
    $type_discount_3 = $_POST['type_discount_3'];
    //Promotion 3
    $product_4 = $_POST['product_4'];
    $amount_4 = $_POST['amount_4'];
    $porcent_4 = $_POST['porcent_4'];
    $type_discount_4 = $_POST['type_discount_4'];

    $items = $_POST['items'];

    $promotion = intval($_POST['promotion']);


    $product = '';
    $type_discount = '';
    $amount = 0;
    $porcent = 0;
    $amount_products = 0;

    if($promotion === 1){
        $product = $product_1;
        if($type === '2x1'){
            $amount_products = 2;
        }else if($type === '3x2'){
            $amount_products = 3;
        }else if($type === '4x3'){
            $amount_products = 4;
        }
        $type_discount = 'amount';
        $get_products = $conn->query("SELECT price FROM products WHERE id='$product_1' AND store = 1");
        $productPromotion = $get_products->fetch_assoc();
        $amount = $productPromotion['price'];
    }
    if($promotion === 2){
        $product = $product_2;
        $type_discount = 'amount';
        $get_products = $conn->query("SELECT price FROM products WHERE id='$product_2' AND store = 1");
        $productPromotion = $get_products->fetch_assoc();
        $amount_products = intval($amount_product_2);
        $amount = $productPromotion['price'] * $amount_products;
    }
    if($promotion === 3){
        $type_discount = $type_discount_3;
        if($type_discount_3 === 'amount'){
            $amount = $amount_3;
        }else{
            $porcent = $porcent_3;
        }
    }
    if($promotion === 4){
        $product = $product_4;
        $type_discount = $type_discount_4;
        $amount_products = 1;
        if($type_discount_4 === 'amount'){
            $amount = $amount_4;
        }else{
            $porcent = $porcent_4;
        }
    }
    $add = $conn->query("INSERT INTO promotions (id, name, date, type, product, amount, amount_discount, porcent_discount, type_discount) 
VALUES ('$id', '$name', '$date', '$type', '$product', '$amount_products','$amount', '$porcent', '$type_discount')");
    if($add === TRUE){
        foreach ($items as $item){
            $item_id = $item[0];
            $amount_item = $item[1];
            $conn->query("INSERT INTO items_promotion (id_promotion, item, amount) VALUES ('$id', '$item_id', '$amount_item')");
        }
    }
}
?>