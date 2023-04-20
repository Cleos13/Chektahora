<?php
include '../lib/config.php';
global $conn;
if ($_GET['get'] === 'all') {
    $get_products = $conn->query("SELECT * FROM products");
    $products = $get_products->fetch_all(MYSQLI_ASSOC);
    $items = [];
    foreach ($products as $item) {
        $get_img = $conn->query("SELECT * FROM images_product WHERE id_product = '" . $item['id'] . "'");
        $img = $get_img->fetch_all(MYSQLI_ASSOC);
        $get_qe = $conn->query("SELECT title, content FROM questions_product WHERE id_product = '" . $item['id'] . "'");
        $qe = $get_qe->fetch_all(MYSQLI_ASSOC);
        $p['img'] = $img;
        $p['pe'] = $qe;
        $items[] = $item + $p;
    }
    echo json_encode($items);
}
if ($_GET['get'] === 'item') {
    $id = $_POST['id'];
    $get_products = $conn->query("SELECT * FROM products WHERE id='" . $id . "'");
    $products = $get_products->fetch_all(MYSQLI_ASSOC);
    $items = [];
    foreach ($products as $item) {
        $get_qe = $conn->query("SELECT title, content FROM questions_product WHERE id_product = '" . $item['id'] . "'");
        $qe = $get_qe->fetch_all(MYSQLI_ASSOC);
        $p['pe'] = $qe;
        $items[] = $item + $p;
    }
    echo json_encode($items);
}
if ($_GET['get'] === 'image') {
    $id = $_POST['id'];
    $get_images = $conn->query("SELECT * FROM images_product WHERE id_product='" . $id . "'");
    $image = $get_images->fetch_all(MYSQLI_ASSOC);
    echo json_encode($image);
}
if($_GET['action'] === 'add'){
    $id = md5(uniqid());
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $home = $_POST['status_home'];
    $store = $_POST['status_store'];
    $add = $conn->query("INSERT INTO products (id, name, price, category, home, store) VALUES ('$id', '$name', '$price', '$category', '$home', '$store')");
    if($add === TRUE){
        $questions = $_POST['questions'];
        foreach ($questions as $question){
            $id_question = md5(uniqid());
            $title = $question[0];
            $content = $question[1];
            $conn->query("INSERT INTO questions_product (id, id_product, title, content) VALUES ('$id_question', '$id', '$title', '$content')");
        }
        echo 1;
    }else{
        echo 0;
    }
}
if($_GET['action'] === 'delete-img'){
    $id = $_POST['id_delete'];
    $name = $_POST['name_delete'];

    $delete = $conn->query("DELETE FROM images_product WHERE id='".$id."'");
    if($delete === true){
        unlink('../../img/products/' . $name);
        echo true;
    }else{
        echo false;
    }
}
if($_GET['action'] === 'delete-product'){
    $id = $_POST['id'];
    $conn->query("DELETE FROM products WHERE id='".$id."'");
    $conn->query("DELETE FROM images_product WHERE id_product='".$id."'");
    $conn->query("DELETE FROM questions_product WHERE id_product='".$id."'");
}
if($_GET['action'] === 'save'){
    $id = trim($_POST['id']);
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $home = intval($_POST['status_home']);
    $store = intval($_POST['status_store']);
    $update = $conn->query("UPDATE products SET name='$name', price='$price', category='$category', home='$home', store='$store' WHERE id='$id'");
    if($update === TRUE){
        $questions = $_POST['questions'];
        $conn->query("DELETE FROM questions_product WHERE id_product='$id'");
        foreach ($questions as $question){
            $id_question = md5(uniqid());
            $title = $question[0];
            $content = $question[1];
            $conn->query("INSERT INTO questions_product (id, id_product, title, content) VALUES ('$id_question', '$id', '$title', '$content')");
        }
        echo 1;
    }else{
        echo 0;
    }
    echo $category . ' - ' . $home . ' - ' . $store . ' ' . $name;
}
?>