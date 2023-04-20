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
    <meta name="viewport" content="Pruebas de detección de infecciones de transmisión sexual. ChektAhora, certificación ISO 9000 y COFEPRIS, somos una empresa que se enfoca en el sector salud, brindamos atención personalizada, exámenes clínicos a domicilio, con personal médico capacitado y con instalaciones con tecnología de punta.">
    <meta http-equiv="cache-control" content="no-cache" />
    <title>Sistema de banners | Chektahora</title>
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
        <div class="space-banners">
            <div class="data-accordion">
                <ul class="space-accordion" data-accordion>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title">
                            <div>Sección Home</div>
                            <button add="modal" page="home">Agregar</button>
                        </a>
                        <div class="accordion-content" id="home" data-tab-content>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title">
                            <div>Sección Nosotros</div>
                            <button add="modal" page="nosotros">Agregar</button>
                        </a>
                        <div class="accordion-content" id="nosotros" data-tab-content>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title">
                            <div>Sección infección sexual</div>
                            <button add="modal" page="its">Agregar</button>
                        </a>
                        <div class="accordion-content" id="its" data-tab-content>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title">
                            <div>Sección Covid-19</div>
                            <button add="modal" page="covid">Agregar</button>
                        </a>
                        <div class="accordion-content" id="covid" data-tab-content>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title">
                            <div>Sección Clinicos</div>
                            <button add="modal" page="clinicos">Agregar</button>
                        </a>
                        <div class="accordion-content" id="clinicos" data-tab-content>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="modal" id="shadow-add-banner">
        <div class="modal-dialog">
            <header class="modal-header fw-bold text-morado relative">SUBE UN NUEVO BANNER
                <button class="absolute" style="right: 30px; top: 5px;" id="close-modal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" />
                        <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" />
                    </svg>
                </button>
            </header>
            <section class="modal-content mb-3">
                <label for="space_img_desktop" class="space_img">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" space="space_img_desktop" class="bi bi-laptop" viewBox="0 0 16 16">
                            <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
                        </svg>
                    </div>
                    <input type="file" accept=".jpg, .png, .jpeg" id="space_img_desktop">
                </label>
                <label for="space_img_mobile" class="space_img">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" space="space_img_mobile" class="bi bi-phone" viewBox="0 0 16 16">
                            <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                    </div>
                    <input type="file" accept=".jpg, .png, .jpeg" id="space_img_mobile">
                </label>
            </section>
            <div class="fs-1 text-morado px-3 mb-3">*Las dimenciones para desktop son 1552x3840 px y para mobile 1552x1164 px, con medida maxima de 1MB para no sobrecargar la web.</div>
            <footer class="modal-footer">
                <div class='spinner display-none' id="loading"></div>
                <button class="save-banner" aria-label="close modal" data-close id="add_banner">Agregar</button>
            </footer>
        </div>
        <div class="alert-banner"></div>
    </div>
    </div>
    <script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="../js/main/backoffice/banner.min.js?v=<?php echo constant('VERSION'); ?>"></script>
</body>

</html>