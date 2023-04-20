<?php 
if(isset($_POST['set_products']) && isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['conoce']) && isset($_POST['sexo'])){
    session_start();
    $_SESSION['id'] = $_POST['id']; //ID COMPRA
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['tel'] = $_POST['tel'];
    $_SESSION['its'] = $_POST['its']; //Es opcional, puede ser vacio
    $_SESSION['conoce'] = $_POST['conoce'];
    $_SESSION['sexo'] = $_POST['sexo'];
    $_SESSION['street'] = $_POST['street'];
    $_SESSION['municipality'] = $_POST['municipality'];
    $_SESSION['cp'] = $_POST['cp'];
    $_SESSION['suburb'] = $_POST['suburb']; //Colonia
    $_SESSION['state'] = $_POST['state'];
    $_SESSION['no_int'] = $_POST['no_int'];
    $_SESSION['no_ext'] = $_POST['no_ext'];
    $_SESSION['date'] = $_POST['date'];
    $_SESSION['cupon'] = $_POST['coupon'];
    $_SESSION['products'] = json_decode($_POST['set_products']);
    //echo $_SESSION['products'];
}
?>
