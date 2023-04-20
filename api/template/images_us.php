<?php
    function getImgName($name){
        global $conn;
        $get = $conn->query("SELECT img FROM images_us WHERE name='$name'");
        $data = $get->fetch_assoc();
        return $data['img'];
    }
    function getImgPost(){
        global $conn;
        $get = $conn->query("SELECT img FROM images_us WHERE name='post'");
        return $get->fetch_all(MYSQLI_ASSOC);
    }
?>