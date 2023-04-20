<?php
    include '../lib/config.php';

    if($_POST['name'] == 'all'){
        global $conn;
        $get = $conn->query("SELECT * FROM images_us");
        $data = $get->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data);
    }

    if($_POST['name'] == 'unique'){
        global $conn;
        $id = $_POST['id'];
        $get = $conn->query("SELECT img FROM images_us WHERE id = '$id'");
        $data = $get->fetch_assoc();
        return $data['img'];
    }

    if($_POST['name'] === 'posts'){
        global $conn;
        $get = $conn->query("SELECT img FROM images_us WHERE name='post'");
        return $get->fetch_all(MYSQLI_ASSOC);
    }
    if($_POST['name'] === 'posts_backoffice'){
        global $conn;
        $get = $conn->query("SELECT img FROM images_us WHERE name='post'");
        return $get->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data);
    }
