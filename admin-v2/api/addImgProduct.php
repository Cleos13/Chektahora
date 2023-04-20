<?php 
    include '../lib/config.php';
    global $conn;
    if(isset($_GET['id_product'])){
        $id = md5(uniqid());
        $id_product = $_GET['id_product'];
        $name_desktop   = $_FILES['desktop']["name"];
        $size_desktop = $_FILES['desktop']['size'];
        $fileIMG_desktop = time() . basename($name_desktop);
        $img_desktop = $fileIMG_desktop;
        $moveDesktop = "../../img/products/" . $fileIMG_desktop;
        @move_uploaded_file($_FILES['desktop']["tmp_name"], $moveDesktop);
        $add = $conn->query("INSERT INTO images_product (id, id_product, img) VALUES ('$id','$id_product','$img_desktop')");
        $conn->close();
        if($add === TRUE){
            echo true;
        }else{
            echo false;
        }
    }

?>