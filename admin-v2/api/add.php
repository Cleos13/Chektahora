<?php 
include '../lib/db.php';
$db = new DB();
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['type']) && isset($_POST['password']) && isset($_POST['password-confirm'])){
        $id = md5(uniqid());
        $name = $_POST['name'];
        $email = $_POST['email'];
        $type = $_POST['type'];
        $rol = $_POST['rol'];
        $password = trim($_POST['password']);
        $password_c = trim($_POST['password-confirm']);
        $password_h = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]); 

        $get = $db->connect()->prepare("SELECT * FROM users_backoffice WHERE email=:e");
        $get->bindParam(':e', $email);
        $get->execute();
        $row = $get->fetch(PDO::FETCH_OBJ);
        if($row != NULL){
            header('Location: ../users?a=one');
        }else{
            if($password === $password_c){
                $add = $db->connect()->prepare('INSERT INTO users_backoffice (id, name, email, password, type, rol) VALUES (:a, :b, :c, :d, :e, :f)');
                $add -> bindParam(':a', $id);
                $add -> bindParam(':b', $name); 
                $add -> bindParam(':c', $email); 
                $add -> bindParam(':d', $password_h); 
                $add -> bindParam(':e', $type); 
                $add -> bindParam(':f', $rol); 
                $add -> execute();
                if($add == TRUE){
                    header('Location: ../users?a=true');
                }else{
                    header('Location: ../users?a=false');
                }
            }else{
                header('Location: ../users?a=password');
            }
        }

    }else{
        header('Location: ../users?a=null');
    }
?>