<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario de Compra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('../css/img/Wallpaper de fondo.jpg');
            /* Reemplaza 'ruta_de_la_imagen.jpg' con la URL de tu imagen de fondo */
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #formularioCompra {
            width: 80%;
            /* Ajusta el ancho del formulario */
            max-width: 400px;
            /* Establece un ancho máximo */
            margin: 0 auto;
            /* Centra horizontalmente */
            padding: 50px 50px 50px 50px;
            background-color: #fff;
            border: 3px solid #6610f2;
            /* Color morado para el borde */
            border-radius: 40px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="number"]

        /* Se agrega el campo de código postal */
            {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 30px;
            background-color: #fff;
            /* Fondo blanco */
            color: #6610f2;
            /* Color morado para el texto */
        }

        input[readonly] {
            /* Estilo para campos de solo lectura */
            background-color: #eee;
            /* Fondo gris claro para campos de solo lectura */
            color: #333;
            /* Color de texto más oscuro */
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        #logo {
            max-width: 100px;
            margin-bottom: 20px;
        }

        #titulo {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        #precio {
            padding-bottom: 30px;
            /* Estilo para el campo de precio */
            padding: 10px;
            background-color: #eee;
            /* Fondo gris claro para campos de solo lectura */
            border-radius: 5px;
            color: #333;
            /* Color de texto más oscuro */
        }

        #opciones {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <div id="formularioCompra">
        <img id="logo" src="../css/img/logoMorado.png" alt="Logo de la Empresa">
        <div id="titulo">Formulario de Pago</div>
        <form id="datosCompraForm" action="" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="telefono">Número Telefónico:</label>
            <input type="tel" id="telefono" name="telefono" required>

            <label for="direccion">Dirección:</label> <!-- Cambio de "Servicio a Pagar" a "Dirección" -->
            <input type="text" id="direccion" name="direccion" required>

            <label for="codigoPostal">Código Postal:</label> <!-- Nuevo campo para el código postal -->
            <input type="number" id="codigoPostal" name="codigoPostal" required>

            <label for="producto">Producto Comprado:</label>
            <input type="text" id="producto" name="producto" value="Prueba PCR para detección de COVID $599.00 MXN" readonly>

            <input type="submit" value="Comprar">
        </form>
    </div>


    <?php
ob_start(); // Iniciar el búfer de salida

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $codigoPostal = $_POST["codigoPostal"];
    $producto = $_POST["producto"];


    // Aquí puedes enviar el correo electrónico con los datos de la compra
    $to = "marketing.team@chektahora.com, jaqueline.bernal@chektahora.com, cristian.leos@chektahora.com";
    $subject = "Nueva compra";
    $message = "Nombre: $nombre\n";
    $message .= "Correo Electrónico: $email\n";
    $message .= "Número Telefónico: $telefono\n";
    $message .= "Dirección: $direccion\n";
    $message .= "Código Postal: $codigoPostal\n";
    $message .= "Producto Comprado: $producto\n";


    // Envía el correo a las direcciones especificadas
    mail($to, $subject, $message);

    // Redirecciona al usuario a la página de pago
    header("Location: https://mpago.la/2dWSbf6");
    exit();
}
ob_end_flush(); // Finalizar el búfer de salida
?>

  <!-- Event snippet for Vista de página de ChektAhora conversion page -->
  <script>
  gtag('event', 'conversion', {'send_to': 'AW-11048402014/zpuvCPaRvuEYEN74pJQp'});
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-473769696"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-473769696');
</script>

</body>

</html>