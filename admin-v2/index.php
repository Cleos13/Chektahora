<?php
include '../lib/global.php';
include 'lib/config.php';
global $conn;
session_start();
if (empty($_SESSION['s']) || !isset($_SESSION['s'])) {
    header('Location: api/logout');
} else {
    $id = $_SESSION['s']['i'];
    $get = $conn->query("SELECT * FROM users_backoffice WHERE id = '$id'");
    $data = $get->fetch_all(MYSQLI_ASSOC);
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
    <title>Inicio | Chektahora </title>
    <link rel="stylesheet" href="../css/app.css?update=<?php echo constant('UPDATE'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&display=swap" rel="stylesheet">
</head>

<body class="d-flex relative">
    <?php include 'template/menu.php'; ?>
    <div style="height: 100vh; width: 100%; background-color: #fff; z-index: 99; padding: 20px 25px;">
        <div class="alert-purple display-none" id="alert">
            <?php
            if (isset($_GET['a'])) {
                if ($_GET['a'] == 'false') {
                    echo 'No existen registros en el rango seleccionado';
                }
            }
            ?>
        </div>
        <div class="icon-mobile justify-content-center align-height-center">
            <div>
                <img src="../css/img/blog/chektahora-iso.svg" alt="" width="50px">
            </div>
        </div>
        <!-- Header -->
        <div class="d-flex space-change-user">
            <button class="d-flex align-height-center btn-change-user">
                <div class="d-flex align-height-center justify-content-center icon">
                    <img src="../css/img/backoffice/chektahora-iso-white.svg" alt="" width="20px;" style="margin-right: 3px;">
                </div>
                <div class="d-flex align-height-center" style="margin-left: 20px;">
                    Cliente ChektAhora
                </div>
                <div>
                    <img src="../css/img/backoffice/arrow.png" alt="" width="15px;" class="arrow">
                </div>
            </button>
        </div>
        <!-- Title -->
        <div class="d-flex align-height-center title-order">
            <div>
                <div style="font-size: 30px; font-weight: bold">Vision General</div>
                <div style="font-size: 20px;">Actividad reciente</div>
            </div>
            <a href="all-orders" class="d-flex justify-content-center align-height-center btn-all-order">
                Ver todos los movimientos
            </a>
        </div>
        <!-- Table data -->
        <div class="table-data">
            <table>
                <tbody id="orders"></tbody>
            </table>
        </div>
    </div>
    <?php include 'template/shadow-order.php'; ?>
    <script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script>
        const url = 'general';
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="../js/main/backoffice/data.min.js?v=<?php echo constant('VERSION'); ?>"></script>
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