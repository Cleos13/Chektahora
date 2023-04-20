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
    <link rel="preload" as="image" href="../css/img/iconos/chktahora.png">
    <link rel="stylesheet" href="../css/app.css?update=<?php echo constant('UPDATE'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?render=6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh"></script> 
    <link rel="preconnect" href="https://www.google.com">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://www.gstatic.com" crossorigin>
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
        

        
            


  

<section class="blog-section">
  <div class="wrapper">
    <div class="blog">Blog</div>
    <div class="box">
      <img src="../img/1.jpeg" alt="Imagen 1">
      <h2>Infecciones de Transmisión Sexual (ITS): Salud y fertilidad</h2>
      <p class="date">21 de Marzo del 2023</p>
      <p class="date">Tiempo de lectura 15 mins.</p>
      <p>Las ITS han sido históricamente un problema difícil de resolver. En los últimos años se han incrementado los casos, debido principalmente al aumento de compañeros sexuales.</p>
      <button> <a href="entradauno.php">Ver más</a></button>
    </div>
    <div class="box">
      <img src="../img/2.jpeg" alt="Imagen 2">
      <h2>(ITS): Mecanismos de infección en semen</h2>
      <p class="date">22 de Marzo del 2023</p>
      <p class="date">Tiempo de lectura 15 mins.</p>
      <p>Como explicamos antes, los microorganismos pueden estar en el semen, asociarse con espermatozoides y otras células presentes en el líquido seminal, como glóbulos blancos, células epiteliales, glóbulos rojos, entre otros.</p>
      <button> <a href="entradados.php">Ver más</a></button>
    </div>
    <div class="box">
      <img src="../img/3.jpeg" alt="Imagen 3">
      <h2>(ITS):  Mecanismos de infección en semen</h2>
      <p class="date">23 de Marzo del 2023</p>
      <p class="date">Tiempo de lectura 15 mins.</p>
      <p>Como explicamos antes, los microorganismos pueden estar en el semen, asociarse con espermatozoides y otras células presentes en el líquido seminal, como glóbulos blancos, células epiteliales, glóbulos rojos, entre otros.</p>
      <button> <a href="entradatres.php">Ver más</a></button>
    </div>
  </div>
</section>


        <?php include 'template/footer.php'; ?>
    </div>
    <script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="../js/main/owl.carousel.min.js"></script>
    <script src="../js/pop-up.js?update=<?php echo constant('UPDATE'); ?>"></script>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html> 
