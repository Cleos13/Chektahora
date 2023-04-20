<?php 
    include '../lib/config.php';
    if(isset($_GET['page'])){
        $id = md5(uniqid());
        $page = $_GET['page'];
        $name_mobile   = $_FILES['mobile']["name"];
        $name_desktop   = $_FILES['desktop']["name"];
        $size_mobile = $_FILES['mobile']['size'];
        $size_desktop = $_FILES['desktop']['size'];
        $fileIMG_mobile = time() . basename($name_mobile);
        $fileIMG_desktop = time() . basename($name_desktop);
        $img_mobile = $fileIMG_mobile;
        $img_desktop = $fileIMG_desktop;
        $moveMobile = "../../img/banners/mobile/" . $fileIMG_mobile;
        $moveDesktop = "../../img/banners/desktop/" . $fileIMG_desktop;
        @move_uploaded_file($_FILES['mobile']["tmp_name"], $moveMobile);
        @move_uploaded_file($_FILES['desktop']["tmp_name"], $moveDesktop);
        $add = $conn->query("INSERT INTO banner_sw (id, img_desktop, img_mobile, page) VALUES ('$id','$img_desktop', '$img_mobile', '$page')");
        $conn->close();
        if($add == TRUE){
            echo true;
        }else{
            echo false;
        }
    }

?>