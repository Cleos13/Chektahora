<?php 
    include '../lib/config.php';
    date_default_timezone_set("America/Mexico_City");
    if($_GET['get'] == 'orders'){
        if(isset($_GET['type'])){
            $type = $_GET['type'];
            if($_POST['date'] != ''){
                $date = $_POST['date'];
                $date_start = strtotime(str_replace('/', '-', $date[0]));
                $date_end = strtotime(str_replace('/', '-', $date[1]));
                $get = $conn->query("SELECT * FROM its WHERE time_pago >= '$date_start' AND time_pago < '$date_end' AND estatus_pay = 1 AND type_pay = '$type' ORDER BY orden DESC");
            }else{
                $get = $conn->query("SELECT * FROM its WHERE estatus_pay = 1 AND type_pay = '$type' ORDER BY orden DESC");
            }
            $data = $get->fetch_all(MYSQLI_ASSOC);
            echo json_encode($data);
        }else{
            $get = $conn->query("SELECT * FROM its WHERE estatus_pay = 1 ORDER BY orden DESC");
            $data = $get->fetch_all(MYSQLI_ASSOC);
            echo json_encode($data);
        }
    }
    if($_GET['get'] == 'products'){
        $get = $conn->query("SELECT * FROM productos_orden ORDER BY id");
        $data = $get->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data);
    }

    if($_GET['get'] == 'data_user'){
        $id = $_POST['id'];
        $get = $conn->query("SELECT * FROM its WHERE ID = '$id'");
        $data['data'] = $get->fetch_all(MYSQLI_ASSOC);
        $get_p = $conn->query("SELECT * FROM productos_orden WHERE id = '$id'");
        $data_p = $get_p->fetch_all(MYSQLI_ASSOC);
        $data['products'] = $data_p;
        echo json_encode($data);
    }
    if($_GET['get'] == 'products_user'){
        $id = $_POST['id'];
        $get_p = $conn->query("SELECT * FROM productos_orden WHERE id = '$id'");
        $data_p = $get_p->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data_p);
    }
    if($_GET['get'] == 'people_plus'){
        $id = $_POST['id'];
        $get_p = $conn->query("SELECT * FROM personas_extras WHERE id = '$id'");
        $data_p = $get_p->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data_p);
    }
    if($_GET['get'] == 'update'){
        $type = $_GET['type'];
        $id = $_POST['ref'];
        if($type == 'logistica'){
            $add = $conn->query("UPDATE its SET estatus_logistica = 1 WHERE id='$id'");
        }
        if($type == 'customer'){
            $add = $conn->query("UPDATE its SET estatus_customer = 1 WHERE id='$id'");
        }
        if($add == TRUE){
           echo true;
        }else{
            echo false;
        }
    }

?>