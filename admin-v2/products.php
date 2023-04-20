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
    <meta http-equiv="cache-control" content="no-cache"/>
    <title>Productos | Chektahora</title>
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
    <div>
        <div class="text-center mb-6 d-flex justify-content-around">
            <h3 class="fw-bold">Productos ChektAhora</h3>
            <button class="btn-products px-3" open-pop-n>Agregar un nuevo producto</button>
        </div>
        <div style="width: 95%; margin: auto; height: 600px; overflow-y: auto; border-radius: 18px">
            <table style="padding-top: 250px; border-radius: 10px">
                <thead style="height: 50px; background-color: #4F2D83; color: #fff">
                <th style="width: 350px; padding: 10px 10px;">Nombre</th>
                <th style="width: 100px; padding: 10px 10px;">Precio</th>
                <th style="width: 100px; padding: 10px 10px;">Categoria</th>
                <th style="width: 150px; padding: 10px 10px;">Página home</th>
                <th style="width: 150px; padding: 10px 10px;">Tienda</th>
                <th style="width: 150px;"></th>
                <th style="width: 150px;"></th>
                </thead>
                <tbody id="products"></tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'template/modals/products.html'; ?>


<script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
<script src="../js/main/backoffice/products.min.js?v=<?php echo constant('VERSION'); ?>"></script>
</body>

</html>