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
            <input type="text" id="producto" name="producto" value="KIT VPH  $2,620 MXN" readonly>

           
             <!-- Cambia el campo de precio a un elemento <span> -->

            <label style="padding-top: 30px;" for="fuente">¿Cómo nos encontraste?</label>
            <div id="opciones">
                <input type="radio" id="busqueda" name="fuente" value="Motores de Búsqueda">
                <label for="busqueda">Por Motores de Búsqueda.</label><br>
                <input type="radio" id="redesSociales" name="fuente" value="Redes Sociales">
                <label for="redesSociales">Por Redes Sociales.</label><br>
                <input type="radio" id="asesorComercial" name="fuente" value="Cuento con asesor Comercial">
                <label for="asesorComercial">Cuento con Asesor Comercial.</label>
            </div>

            <input type="submit" value="Comprar">
        </form>
    </div>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $direccion = $_POST["direccion"];
        $codigoPostal = $_POST["codigoPostal"];
        $producto = $_POST["producto"];
        $precio = $_POST["precio"];
        $fuente = $_POST["fuente"]; // Nueva variable para la fuente

        // Direcciones de correo a las que se enviará la información (separadas por coma)
        $to = "marketing.team@chektahora.com, jaqueline.bernal@chektahora.com, cristian.leos@chektahora.com";
        $subject = "Nueva compra";
        $message = "Nombre: $nombre\n";
        $message .= "Correo Electrónico: $email\n";
        $message .= "Número Telefónico: $telefono\n";
        $message .= "Dirección: $direccion\n";
        $message .= "Código Postal: $codigoPostal\n";
        $message .= "Producto Comprado: $producto\n";
        $message .= "Precio: $precio\n";
        $message .= "¿Cómo nos encontraste?: $fuente\n"; // Agregar la fuente al mensaje

        // Envía el correo a las direcciones especificadas
        mail($to, $subject, $message);

        // Redirecciona al usuario a la página de pago
        header("Location: https://mpago.la/27SVv8K");
        exit();
    }
    ?>


</body>

</html>