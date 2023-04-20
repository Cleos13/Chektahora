<?php 
session_start();
if(!empty($_SESSION['s'])){
    header('Location: index');
}else{
    session_unset(); 
    session_destroy(); 
}
?>
<!doctype html>
<html class="no-js" lang="es">

<head>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NNR8MBT');</script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="Pruebas de detección de infecciones de transmisión sexual. ChektAhora, certificación ISO 9000 y COFEPRIS, somos una empresa que se enfoca en el sector salud, brindamos atención personalizada, exámenes clínicos a domicilio, con personal médico capacitado y con instalaciones con tecnología de punta.">
    <meta http-equiv="cache-control" content="no-cache" />
    <title>Chektahora</title>
    <link rel="stylesheet" href="../css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?render=6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh"></script>
    <link rel="preconnect" href="https://www.google.com">
    <link rel="preconnect" href="https://www.gstatic.com" crossorigin>
</head>
<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNR8MBT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <div class="fluid formulariosDashboard">
        <div class="grid-x">
            <div class="cell text-center">
                <div class="top-bar stacked-for-medium spaceX">
                    <div class="top-bar-title">
                        <a href="../index">
                            <img src="../css/img/logoChektahora.svg" width="200px">
                        </a>
                    </div>
                </div>
            </div>
            <div class="cell spaceSection formularios">
                <div class="grid-x form-login">
                    <div class="large-6 medium-6 small-12 grid-padding-x align-self-middle text-center">
                        <h1><strong>INGRESA A TU CUENTA</strong></h1>
                        <form action="api/verify.php" method="POST" class="py-3">
                            <div class="fluid">
                                <div class="grid-x">
                                    <div class="large-12 medium-12 small-12 flex-center">
                                        <input type="text" name="email" value="" placeholder="Correo Electrónico" class="">
                                    </div>
                                    <div class="large-12 medium-12 small-12 flex-center">
                                        <input type="password" name="password" value="" placeholder="Contraseña" class="">
                                    </div>
                                    <div class="large-12 medium-12 small-12 py-1 flex-center">
                                        <a class="btn-purple" name="login">Ingresar</a>
                                    </div>
                                    <div class="large-12 medium-12 small-12 py-1 flex-center mb-3">
                                        <div id="message" class="display-none" style="display: flex; justify-content: center; color:#ee4747b4!important; font-size: 12px;">
                                        <?php 
                                            if(isset($_GET['a'])){
                                                if($_GET['a'] == 'null'){
                                                    echo 'Los campos son obligatorios';
                                                }else if($_GET['a'] == 'user'){
                                                    echo 'El usuario no existe o el correo es incorrecto';
                                                }else if($_GET['a'] == 'password'){
                                                    echo 'La contraseña es incorrecta';
                                                }
    
                                            }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/main.min.js?v=00001"></script>
    <script src="../js/login-back.js"></script>
    <?php 
        if(isset($_GET['a'])){
            echo '
            <script>
            console.log("entra");
            $("#message").removeClass("display-none");
            setTimeout(function(){
                $("#message").addClass("display-none");
            },4000)
            </script>';
        }
    ?>
<script>
</script>
</body>

</html>