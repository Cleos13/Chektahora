<?php
include '../lib/global.php';
date_default_timezone_set("America/Mexico_City");
include 'lib/config.php';
session_start();
if (empty($_SESSION['s']) || !isset($_SESSION['s'])) {
    header('Location: api/logout');
} else {
    $id = $_SESSION['s']['i'];
    $get = $conn->query("SELECT * FROM users_backoffice WHERE id = '$id'");
    $data = $get->fetch_all(MYSQLI_ASSOC);
    if ($data[0]['type'] != 'Admin') {
        header('Location: all-orders');
    }
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="Pruebas de detección de infecciones de transmisión sexual. ChektAhora, certificación ISO 9000 y COFEPRIS, somos una empresa que se enfoca en el sector salud, brindamos atención personalizada, exámenes clínicos a domicilio, con personal médico capacitado y con instalaciones con tecnología de punta." />
    <title>Banner superior | Chektahora</title>
    <link rel="stylesheet" href="../css/app.css?update=<?php echo constant('UPDATE'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
</head>

<body class="d-flex relative">
    <?php include 'template/menu.php'; ?>
    <div class="relative" style="height: 100vh; width: 100%;padding: 20px 25px 0 0;">
        <div class="alert-purple display-none" id="alert">
            <?php
            if (isset($_GET['a'])) {
                echo '<script>
                    </script>';
                if ($_GET['a'] == 'true') {
                    echo 'Banner actualizado correctamente';
                } else if ($_GET['a'] == 'null') {
                    echo 'Sucedio un error, vuelve a intentarlo';
                } else {
                    echo 'Sucedio un error, vuelve a intentarlo';
                }
            }
            ?>
        </div>
        <?php include 'template/header-general.php'; ?>
        <div class="grid-x spaceTop">
            <div class="grid-x large-12 medium-6 small-12 text-center">
                <div class="large-6 mx-auto">
                    <h3 class="text-morado"><strong>SUBIR BANNER</strong></h3>
                    <h5 style="margin-top: 10px; margin-bottom: -5px;">Numero de caracteres (300)</h5>
                    <form action="api/updateBanner" method="POST" class="py-3 form-cupones">
                        <div class="fluid">
                            <div class="grid-x large-12">
                                <div class="grid-x large-12 medium-12 small-12">
                                    <div class="large-15 medium-12 small-12 flex-center px-1">
                                        <input type="text" name="banner_espanol" value="" placeholder="Banner español" class="" maxlength="50" required>
                                    </div>
                                    <div class="large-15 medium-12 small-12 flex-center px-1">
                                        <input type="text" name="banner_ingles" value="" placeholder="English banner" class="" maxlength="50" required>
                                    </div>
                                </div>
                                <div class="large-12 medium-12 small-12 py-1 flex-center">
                                    <button class="btn-purple text-morado" name="login" type="submit" id="add_banner" style="background: #FFEB00; margin-top: 20px;">Subir banner</button>
                                </div>
                                <div class="large-12 medium-12 small-12 py-1 flex-center mb-3">
                                    <div id="message-1" class="display-none fw-bold" style="display: flex; justify-content: center; color:#24d675b5!important; font-size: 12px; font-weight: 600;">El banner se ha creado correctamente.</div>
                                </div>
                                <div class="large-12 medium-12 small-12 py-1 flex-center mb-3">
                                    <div id="message-2" class="display-none fw-bold" style="display: flex; justify-content: center; color:#ee4747b4!important; font-size: 14px; font-weight: 700;">Hubo un error al crear el banner</div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="cell text-center py-1 absolute" style="background-color:#4F2D83; bottom: 0;">
            <div class="text-white">current text: <span class="fw-bold"><?php echo $data_banner[0]['banner_ingles'] ?></span></div>
        </div>
        <div class="cell text-center py-1 absolute" style="background-color:#4F2D83; bottom: 50px;">
            <div class="text-white">Texto actual: <span class="fw-bold"><?php echo $data_banner[0]['banner_espanol'] ?></span></div>
        </div>
    </div>
    <script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="../js/main/backoffice/coupon.min.js?v=<?php echo constant('VERSION'); ?>"></script>
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