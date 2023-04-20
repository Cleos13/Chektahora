<?php
date_default_timezone_set("America/Mexico_City");
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
    <meta name="viewport" content="Pruebas de detección de infecciones de transmisión sexual. ChektAhora, certificación ISO 9000 y COFEPRIS, somos una empresa que se enfoca en el sector salud, brindamos atención personalizada, exámenes clínicos a domicilio, con personal médico capacitado y con instalaciones con tecnología de punta.>
    <meta http-equiv="cache-control" content="no-cache" />
    <title>Inicio | Chektahora </title>
    <link rel="stylesheet" href="../css/app.css?update=<?php echo constant('UPDATE'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>

<body class="d-flex relative">
    <?php include 'template/menu.php'; ?>
    <div style="height: 100vh; width: 100%; background-color: #fff; z-index: 99; padding: 20px 35px;">
        <!-- Header -->
        <?php include 'template/header-general.php'; ?>
        <div class="alert-purple display-none" id="alert">
            <?php
            if (isset($_GET['a'])) {
                if ($_GET['a'] == 'false') {
                    echo 'No existen registros en el rango seleccionado';
                }
            }
            ?>
        </div>
        <!-- Title -->
        <div class="d-flex align-height-center header-all-order">
            <button class="d-flex align-height-center button-all-order">
                <div class="d-flex align-height-center flex-col" style="margin-left: 20px;">
                    <div style="width: 100%; font-size: 12px; margin-top: 10px;" class="text-start">Fecha</div>
                    <input name="daterange" value="General" class="text-start fw-bold select-date" id="date-orders" date-start="" date-end="">
                    <!-- <select style="width: 150px;" placeholder="Selecciona" value="Selecciona" class="text-start fw-bold select-date" id="date-orders">
                        <option value="" selected disabled>Selecciona</option>
                        <option value="">General</option> -->
                    <?php
                    /* $today = strtotime(date('d-m-Y'));
                            $start = strtotime('06-04-2022');
                            for($i = $today; $i >= $start; $i-=86400){
                                echo '<option value="'. date('d/m/Y', $i) .'">'. date('d/m/Y', $i) .'</option>';
                            } */
                    ?>
                    <!-- </select> -->
                </div>
                <div class="d-flex align-height-center justify-content-center img-select">
                    <img src="../css/img/backoffice/chektahora-iso-white.svg" alt="" width="20px;" style="margin-right: 3px;">
                </div>
            </button>
            <div class="d-flex buttons-download">
                <button class="d-flex justify-content-center align-height-center" id="download-general" style="cursor: pointer; width: 200px; height: 50px; background-color: #FFEB00; border-radius: 20px; box-shadow: 2px 3px 4px rgb(0 0 0 / 21%); font-size: 14px; margin-right: 10px">
                    Reporte general
                </button>
                <button class="d-flex justify-content-center align-height-center" id="download-pay" style="cursor: pointer; width: 250px; height: 50px; background-color: #FFEB00; border-radius: 20px; box-shadow: 2px 3px 4px rgb(0 0 0 / 21%); font-size: 14px; margin-left: 10px">
                    Descargar pasarela actual
                </button>
            </div>
        </div>
        <!-- Table data -->
        <div class="table-data-all">
            <table>
                <thead>
                    <tr class="head-pay">
                        <th class="t-conekta">
                            <button class="active">
                                Clientes de Conekta
                            </button>
                        </th>
                        <th class="t-rappi">
                            <button>
                                Clientes de Rappi
                            </button>
                        </th>
                        <th class="t-stripe">
                            <button>
                                Clientes de Stripe
                            </button>
                        </th>
                        <th class="t-search relative">
                            <input class="search-data">
                            <span class="absolute d-flex align-height-center" style="height: 50%; right: 20px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </span>
                        </th>
                    </tr>
                    <tr class="title-data">
                        <th class="px-3">#</th>
                        <th class="t-name">Cliente</th>
                        <th class="t-date">Fecha y hora</th>
                        <th class="t-estatus">Estado</th>
                        <th class="t-products">Productos</th>
                        <th class="t-estatus-control">Estatus</th>
                        <th class="t-icon">Ver</th>
                    </tr>
                </thead>
                <tbody id="orders"></tbody>
            </table>
        </div>
    </div>
    <?php include 'template/shadow-order.php'; ?>
    <script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script>
        const url = 'all';
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