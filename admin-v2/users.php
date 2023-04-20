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
    <meta http-equiv="cache-control" content="no-cache" />
    <title>Crear cupón | Chektahora</title>
    <link rel="stylesheet" href="../css/app.css?update=<?php echo constant('UPDATE'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
    <style>
        ._03:not(old)+label {
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        ._03:not(old)+label:before {
            content: '';
            width: 22px;
            height: 22px;
            background-size: cover;
            border-radius: 10px;
            cursor: pointer;
            vertical-align: top;
            display: inline-block;
            margin-right: 5px;
            position: absolute;
            right: 15px;
        }

        .access_user {
            position: relative;
            display: block;
            font-weight: bold;
            cursor: pointer;
            text-align: center;
            background-color: #E7E3EE !important;
            transition: background-color .15s ease-in-out;
            background-color: white;
            height: 40px;
            margin: 9px 10px !important;
        }

        .access_user:hover {
            background-color: #4F2D83 !important;
            color: #fff !important;
        }

        .input_access_user:checked+label {
            background-color: #4F2D83 !important;
            color: #fff !important;
        }

        .input_access_user {
            display: none;
        }
    </style>
</head>

<body class="d-flex relative">
    <?php include 'template/menu.php'; ?>
    <div class="alert-purple display-none" id="alert">
        <?php
        if (isset($_GET['a'])) {
            echo '<script>
                    </script>';
            if ($_GET['a'] == 'true') {
                echo 'Usuario creado correctamente';
            } else if ($_GET['a'] == 'null') {
                echo 'Todos los campos son obligatorios';
            } else {
                echo 'Sucedio un error, vuelve a intentarlo';
            }
        }
        ?>
    </div>
    <div class="" style="height: 100vh; width: 100%;padding: 20px 25px;">
        <?php include 'template/header-general.php'; ?>
        <div class="grid-x d-flex justify-content-center align-height-center" style="margin-top: 60px;">
            <div class="large-9 medium-6 small-12 text-center">
                <h3 class="text-morado"><strong>CREA UN NUEVO USUARIO</strong></h3>
                <form action="api/add.php" method="POST" class="form-cupones">
                    <div class="fluid">
                        <div class="grid-x large-12">
                            <div class="large-6 medium-12 small-12 flex-center px-1">
                                <input type="text" name="name" value="" placeholder="Nombre completo" class="large-12" required>
                            </div>
                            <div class="large-6 medium-12 small-12 flex-center px-1">
                                <input type="text" name="rol" value="" placeholder="Rol" class="large-12" required>
                            </div>
                            <div class="px-1 large-4 small-12 py-1">
                                <label class="fs-2 fw-bold required">Selecciona el cargo</label>
                            </div>
                            <div class="grid-x large-12 medium-12 small-12">
                                <div class="large-4 medium-12 small-12 flex-center px-1">
                                    <select name="type" aria-label="Categoria relacionada 2" required class="" style="color: #4F2D83 !important; padding-left: 20px;">
                                        <option value="Customers">Customers</option>
                                        <option value="Logistics">Logistica</option>
                                        <option value="Admin">Administrador</option>
                                    </select>
                                </div>
                                <div class="large-8 medium-12 small-12 flex-center px-1">
                                    <input type="text" name="email" value="" placeholder="Correo electronico" class="" required>
                                </div>
                            </div>
                            <div class="grid-x large-12 medium-12 small-12">
                                <div class="large-6 medium-12 small-12 flex-center px-1">
                                    <input type="password" name="password" value="" placeholder="Contraseña" class="" required>
                                </div>
                                <div class="large-6 medium-12 small-12 flex-center px-1">
                                    <input type="password" name="password-confirm" value="" placeholder="Confirma la contraseña" class="" required>
                                </div>
                            </div>
                            <div class="large-12 medium-12 small-12 py-3 flex-center">
                                <button class="btn-save" name="register-user" style="padding: 15px 20px;">Registrar usuario</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
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