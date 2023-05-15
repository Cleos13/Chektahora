<?php include '../lib/global.php'; ?>
<!doctype html>
<html lang="es-MX" prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb#">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Prueba discreta a domicilio para detección de infecciones de transmisión sexual. Con certificado ISO 9000 y COFEPRIS, médicos altamente capacitados con tecnología de punta.">
    <meta http-equiv="cache-control" content="no-cache" />
    <title>ChektAhora</title>
    <?php include 'template/favicon.php'; ?>
    <link rel="stylesheet" href="../css/app.css?update=<?php echo constant('UPDATE'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?render=6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh"></script> 
    <link rel="preconnect" href="https://www.google.com">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://www.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../css/blog.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#myModal").modal();
    });
  </script>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NNR8MBT');</script>
<!-- End Google Tag Manager -->
</head>

<body>

<!--
<div class="popup">
  <div class="popup-content">
    <span class="close">&times;</span>
    <p>Les Informamos que el próximo <b>20 de Marzo no tendremos servicio</b> para toma de muestras a domicilio ni en el laboratorio, volviendo a nuestros <b>Horarios habituales el martes 21 de marzo del 2023.</b> </p>
    <p>Lamentamos los inconvenientes y agradecemos su compresión.</p>
    <p>Atentamente <br> ChektAhora</p>
  </div>
</div>
-->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNR8MBT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Imagen Pop-up</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="../css/img/pop.jpg" alt="imagen-pop-up">
        </div>
      </div>
    </div>
  </div>

    <div class="fluid" id="home">
    <?php include 'template/header.php'; ?>

        <!--Banner Principal de Blog-->

        
        <div class="banner">
           <img src="../img/woaoooo.jpg" alt="Descripción de la imagen">
            <div class="texto-imagen">
             <h1>Nuestro BLOG</h1>
             </div>
        </div>

        <!--Final de Banner Principal de Blog-->

        <!--Inicio de 2da Sección-->

        <div class="seccion">
    <div class="imagen">
      <img src="../img/cristiano.jpg" alt="Imagen de ejemplo">
    </div>
    <div class="contenido">
      <h2>Título de la sección</h2>
      <h1>Título del blog</h1>
      <p class="fecha">Fecha de publicación: 02 de mayo de 2023</p>
      <p class="descripcion">Descripción del blog Lorem ipsum dolor sit amet, consectetur adipiscing elit <br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut <br> aliquip ex ea commodo consequat.</p>
      <a href="#" class="leer-mas">Leer más</a>
    </div>
  </div>


  <!--Fianl de 2da sección-->

  <!--Inicio de 3ra sección-->

  <div class="seccion-azul">
    <div class="titulo">
      <h2>Noticias <br> por categoría</h2>
      <div class="botones">
        <a href="#" class="boton">Botón 1</a>
        <a href="#" class="boton">Botón 2</a>
        <a href="#" class="boton">Botón 3</a>
        <a href="#" class="boton">Botón 4</a>
        <a href="#" class="boton">Botón 5</a>
        <a href="#" class="boton">Botón 6</a>
      </div>
    </div>
  </div>

  <!--Fin de 3ra seccion-->

  <!--Inicio de 4ta sección-->

  <div class="seccion">
    <div class="elemento">
      <img src="../img/cristiannn.jpg" alt="Imagen 1">
      <div class="contenido">
        <h2>Categoría del Artículo 1</h2>
        <h3>Título del Artículo 1</h3>
        <a href="#" class="boton">Leer</a>
      </div>
    </div>
    <div class="elemento">
      <img src="../img/cristiannn.jpg" alt="Imagen 2">
      <div class="contenido">
        <h2>Categoría del Artículo 2</h2>
        <h3>Título del Artículo 2</h3>
        <a href="#" class="boton">Leer</a>
      </div>
    </div>
    <div class="elemento">
      <img src="../img/cristiannn.jpg" alt="Imagen 3">
      <div class="contenido">
        <h2>Categoría del Artículo 3</h2>
        <h3>Título del Artículo 3</h3>
        <a href="#" class="boton">Leer</a>
      </div>
    </div>
  </div>

  <!--Fin de 4ta de sección-->


  <!--Inicio de 5ta seccion-->

  <section class="image-section">
  <div class="image-container">
    <img src="../img/woaoooo.jpg" alt="Descripción de la imagen">
    <h2>En ChektAhora <br> Nos preocupamos por tu  salud</h2>
  </div>
</section>

<!--Fin de la 5ta seccion-->

        <?php include 'template/footer.php'; ?>
    </div>
    <script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="../js/main/owl.carousel.min.js"></script>
    <script src="../js/pop-up.js?update=<?php echo constant('UPDATE'); ?>"></script>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html> 
