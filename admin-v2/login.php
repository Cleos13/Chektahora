<?php
include '../lib/global.php';
session_start();
if (!empty($_SESSION['s'])) {
    header('Location: index');
} else {
    session_unset();
    session_destroy();
}
?>
<!doctype html>
<html class="no-js" lang="es">

<head>
     <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-473769696"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-473769696');
</script>
<!-- Event snippet for Website sale conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-473769696/nCrHCJTlrs4DEODN9OEB',
      'transaction_id': ''
  });
</script>
<!-- Event snippet for Website sale conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-473769696/nCrHCJTlrs4DEODN9OEB',
      'transaction_id': ''
  });
</script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="Pruebas de detección de infecciones de transmisión sexual. ChektAhora, certificación ISO 9000 y COFEPRIS, somos una empresa que se enfoca en el sector salud, brindamos atención personalizada, exámenes clínicos a domicilio, con personal médico capacitado y con instalaciones con tecnología de punta.">
    <meta http-equiv="cache-control" content="no-cache" />
    <title>Chektahora</title>
    <link rel="stylesheet" href="../css/app.css?update=<?php echo constant('UPDATE'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?render=6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh"></script>
</head>

<body class="grid-x cell large-12 small-12 relative" style="height: 100vh;">
    <div class="alert-purple display-none" id="alert">
        <?php
        if (isset($_GET['a'])) {
            if ($_GET['a'] == 'null') {
                echo 'Los campos son obligatorios';
            } else if ($_GET['a'] == 'user') {
                echo 'El usuario no existe o el correo es incorrecto';
            } else if ($_GET['a'] == 'password') {
                echo 'La contraseña es incorrecta';
            }
        }
        ?>
    </div>
    <div class="large-7" style="background-image: url(../css/img/backoffice/login.png); background-size: cover;"></div>
    <div class="large-5 small-12 flex-center align-height-center bg-login">
        <div class="login">
            <div class="flex-center align-height-center logo">
                <img src="../css/img/blog/chektahora-iso.svg">
            </div>
            <div class="text-center">
                <h6 class="fw-bold">Bienvenido a nuestro sistema</h6>
                <p style="font-size: 15px;">Ingresa con tu cuenta y contraseña</p>
            </div>
            <div class="form">
                <div class="flex-center mx-auto input">
                    <span class="icon">
                        <img src="../css/img/backoffice/user.png" alt="">
                    </span>
                    <input type="text" name="email" placeholder="Usuario">
                </div>
                <div class="flex-center mx-auto input">
                    <span class="icon">
                        <img src="../css/img/backoffice/password.png" alt="">
                    </span>
                    <input type="password" name="password" placeholder="Contraseña">
                </div>
                <div class="flex-center btn">
                    <button id="login">Ingresar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="../js/main/backoffice/login.min.js?v=<?php echo constant('UPDATE'); ?>"></script>
    <?php
    if (isset($_GET['a'])) {
        echo '<script>
                    $("#alert").removeClass("display-none");
                    setTimeout(function(){
                        $("#alert").addClass("display-none");
                    }, 4000)
                </script>';
    }
    ?>
</body>

</html>