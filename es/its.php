<?php include '../lib/global.php'; ?>
<!doctype html>
<html lang="es-MX" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?render=6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh"></script> 
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NNR8MBT');</script>
<!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNR8MBT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="fluid">
        
        <div class="grid-x">
            <?php include 'template/header.php'; ?>
            <!-- Banners Home page -->
            <div class="cell spaceTop relative" style="margin-top: 100px; margin-bottom: -50px;">
                <?php
                include 'master/banners.php';
                $banners = getBanners('its');
                echo '<div class="owl-carousel owl-theme" id="carousel-banner">';
                /* echo '<div class="owl-carousel owl-theme" id="carousel-banner">
                        <div class="its item">
                            <div class="call">
                                <h1>Kits de infección de transmisión sexual</h1>
                                <p>Nuestros kits son privados y seguros, utilizamos la mejor tecnología PCR para proporcionar resultados altamente confiables, con amplificaciones de ácidos nucleicos del ADN con una sensibilidad mayor al 98%.
                                </p>
                                <div class="orbitBTn">
                                    <a class="btnPurple4" href="#nuestrasPruebas">KIT DE ITS</a>
                                </div>
                            </div>
                        </div>'; */
                foreach ($banners as $b) {
                    echo '<div class="item">
                                    <img src="../img/banners/desktop/eduin.jpg" class="hide-for-small-only show-for-medium" alt="" width="100%" carousel="img-1">
                                    <img src="../img/banners/mobile/' . $b['img_mobile'] . '" class="hide-for-medium show-for-small" alt="" width="100%" carousel="img-1">
                                </div>';
                }
                echo '</div>';
                ?>
            </div>
            <!-- Banners Home page -->
            <div class="large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection">
                        <h2 style="font-size: 35px;" class="morado"><strong>KITS DE DIAGNÓSTICO DE INFECCIONES DE TRANSMISIÓN SEXUAL (ITS)</strong></h2>
                    </div>

                    <div class="product-container large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection">
  <div class="product-item">
  <h2 style="font-weight: bold; color: #662480:">KIT GOLD DETECTA 7 <br> ITS</h2>
    <img src="../img/Producto-Kit-Gold-Sitio-Web.jpg" alt="Producto 1" class="llamativo">
    <p style="font-weight: bold; font-size: 28px;" class="price">$2,720</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/aEUbL3f5M3zm2iY7sC" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>
  
  <div class="product-item">
  <h2 style="font-weight: bold; color: #662480:">KIT BLACK DETECTA 13 <br> ITS</h2>
    <img src="../img/Producto-Kit-Black-Sitio-Web.jpg" alt="Producto 2" class="llamativo">
    <p style="font-weight: bold; font-size: 28px;" class="price">$4,999</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/4gw02lbTAd9W0aQ9Gh" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
  <h2 style="font-weight: bold; color: #662480:">KIT PLATINUM DETECTA 12 ITS</h2>
    <img src="../img/Producto-Kit-Platinum-Sitio-Web.jpg" alt="Producto 3" class="llamativo">
    <p style="font-weight: bold; font-size: 28px;" class="price">$3,320</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/8wMaGZcXE8TG2iY00c" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
  <h2 style="font-weight: bold; color: #662480:">KIT <br> VPH</h2>
    <img src="../img/Producto-Kit-VPH-Sitio-Web.jpg" alt="Producto 4" class="llamativo">
    <p style="font-weight: bold; font-size: 28px;" class="price">$2,620</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/00g6qJ2j0d9W3n214h" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
      <p></p>
    </div>
  </div>

            </div>



  <!--<div class="large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection">
                        <h2 class="morado"><strong>KITS DE DIAGNÓSTICO DE INFECCIONES DE TRANSMISIÓN SEXUAL (ITS) <b style="color:red;">PROMOCIÓN</b> </strong></h2>
                    </div>

                    <div class="product-container-2 large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection">
  <div class="product-item">
  <h2 style="font-weight: bold; color: #662480:">KIT BLACK<br> COMBO PAREJA</h2>
    <img src="../img/Producto-Kits-Black-Pareja-Sitio-Web.jpg" alt="Producto 1" class="llamativo">
    <p style="font-weight: bold; font-size: 28px;" class="price"> <del style="color: black; font-size:17px;">$2,620</del> <br> $2,096</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/7sIbL30aS6Ly8Hm2bG" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>
  
  <div class="product-item">
  <h2 style="font-weight: bold; color: #662480:">KIT PLATINUM  <br> COMBO PAREJA</h2>
    <img src="../img/Producto-Kits-Platinum-Pareja-Sitio-Web.jpg" alt="Producto 2" class="llamativo">
    <p style="font-weight: bold; font-size: 28px;" class="price"> <del style="color: black; font-size:17px;">$2,620</del> <br> $2,096</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/28obL36zg0naaPubNd" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>
</div>-->
            <div class="cell text-left spaceSection">
                <div class="grid-x show-for-medium">
                    <div class="large-6 medium-6 grid-padding-x video">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ackw2ljoYf0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="large-6 medium-6 grid-padding-x text-left queEsIts">
                        <h2>Kits de infección de transmisión sexual</h2>
                        <p>Actualmente, las ITS son más comunes de lo que pensamos; sin embargo, un diagnóstico oportuno ayuda a determinar el tratamiento adecuado y prevenir futuras complicaciones.</p>
                        <p>Las ITS, no distinguen orientación sexual, identidad de género o edad, es importante realizar pruebas periódicas de detección desde el comienzo de la vida sexual. </p>
                        <p>En ChektAhora somos expertos en la prevención y diagnóstico de Infecciones de Transmisión Sexual. Confía… tenemos la respuesta.</p>
                    </div>
                </div>
                <div class="grid-x show-for-small-only">
                    <div class="large-6 medium-6 small-12 grid-padding-x text-left queEsIts">
                        <h2>Kits de infección de transmisión sexual</h2>
                        <p>Las ITS son infecciones que afectan a todos independientemente de la orientación sexual o identidad de género.</p>
                        <p>Desde el comienzo de la vida sexual puedes estar expuesto/a a estas infecciones, En ChektAhora somos expertos en el diagnóstico de infecciones de transmisión sexual, conoce más sobre nosotros y nuestra misión.</p>
                    </div>
                    <!-- <div class="large-6 medium-6 small-12 grid-padding-x">
                        <iframe width="100%" height="300px" src="https://www.youtube.com/embed/ackw2ljoYf0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div> -->
                </div>
            </div>
            <!--  <div class="cell text-center spaceSection py-5">
                <div class="grid-x">
                    <div class="large-12 medium-12 small-12 grid-padding-x kits">
                        <div class="titulos">
                            <h2>Kits de infección de transmisión sexual</h2>
                        </div>
                        <p>Kit personal de diagnóstico a domicilio. El empaque es altamente discreto y resultados 100% confidenciales, tú mismo puedes tomar la muestra, recíbelo en la puerta de tu casa, colegio y oficina.</br>
                            <a href="#nuestrosKits" class="nuestrosKits">Conoce más sobre nuestros kits de ITS y cada una de sus características</a>
                        </p>
                    </div>
                    <div id="como-funciona"></div>
                </div>
            </div> -->
            <div class="cell text-left spaceSection">
                <div class="grid-x">
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center">
                        <h2 class="morado"><strong>¿CÓMO FUNCIONA?</strong></h2>
                    </div>
                </div>
            </div>

            <div class="cell text-left spaceSection">
                <div class="grid-x spaceX">
                    <div class="large-6 medium-6 align-self-middle">
                        <ul class="pasos">
                            <li>
                                <div class="grid-x">
                                    <div class="large-4 medium-4 small-12 grid-padding-x">
                                        <p class="number">1</p>
                                    </div>
                                    <div class="large-8 medium-8 small-12 grid-padding-x pasos">
                                        <h3>ORDENA TU KIT</h3>
                                        <p>Selecciona el producto de tu interés e ingrésalo a tu carrito de compra, llena el formulario con los datos requeridos. Finaliza tu compra, recibirás confirmación de tu compra en el correo electrónico que nos compartiste.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="large-6 medium-6 grid-padding-x text-center show-for-medium">
                        <img style="height: 500px;" src="../img/Kit Black WEB.webp" />
                    </div>
                </div>
            </div>
            <div class="cell text-left spaceSection">
                <div class="grid-x paso2 spaceX">
                    <div class="large-6 medium-6 align-self-middle">

                    </div>
                    <div class="large-6 medium-6 align-self-middle">
                        <ul class="pasos">
                            <li>
                                <div class="grid-x">
                                    <div class="large-4 medium-4 small-12 grid-padding-x paso2b">
                                        <p class="number">2</p>
                                    </div>
                                    <div class="large-8 medium-8 grid-padding-x pasos">
                                        <h3>CONFIRMACIÓN DE COMPRA</h3>
                                        <p>Nuestro equipo médico se contactará contigo y te proporcionará toda la información que necesites para realizar tu toma de muestra.</p>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="cell text-left spaceSection py-6">
                <div class="grid-x spaceX">
                    <div class="large-6 medium-6 align-self-middle">
                        <ul class="pasos">
                            <li>
                                <div class="grid-x">
                                    <div class="large-4 medium-4 small-12 grid-padding-x">
                                        <p class="number">3</p>
                                    </div>
                                    <div class="large-8 medium-8 small-12 grid-padding-x pasos">
                                        <h3>TOMA DE MUESTRA</h3>
                                        <p>Nuestro equipo de profesionales de la salud acudirá a tu domicilio y te asistirá con la toma de muestra (aplica para CDMX y Área Metropolitana). </p>
                                        <p>Si lo requieres, puedes agendar tu toma de muestra en nuestro laboratorio o si tu compra es realizada desde el interior de la república, consulta los costos de envío y recolección.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="large-6 medium-6 grid-padding-x text-center show-for-medium">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/-_n8GcQmREQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="cell text-left py-6">
                <div class="grid-x spaceX bkLila py-5">
                    <div class="large-6 medium-6 grid-padding-x text-center show-for-medium">
                        <img src="../css/img/comoFunciona-Paso3.png" />
                    </div>
                    <div class="large-6 medium-6 align-self-middle">
                        <ul class="pasos">
                            <li>
                                <div class="grid-x">
                                    <div class="large-4 medium-4 small-12 grid-padding-x">
                                        <p class="number">4</p>
                                    </div>
                                    <div class="large-8 medium-8 grid-padding-x pasos">
                                        <h3>RESULTADOS</h3>
                                        <p>Una vez procesadas las muestras, recibirás tus resultados vía correo electrónico y/o WhatsApp. Si lo requieres, nuestros especialistas podrán asesorarte respecto a los siguientes pasos. (Opciones de médicos para iniciar tratamiento).</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'template/footer.php'; ?>
    </div>
    <script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="../js/main/owl.carousel.min.js"></script>
    <script src="../js/pop-up.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script>
        localStorage.removeItem('cart');
        localStorage.removeItem('cart_update');
        localStorage.removeItem('stock');
        localStorage.removeItem('stock_update');
        /* setTimeout(function() {
            $('#pop-up-message').foundation('open');
        }, 4000) */
        $('#carousel-banner').owlCarousel({
            merge: true,
            nav: true,
            loop: true,
            items: 1,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false,
            navClass: [
                'owl-prev-banner',
                'owl-next-banner'
            ],
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        })
        $('#carousel-products').owlCarousel({
            nav: true,
            items: 3,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false,
            responsive: {
                0: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        })
        $('#carousel-products-resp').owlCarousel({
            nav: true,
            items: 3,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false,
            responsive: {
                0: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        })
        $('#carousel-products-clinicos').owlCarousel({
            nav: true,
            items: 3,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false,
            responsive: {
                0: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        })
        // $(document).ready(function(){
        // $(".less").click(function(){
        //     $("p").slideUp();
        // });
        // $(".more").click(function(){
        //     $("p").slideDown();
        // });
        // });
        $('.tc-facet').hide();
        $(document).ready(function(){
            $(".tc-facet-header").on("click", function(e){
                $(this).toggleClass("tc-toggle-show");
                $(this).toggleClass("tc-toggle-hide");
                $(this).next(".tc-facet").slideToggle();
            });
        });
    </script>
</body>

</html>