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
    <title>Cambiar imágenes sección nosotros | Chektahora</title>
    <link rel="stylesheet" href="../css/app.css?update=<?php echo constant('UPDATE'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
    <style>
        .spinner {
            margin: 20px;
            border: 4px solid rgba(0, 0, 0, 0.1);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border-left-color: #fff;
            animation: spin 1s ease infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="d-flex relative body-banner-sw">
    <?php include 'template/menu.php'; ?>
    <div class="relative" style="height: 100vh; width: 100%;padding: 20px 25px;">
        <?php include 'template/header-general.php'; ?>
        <div class="space-us">
            <div class="space-change-img">
                    <div class="img-us-1" id="imagen_1">
                        <div class="title-space">Imagen 1</div>
                        <div class="footer-space">
                            <button class="btn-change-us" change="545475394b874974add5f3eae5e0e690" name="imagen_1">CAMBIAR</button>
                        </div>
                    </div>

                <div class="img-us-1" id="imagen_2">
                    <div class="title-space">Imagen 2</div>
                    <div class="footer-space">
                        <button class="btn-change-us" change="245475394b874974add5f3eae5e0e690" name="imagen_2">CAMBIAR</button>
                    </div>
                </div>
            </div>

            <div class="space-change-img">
                <div class="img-us-2" id="realizamos">
                    <div class="title-space">Sección realizamos</div>
                    <div class="footer-space">
                        <button class="btn-change-us" change="545475394b875974add5f3eae5e0e690" name="realizamos">CAMBIAR</button>
                    </div>
                </div>

                <div class="img-us-2" id="blaine">
                    <div class="title-space">Imagen Blaine</div>
                    <div class="footer-space">
                        <button class="btn-change-us" change="345475394b874974add5f3eae5e0e680" name="blaine">CAMBIAR</button>
                    </div>
                </div>
            </div>

            <div class="space-change-img">
                <div class="img-us-2" id="rodrigo">
                    <div class="title-space">Imagen Rodrigo</div>
                    <div class="footer-space">
                        <button class="btn-change-us" change="545475394b874974add5f3eae5e0e680" name="rodrigo">CAMBIAR</button>
                    </div>
                </div>
            </div>

            <div class="space-images-post" style="position: relative !important; width: 100%;">
                <div class="data-accordion">
                    <ul class="space-accordion" data-accordion>
                        <li class="accordion-item" data-accordion-item>
                            <a href="#" class="accordion-title">
                                <div>Sección publicados en</div>
                                <button change="post" name="post">Agregar</button>
                            </a>
                            <div class="accordion-content" id="images_posts" data-tab-content aria-hidden="false" style="display: block;">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include 'template/modals/us.html'; ?>
    <script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="../js/main/backoffice/us.min.js?v=<?php echo constant('VERSION'); ?>"></script>
</body>

</html>