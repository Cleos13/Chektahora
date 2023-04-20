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
    if ($data[0]['type'] != 'Admin' && $data[0]['type'] != 'Customers') {
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
    <title>Crear cupón | Chektahora</title>
    <link rel="stylesheet" href="../css/app.css?update=<?php echo constant('UPDATE'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
</head>

<body class="d-flex relative">
    <?php include 'template/menu.php'; ?>
    <div class="" style="height: 100vh; width: 100%;padding: 20px 25px;">
        <?php include 'template/header-general.php'; ?>
        <div class="grid-x d-flex justify-content-center align-height-center" style="margin-top: 60px;">
            <div class="large-10 medium-6 small-12 text-center">
                <h3 class="text-morado"><strong>CREA UN NUEVO CUPÓN</strong></h3>
                <form action="" class="grid-x d-flex justify-content-center align-height-center form-cupones">
                    <div class="grid-x large-12 small-12 py-1">
                        <div class="large-6 small-12 px-1">
                            <input type="text" id="cupon" value="" placeholder="Nombre del cupón" class="" maxlength="25">
                        </div>
                        <div class="large-6 small-12 px-1">
                            <input type="text" id="confirmar-cupon" value="" placeholder="Repite el nombre del cupón" class="" maxlength="25">
                        </div>
                    </div>
                    <div class="grid-x large-12 small-12 py-1">
                        <div class="large-4 small-12 px-1">
                            <select id="pagina" class="" style="color: #4F2D83 !important; padding-left: 20px;">
                                <option selected disabled>Pagina</option>
                                <option value="Chektahora">Chektahora</option>
                                <option value="Inmunocheck">Inmunocheck</option>
                            </select>
                        </div>
                        <div class="large-4 small-12 px-1">
                            <select id="tipo_cupon" class="" style="color: #4F2D83 !important; padding-left: 20px;" disabled value="">
                                <option disabled selected>Aplica a</option>
                                <!-- <option space="" value="Producto">Producto</option>
                            <option space="" value="Categoria">Categoria</option> -->
                            </select>
                        </div>
                        <div class="large-4 small-12 px-1">
                            <select id="aplica" class="" style="color: #4F2D83 !important; padding-left: 20px;" disabled>
                                <option selected disabled>Selecciona</option>
                                <!-- <option space="" value="Producto">Producto</option>
                            <option space="" value="Categoria">Categoria</option> -->
                            </select>
                        </div>
                    </div>
                    <div class="grid-x large-12 small-12 py-1" id="opciones-cupon">
                        <div class="large-4 medium-12 small-12 flex-center px-1">
                            <input type="text" class="input" id="vencimiento" placeholder="Fecha de vencimiento" required="">
                        </div>
                        <div class="large-4 medium-12 small-12 flex-center px-1">
                            <select id="tipo-descuento" aria-label="Tipo de descuento" class="" style="color: #4F2D83 !important; padding-left: 20px;">
                                <option value="Cantidad" select>Cantidad</option>
                                <option value="Porcentaje">Porcentaje</option>
                            </select>
                        </div>
                        <div class="large-4 medium-12 small-12 flex-center px-1">
                            <input type="text" id="cantidad" value="" placeholder="Cantidad ej. 300" class="">
                            <input type="text" id="porcentaje" value="" placeholder="Porciento ej. 10" class="display-none ">
                        </div>
                    </div>
                    <div id="message-1" class="display-none fw-bold" style="display: flex; justify-content: center; background-color:#24d675b5!important; font-size: 18px; font-weight: 500; padding: 10px 30px; color: #fff;">Cupón creado correctamente</div>
                    <div id="message-2" class="display-none fw-bold" style="display: flex; justify-content: center; background-color:#ee4747b4!important; font-size: 18px; font-weight: 500; padding: 10px 30px; color: #fff;">Hubo un error, vuelve a intentarlo</div>
                    <div class="grid-x large-12 small-12 flex-center py-3">
                        <a class="btn-save" id="crear-cupon" style="padding: 10px 20px;">Crear cupon</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="../js/main/backoffice/coupon.min.js?v=<?php echo constant('VERSION'); ?>"></script>
    <?php
    if (isset($_GET['a'])) {
        echo '
            <script>
            $("#message-1").removeClass("display-none");
            setTimeout(function(){
                $("#message-1").addClass("display-none");
            },4000)
            </script>';
    }
    if (isset($_GET['s'])) {
        if ($_GET['s'] == 'true') {
            echo '
                <script>
                $("#message-2").removeClass("display-none");
                setTimeout(function(){
                    $("#message-2").addClass("display-none");
                },5000)
                </script>';
        }
    }
    ?>
</body>

</html>