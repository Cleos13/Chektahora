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
    <title>Crear cupón | Chektahora</title>
    <link rel="stylesheet" href="../css/app.css?update=<?php echo constant('UPDATE'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
</head>

<body class="d-flex relative">
    <?php include 'template/menu.php'; ?>
    <div class="" style="height: 100vh; width: 100%;padding: 20px 25px;">
        <?php include 'template/header-general.php'; ?>
        <div class="grid-x form-login">
            <div class="grid-x large-11 small-6">
                <a class="btn-banner" action="messages" style="font-size: 10px;padding: 10px 20px;">Mensajes inmunochek</a>
            </div>
            <!-- Messages chektahora -->
            <div class="large-11 medium-11 small-12 text-center table-messages" space="messages_chektahora" style="margin-top: 30px;">
                <table>
                    <thead style="background-color: #4F2D83;color: white;">
                        <th style="width:200px;">Página</th>
                        <th style="width:200px;">Fecha</th>
                        <th style="width:200px;">Nombre</th>
                        <th style="width:200px;">Correo</th>
                        <th style="width:400px;">Mensaje</th>
                        <th style="width:200px;"></th>
                    </thead>
                    <tbody>
                        <?php
                        $get_messages = $conn->query("SELECT * FROM messages ORDER BY date");
                        $data_m = $get_messages->fetch_all(MYSQLI_ASSOC);
                        $num_m = count($data_m);
                        for ($i = 0; $i < $num_m; $i++) {
                            echo '<tr class="text-left">
                                                    <td>' . $data_m[$i]['pagina'] . '</td>
                                                    <td>' . $data_m[$i]['date'] . '</td>
                                                    <td>' . $data_m[$i]['name'] . '</td>
                                                    <td>' . $data_m[$i]['email'] . '</td>
                                                    <td>' . $data_m[$i]['text'] . '</td>
                                                    <td class="flex-center"><a class="btn-banner" href="mailto:' . $data_m[$i]['email'] . '" style="font-size: 10px;padding: 10px 20px;">Enviar email</a></td>
                                                </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- Messages business inmunochek -->
            <div class="large-12 medium-11 small-12 text-center display-none table-messages" style="margin-top: 30px;" space="messages_inmunochek">
                <table>
                    <thead style="background-color: #4F2D83;color: white;">
                        <th style="width:150px;">Fecha</th>
                        <th style="width:300px;">Nombre</th>
                        <th style="width:150px;">Teléfono</th>
                        <th style="width:200px;">Correo</th>
                        <th style="width:200px;">Organización</th>
                        <th style="width:150px;">Posición</th>
                        <th style="width:400px;">Requisitos</th>
                        <th style="width:200px;"></th>
                    </thead>
                    <tbody>
                        <?php
                        $get_messages_business = $conn->query("SELECT * FROM messages_business ORDER BY id");
                        $data_business = $get_messages_business->fetch_all(MYSQLI_ASSOC);
                        $num_business = count($data_business);
                        for ($i = 0; $i < $num_business; $i++) {
                            $moment = $data_business[$i]['moment'];
                            $new_date = date("d-m-Y", strtotime($moment));
                            echo '<tr class="text-left">
                                                <td>' . $new_date . '</td>
                                                <td>' . $data_business[$i]['name'] . '</td>
                                                <td><a class="text-morado" href="tel:' . $data_business[$i]['tel'] . '">' . $data_business[$i]['tel'] . '</a></td>
                                                <td>' . $data_business[$i]['email'] . '</td>
                                                <td>' . $data_business[$i]['business'] . '</td>
                                                <td>' . $data_business[$i]['position'] . '</td>
                                                <td>' . $data_business[$i]['description'] . '</td>
                                                <td class="flex-center"><a class="btn-banner" href="mailto:' . $data_business[$i]['email'] . '" style="font-size: 10px;padding: 10px 20px;">Enviar email</a></td>
                                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="../js/main/backoffice/messages.min.js?v=<?php echo constant('VERSION'); ?>"></script>
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