<?php 
    include '../lib/config.php';
    if(isset($_GET['delete'])){
        $id = $_POST['delete_id'];
        $desktop = $_POST['desktop'];
        $mobile = $_POST['mobile'];
        $delete = $conn->query("DELETE FROM banner_sw WHERE id='$id'");
        if($delete == true){
            unlink('../../img/banners/mobile/' . $mobile);
            unlink('../../img/banners/desktop/' . $desktop);
            echo true;
        }else{
            echo false;
        }
    }else{
        $page = $_POST['page'];
        $get = $conn->query("SELECT * FROM banner_sw WHERE page='$page'");
        $data = $get->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data);
    }
?>