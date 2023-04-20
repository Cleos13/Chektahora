<?php
include '../../lib/config.php';
global $conn;
$get_items = $conn->query("SELECT * FROM products WHERE store=1");
$items = $get_items->fetch_all(MYSQLI_ASSOC);

$get_images = $conn->query("SELECT * FROM images_product");
$images = $get_images->fetch_all(MYSQLI_ASSOC);
$p = [];
foreach ($items as $item) {
    $img = '';
    foreach ($images as $image) {
        if ($image['id_product'] === $item['id']) {
            $img = $image['img'];
        }
    }
    $p[] = [ 'name' => $item['name'], 'id'=> $item['id'], 'price' => $item['price'], 'img' => $img, 'cant' => 1, "cat" => $item['category']];
}
echo json_encode($p);
