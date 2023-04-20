<?php
  include '../lib/db.php';
  $db = new DB();
  
    if(isset($_POST['t'])){
        $title = $_POST['t'];
        $add = $db->connect()->prepare("SELECT COUNT(`titulo`) FROM post WHERE `titulo`=:titulo");
        $add->bindParam(':titulo', $title);
        $add->execute();
        if($add->fetchColumn() == 1){
            echo '1';
        }else{
            echo '0';
        }
    }
?>