<?php include '../lib/global.php'; ?>
<!doctype html>
<html lang="es-MX" prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb#">

<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $meta_description ?>">
  <meta http-equiv="cache-control" content="no-cache" />
  <title><?php echo $meta_title ?></title>
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
</head>

<body class="article">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNR8MBT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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

    <!--Titulo Blog-->
    <div class="article__container">

      <div class="cell spaceTop relative">
        <div class="item">
          <img src="<?php echo $banenrDesktop ?>" class="hide-for-small-only show-for-medium" alt="" width="100%" carousel="img-1">
          <img src="<?php echo $banenrMobile ?>" class="hide-for-medium show-for-small" alt="" width="100%" carousel="img-1">
        </div>
      </div>
      <!-- Banners page -->
      <div class="article__title">
        <h1 class="morado"><?php echo $title ?></h1>
      </div>
      <!--Final de Titulo Blog-->

      <div class="article__body">
        <?php echo $body ?>
      </div>

      <div class="large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection my-4 d-none">
        <h2 style="font-size: 35px;" class="morado">
          <strong>Otros artículos de interés<strong>
        </h2>
      </div>

      <!--Inicio de 4ta sección-->
      <div class="seccion d-none">
        <div class="elemento">
          <img src="../img/cristiannn.jpg" alt="Imagen 1">
          <div class="contenido">
            <h3>Preguntas frecuentes sobre Infecciones de Transmisión Sexual (ITS)</h3>
            <a href="#" class="boton">Leer</a>
          </div>
        </div>
        <div class="elemento">
          <img src="../img/cristiannn.jpg" alt="Imagen 2">
          <div class="contenido">
            <h3>Preguntas frecuentes sobre Infecciones de Transmisión Sexual (ITS)</h3>
            <a href="#" class="boton">Leer</a>
          </div>
        </div>
        <div class="elemento">
          <img src="../img/cristiannn.jpg" alt="Imagen 3">
          <div class="contenido">
            <h3>Preguntas frecuentes sobre Infecciones de Transmisión Sexual (ITS)</h3>
            <a href="#" class="boton">Leer</a>
          </div>
        </div>
      </div>
      <!--Fin de 4ta de sección-->

    </div>
    <!--Inicio de 5ta seccion-->
    <section class="image-section d-none">
      <div class="image-container">
        <div class="text">
          <h2>En ChektAhora Nos preocupamos por tu salud</h2>
        </div>
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