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
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '686668561821805');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=686668561821805&ev=PageView&noscript=1" /></noscript>

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11060448578"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11060448578');
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11060448578"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11060448578');
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
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNR8MBT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="fluid">
        
        <div class="grid-x" style="overflow: hidden;">
            <?php include 'template/header.php'; ?>

            <!-- Banners Home page -->
            <div class="cell spaceTop relative" style="margin-top: 100px;">
                <?php
                include 'master/banners.php';
                $banners = getBanners('covid');
                echo '<div class="owl-carousel owl-theme" id="carousel-banner">
                            <div class="covid item">
                                <div class="callCovid">
                                    <h1 class="home text-center">Pruebas COVID-19 </h1>
                                    <p>Nuestros kits son privados y seguros, utilizamos la mejor tecnología PCR para proporcionar resultados altamente confiables, con amplificaciones de ácidos nucleicos del ADN con una seguridad mayor al 98%</p>
                                    <div class="orbitBTn">
                                        <a class="btnPurple4" href="#nuestrasPruebas">Pruebas Covid</a>
                                    </div>
                                </div>
                            </div>';
                foreach ($banners as $b) {
                    echo '<div class="item">
                                    <img src="../img/banners/desktop/coovid.jpg" class="hide-for-small-only show-for-medium" alt="" width="100%" carousel="img-1">
                                    <img src="../img/banners/mobile/' . $b['img_mobile'] . '" class="hide-for-medium show-for-small" alt="" width="100%" carousel="img-1">
                                </div>';
                }
                echo '</div>';
                ?>
            </div>

            <div class="cell text-left">
                <div class="grid-x spaceSection">
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection">
                        <h2 class="morado"><strong>KITS DE DIAGNÓSTICO DE VIRUS RESPIRATORIOS</strong></h2>
                    </div>
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection">
                        <h3 class="morado"><p class="moradito">DIAGNÓSTICOS OPORTUNOS Y CONFIABLES PARA</p></h2>
                    </div>
                    <div class="grid-container py-5 grid-x large-12 small-12">
                        <div class="owl-carousel owl-theme grid-x large-10 small-12 mx-auto" id="carousel-products-resp"> 
                            <?php
                            global $items;
                            global $images;
                            global $conn;
                            foreach ($items as $p){
                                $img = '';
                                foreach ($images as $image){
                                    if($image['id_product'] === $p['id']){
                                        $img = $image['img'];
                                    }
                                }
                                if ($p['category'] === 'covid') {
                                    echo '<div class="item">
                                                <div class="card-product" style="width: 90%;">
                                                    <div class="name-product">
                                                        <h4>' . $p['name'] . '</h4>
                                                    </div>
                                                    <div style="width: 60%; margin: auto;">
                                                        <img src="../img/products/' . $img . '" alt="">
                                                    </div>
                                                    <div class="price-product py-2">
                                                        $' . $p['price'] . ' <span class="fs-2">MXN</span>
                                                    </div>
                                                    <div class="grid-x cell px-1 mb-2">
                                                        <div class="large-6 small-6">
                                                            <button class="" plus-cart="' . $p['id'] . '">Añadir</button>
                                                        </div>
                                                        <div class="large-6 small-6 ver-mas-link tc-facet-header tc-toggle-show">
                                                            <button class="' . $p['id'] . '">Ver más</button>
                                                            
                                                        </div>
                                                        <div class="tc-facet tc-facet-open">
                                                            <br>
                                                            ' . $p['description'] . '
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banners Home page -->

           
            <div class="cell">
                <div class="grid-x bkPurple spaceX ">
                    <div class="large-6 medium-6 small-12 grid-padding-x align-self-middle certificado">
                        <img alt="certificado" class="show-for-medium" src="../css/img/certificadoMaleta.png" />
                        <img alt="certificado" class="show-for-small-only" src="../css/img/maletas.png" />
                    </div>
                    <div class="large-6 medium-6 small-12 grid-padding-x align-self-middle text-right certificado ">
                        <p><a href="#nuestrasPruebas">Obtén tus resultados de Pruebas PCR COVID-19 en 12 horas o menos y solicita tu certificado de viaje.<a></p>
                    </div>
                </div>
            </div>
            


            <div class="cell spaceSection spaceX py-5">
                <div class="grid-x">
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center">
                        <h2 class="morado"><strong>¿Cómo funciona?</strong></h2>
                    </div>
                </div>
            </div>
            <div class="cell">
                <div class="grid-x show-for-medium">
                    <div class="large-12 medium-12 grid-padding-x  bkLila step1">
                        <!-- <a data-open="exampleModal1"><img class="pasos1" alt="pasos" src="../css/img/pasos.png" /></a>
                        <img class="pasos2" alt="pasos" src="../css/img/pasosMobile.jpeg" /> -->
                        <div>
                            <img class="step" alt="pasos" src="../css/img/pasos/step1.png" />
                        </div>
                        <div class="infoSteps">

                            <h2>Ordene su prueba en línea</h2>
                            <p>Selecciona la prueba de tu interés, completa el cuestionario, elige la fecha y hora para realizar tu toma de muestra y completa tu compra. </p>

                            <p>Recibirás confirmación de pago vía correo electrónico. </p>
                            <p>Nuestro equipo de profesionales se pondrá en contacto contigo vía telefónica para confirmar los detalles de compra y toma de muestra.</p>
                        </div>
                        <div>
                            <img class="right" alt="pasos" src="../css/img/kit.png" />
                        </div>
                    </div>
                    <div class="large-12 medium-12 grid-padding-x step2">

                        <div>
                            <img class="step" alt="pasos" src="../css/img/pasos/step2.png" />
                        </div>
                        <div class="infoSteps">

                            <h2>Visita a tu domicilio</h2>
                            <p>Nuestro equipo capacitado llegará a tu domicilio y realizará tu toma de muestra.</p>
                            <div class="step2-Video">
                                <a data-open="exampleModal1">
                                    <img class="pasos1" alt="pasos" src="../css/img/step2-Video.png" />
                                </a>
                                <p>Ver cómo se realiza todo el proceso de toma de muestra.</p>
                            </div>

                        </div>
                        <div>
                            <img class="right" alt="pasos" src="../css/img/step2.png" />
                        </div>
                    </div>
                    <div class="large-12 medium-12 grid-padding-x step3">

                        <div>
                            <img class="step" alt="pasos" src="../css/img/pasos/step3.png" />
                        </div>
                        <div class="infoSteps">

                            <h2>Consulta tus resultados</h2>
                            <p>Nuestro personal médico asistirán a tu domicilio para realizar la toma de muestra, si requieres certificado de viaje, por favor indícalo a nuestro equipo. </p>


                        </div>
                        <div class="condition">
                            <p>Tus resultados se encuentran seguros gracias a nuestros certificados de seguridad</p>
                        </div>
                    </div>
                </div>
                <div class="grid-x show-for-small-only pasosMobile">
                    <div class="small-12 grid-padding-x text-center bkLila py-5">
                        <img alt="paso1" src="../css/img/pasos/step1.png" />
                        <h2>Ordene su prueba en línea</h2>
                        <p>Completa el cuestionario en línea en cuestión de minutos, agenda tu toma de muestra y realiza el pago de tu prueba.</p>
                        <p>Le proporcionaremos un recibo detallado automático de su pedido. </p>
                    </div>
                    <div class="small-12 grid-padding-x text-center py-5">
                        <img alt="paso2" src="../css/img/pasos/step2.png" />
                        <h2>Visita a tu domicilio</h2>
                        <p>Nuestro equipo capacitado llegará a tu domicilio y realizará tu toma de muestra.</p>
                        <iframe class="show-for-medium" width="100%" height="300" src="https://www.youtube.com/embed/oeHkGkmIeX8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p class="videoMobile show-for-medium"> Ver como se realiza todo el proceso de toma de muestra. </p>

                    </div>
                    <div class="small-12 grid-padding-x text-center paso3Mobile py-6">
                        <img alt="paso3" src="../css/img/pasos/step3.png" />
                        <h2>Consulta tus resultados</h2>
                        <p>Con tu ID podrás consultar y descargar tus resultados en línea, también los enviaremos por correo electrónico y WhatsApp</p>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'template/footer.php'; ?>

        <div class="reveal" id="exampleModal1" data-reveal>
            <div id="videoContainer">
                <iframe class="youtube-video" width="560" height="315" src="https://www.youtube.com/embed/oeHkGkmIeX8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <button class="close-button" id="cerrarVideo" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

    <script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="../js/pop-up.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="../js/main/owl.carousel.min.js"></script>
    <script>
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
    </script>
</body>

</html>