<?php 
    function getBanners($page){
        global $conn;
        $get = $conn->query("SELECT * FROM banner_sw WHERE page='$page'");
        $data = $get->fetch_all(MYSQLI_ASSOC);
        return $data;
    }
?>