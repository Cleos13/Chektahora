<?php 
    include '../lib/config.php';
    global $conn;
    if(isset($_GET['id'])){
        if($_GET['id'] === 'post'){
            $id = md5(uniqid());
        }else{
            $id = $_GET['id'];
        }

        $name_desktop   = $_FILES['desktop']["name"];
        $fileIMG_desktop = time() . basename($name_desktop);
        $img_desktop = $fileIMG_desktop;
        $moveDesktop = "../../img/us/" . $fileIMG_desktop;
        if(move_uploaded_file($_FILES['desktop']["tmp_name"], $moveDesktop)){
            if($_GET['id'] === 'post'){
                $add = $conn->query("INSERT INTO images_us (id, img, name) VALUES ('$id','$img_desktop', 'post')");
            }else{
                $add = $conn->query("UPDATE images_us SET img='$img_desktop' WHERE id = '$id'");
            }
            $conn->close();
            if($add === TRUE){
                echo 1;
            }else{
                echo 0;
            }
        }else{
            echo 0;
        }
    }

    if(isset($_GET['delete'])){
        $id = $_POST['id_delete'];
        $name = $_POST['name_delete'];

        $delete = $conn->query("DELETE FROM images_us WHERE id='$id'");
        if($delete === true){
            unlink('../../img/us/' . $name);
            echo true;
        }else{
            echo false;
        }
    }

?>