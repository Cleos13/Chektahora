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
    } else {
        $order = $_GET['order'];
        $get_user = $conn->query("SELECT * FROM its WHERE ID = '$order' ");
        $d = $get_user->fetch_all(MYSQLI_ASSOC);
        $data = $d[0];
        $get_products = $conn->query("SELECT * FROM productos_orden WHERE id = '$order' ");
        $data_products = $get_products->fetch_all(MYSQLI_ASSOC);
        $isset_its = 0;
        $isset_covid = 0;
        foreach ($data_products as $p) {
            if ($p['categoria'] == 'its') {
                $isset_its = true;
            }
            if ($p['categoria'] == 'covid') {
                $isset_covid = true;
            }
        }
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
    <title>Inicio | Chektahora </title>
    <link rel="stylesheet" href="../css/app.css?update=<?php echo constant('UPDATE'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body class="relative order-shadow">
    <div class="alert-purple display-none" id="alert">
        <?php
        if (isset($_GET['a'])) {
            echo '<script>
                    </script>';
            if ($_GET['a'] == 'true') {
                echo 'Información actualizada correctamente';
            } else {
                echo 'Sucedio un error, vuelve a intentarlo';
            }
        }
        ?>
    </div>
    <h3 class="info-order">Información de la orden #<?php echo $data['orden']; ?> - <?php echo $data['ID_compra']; ?></h3>
    <form action="api/updateOrder" class="grid-x space-data form-cupones" method="POST" id="form-data-user">
        <input type="hidden" name="id" value="<?php echo $data['ID']; ?>">
        <div class="large-4">
            <label for="name">Nombre completo</label>
            <input id="name" name="nombre" value="<?php echo $data['nombre']; ?>">
        </div>
        <div class="<?php echo ($isset_its == true) ? 'large-1' : 'large-2'; ?>">
            <label for="Sexo">Sexo</label>
            <input id="Sexo" name="sexo" value="<?php echo $data['sexo']; ?>">
        </div>
        <div class="large-1 <?php echo ($isset_its == true) ? '' : 'display-none'; ?>">
            <label for="Its">Its</label>
            <input id="Its" name="its" value="<?php echo $data['its']; ?>">
        </div>
        <div class="large-3">
            <label for="email">Correo electrónico</label>
            <input id="email" name="email" value="<?php echo $data['email']; ?>">
        </div>
        <div class="large-2">
            <label for="tel">Teléfono</label>
            <input id="tel" name="tel" value="<?php echo $data['tel']; ?>">
        </div>
        <div class="large-3">
            <label for="date">Fecha de nacimiento</label>
            <input id="date" name="fecha_nacimiento" value="<?php echo $data['fecha_nacimiento']; ?>">
        </div>
        <div class="large-3">
            <label for="info">¿De donde nos conoce?</label>
            <input id="info" name="conoce" value="<?php echo $data['conoce']; ?>">
        </div>
        <div class="large-5 <?php echo ($isset_covid == true) ? '' : 'display-none'; ?>">
            <label for="info-2">Medicamentos</label>
            <input id="info-2" name="medicamentos" value="<?php echo $data['medicamentos']; ?>">
        </div>
        <div class="large-3 <?php echo ($isset_covid == true) ? '' : 'display-none'; ?>">
            <label for="info-3">Sintomas</label>
            <input id="info-3" name="sintomas" value="<?php echo $data['sintomas']; ?>">
        </div>
        <div class="large-2 <?php echo ($isset_covid == true) ? '' : 'display-none'; ?>">
            <label for="info-covid-fecha">Fecha agendada</label>
            <input id="info-covid-fecha" name="fecha_covid" value="<?php echo $data['fecha_covid']; ?>">
        </div>
        <div class="large-2 <?php echo ($isset_covid == true) ? '' : 'display-none'; ?>">
            <label for="info-covid-hora">Hora agendada</label>
            <input id="info-covid-hora" name="hora_covid" value="<?php echo $data['hora_covid']; ?>">
        </div>
        <div class="<?php echo ($isset_covid == true) ? 'large-4' : 'large-5'; ?>">
            <label for="street">Calle</label>
            <input id="street" name="calle" value="<?php echo $data['calle']; ?>">
        </div>
        <div class="large-2">
            <label for="no_ext">No. Ext.</label>
            <input id="no_ext" name="no_ext" value="<?php echo $data['no_ext']; ?>">
        </div>
        <div class="large-2">
            <label for="no_int">No. Int.</label>
            <input id="no_int" name="no_int" value="<?php echo $data['no_int']; ?>">
        </div>
        <div class="large-2">
            <label for="cp">Codigo postal</label>
            <input id="cp" name="cp" value="<?php echo $data['cp']; ?>">
        </div>
        <div class="large-4">
            <label for="suburb">Colonia</label>
            <input id="suburb" name="colonia" value="<?php echo $data['colonia']; ?>">
        </div>
        <div class="large-5">
            <label for="municipality">Municipio</label>
            <input id="municipality" name="municipio" value="<?php echo $data['municipio']; ?>">
        </div>
        <div class="large-5">
            <label for="state">Estado</label>
            <input id="state" name="estado" value="<?php echo $data['estado']; ?>">
        </div>
        <div class="large-3">
            <label for="estatus_customer">Estatus customer</label>
            <select id="estatus_customer" name="estatus_customer">
                <option value="1" <?php echo ($data['estatus_customer'] == 1) ? 'selected' : ''; ?>>Datos aprobados</option>
                <option value="0" <?php echo ($data['estatus_customer'] == 0) ? 'selected' : ''; ?>>Datos no aprobados</option>
            </select>
        </div>
        </div>

        <div class="footer">
            <a href="all-orders" class="cancel-edit">
                <div class="img">
                    <img src="../css/img/backoffice/arrow-right.png" alt="">
                </div>
                <div>Volver sin modificar</div>
            </a>
            <button class="save-data display-none" id="save-data">
                Modificar
            </button>
        </div>
        <?php include 'template/shadow-order.php'; ?>
        <script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
        <script>
            const url = '';
            $('#form-data-user').on('change keyup paste', function() {
                $('#save-data').removeClass('display-none');
            })
        </script>
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