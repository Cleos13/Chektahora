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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-11060448578');
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11060448578"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-11060448578');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NNR8MBT');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNR8MBT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="fluid">

        <div class="grid-x main__content" style="overflow: hidden;">
            <?php include 'template/header.php'; ?>

            <!-- Banners Home page -->
            <div class="large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection mt-4 mb-2">
                <h2 class="morado"><strong>KITS DE DIAGNÓSTICO DE VIRUS RESPIRATORIOS</strong></h2>
            </div>

            <div class="product-container large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection">
                <div class="product-item">
                    <h2 style="font-weight: bold; color: #662480">Prueba PCR para detección de influenza + COVID</h2>
                    <img src="../img/Producto-Covid-19-Anticuerpos-Sitio-Web.jpg" alt="Producto 1" class="llamativo">
                    <p style="font-weight: bold; font-size: 28px; color:black;" class="price"> $1,399</p>
                    <div class="buttons">
                        <a href="https://buy.stripe.com/6oE02le1I3zmaPu6s2" class="buy-button">Comprar</a>
                        <a href="#" class="more-button">Ver más</a>
                    </div>
                </div>

                <div class="product-item">
                    <h2 style="font-weight: bold; color: #662480">Prueba PCR para detección de COVID</h2>
                    <img src="../img/Producto-Covid-19-PCR-Sitio-Web.jpg" alt="Producto 2" class="llamativo">
                    <p style="font-weight: bold; font-size: 28px; color:red;" class="price"><del style="color: black;">$1,100</del> $599</p>
                    <div class="buttons">
                        <a href="https://buy.stripe.com/fZe5mFbTA0nae1GcQp" class="buy-button">Comprar</a>
                        <a href="#" class="more-button">Ver más</a>
                    </div>
                </div>

                <div class="product-item">
                    <h2 style="font-weight: bold; color: #662480">Prueba de Antígenos para detección de COVID</h2>
                    <img src="../img/Producto-Covid-19-Influenza-Sitio-Web.jpg" alt="Producto 3" class="llamativo">
                    <p style="font-weight: bold; font-size: 28px; color:black;" class="price"> $599</p>
                    <div class="buttons">
                        <a href="https://buy.stripe.com/6oEbL38Hoc5S3n23fS" class="buy-button">Comprar</a>
                        <a href="#" class="more-button">Ver más</a>
                    </div>
                </div>

                <div class="product-item">
                    <h2 style="font-weight: bold; color: #662480">Prueba de Anticuerpos para detección de COVID</h2>
                    <img src="../img/Producto-Covid-19-PCR-Sitio-Web.jpg" alt="Producto 4" class="llamativo">
                    <p style="font-weight: bold; font-size: 28px; color:black;" class="price">$1,050</p>
                    <div class="buttons">
                        <a href="https://buy.stripe.com/cN28yR0aSee05va4jI" class="buy-button">Comprar</a>
                        <a href="#" class="more-button">Ver más</a>
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
                        <p>
                            Obtén tus resultados de Pruebas PCR COVID-19 en 12 horas o menos y solicita tu certificado de viaje.
                        </p>
                    </div>
                </div>
            </div>

            <div class="cell spaceSection spaceX py-5">
                <div class="grid-x">
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center">
                        <h2 class="morado"><strong>¿CÓMO FUNCIONA?</strong></h2>
                    </div>
                </div>
            </div>

            <div class="cell">
                <div class="grid-x show-for-large">
                    <div class="large-12 medium-12 grid-padding-x  bkLila step1">
                        <div class="grid-x">
                            <div class="large-2 step__number">
                                <img class="step mx-auto" alt="pasos" src="../css/img/pasos/step1.png" />
                            </div>
                            <div class="infoSteps large-6">
                                <h2>Ordene su prueba en línea</h2>
                                <p>Selecciona la prueba de tu interés, completa el cuestionario, elige la fecha y hora para realizar tu toma de muestra y completa tu compra. </p>

                                <p>Recibirás confirmación de pago vía correo electrónico. </p>
                                <p>Nuestro equipo de profesionales se pondrá en contacto contigo vía telefónica para confirmar los detalles de compra y toma de muestra.</p>
                            </div>
                            <div class="large-4 step__img">
                                <img class="right p-5" alt="pasos" src="../css/img/kit.png" />
                            </div>
                        </div>
                    </div>

                    <div class="large-12 medium-12 grid-padding-x step2">
                        <div class="grid-x">
                            <div class="large-2 step__number">
                                <img class="step mx-auto" alt="pasos" src="../css/img/pasos/step2.png" />
                            </div>
    
                            <div class="infoSteps large-6">
    
                                <h2>Visita a tu domicilio</h2>
                                <p>Nuestro equipo capacitado llegará a tu domicilio y realizará tu toma de muestra.</p>
                                <div class="step2-Video d-none">
                                    <a data-open="exampleModal1">
                                        <img class="pasos1" alt="pasos" src="../css/img/step2-Video.png" />
                                    </a>
                                    <p>Ver cómo se realiza todo el proceso de toma de muestra.</p>
                                </div>
    
                            </div>
    
                            <div class="large-4 step__img">
                                <img class="right p-5" alt="pasos" src="../css/img/step2.png" />
                            </div>
                        </div>
                    </div>

                    <div class="large-12 medium-12 grid-padding-x step3">

                    <div class="grid-x">
                        <div class="large-2 step__number">
                            <img class="step" alt="pasos" src="../css/img/pasos/step3.png" />
                        </div>
    
                        <div class="infoSteps large-6">
    
                            <h2>Consulta tus resultados</h2>
                            <p>Nuestro personal médico asistirán a tu domicilio para realizar la toma de muestra, si requieres certificado de viaje, por favor indícalo a nuestro equipo. </p>
                            <p>Tus resultados se encuentran seguros gracias a nuestros certificados de seguridad</p>
    
                        </div>      
                    </div>
                    
                    </div>
                </div>

                <div class="grid-x hide-for-large pasosMobile">
                    <div class="small-12 grid-padding-x text-center bkLila py-4">
                        <div class="pasosMobile__wrapper">
                            <img alt="paso1" src="../css/img/pasos/step1.png" />
                            <h2>Ordene su prueba en línea</h2>
                            <p>Completa el cuestionario en línea en cuestión de minutos, agenda tu toma de muestra y realiza el pago de tu prueba.</p>
                            <p>Le proporcionaremos un recibo detallado automático de su pedido. </p>
                        </div>
                    </div>
                    <div class="small-12 grid-padding-x text-center py-4">
                        <div class="pasosMobile__wrapper">
                            <img alt="paso2" src="../css/img/pasos/step2.png" />
                            <h2>Visita a tu domicilio</h2>
                            <p>Nuestro equipo capacitado llegará a tu domicilio y realizará tu toma de muestra.</p>
                        </div>
                        <iframe class="d-none" width="100%" height="300" src="https://www.youtube.com/embed/oeHkGkmIeX8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p class="videoMobile show-for-medium"> Ver como se realiza todo el proceso de toma de muestra. </p>
                    </div>

                    <div class="small-12 grid-padding-x text-center paso3Mobile py-4">
                        <div class="pasosMobile__wrapper">
                            <img alt="paso3" src="../css/img/pasos/step3.png" />
                            <h2>Consulta tus resultados</h2>
                            <p>Con tu ID podrás consultar y descargar tus resultados en línea, también los enviaremos por correo electrónico y WhatsApp</p>
                        </div>
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