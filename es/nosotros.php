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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?render=6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh"></script>
    <link rel="preconnect" href="https://www.google.com">
    <link rel="preconnect" href="https://www.gstatic.com" crossorigin>
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
        <div class="grid-x">
            <?php include 'template/header.php'; ?>

            <div class="cell text-left show-for-large">
                <div class="grid-x">
                    <div class="large-12 medium-10 grid-padding-x nuestrosInicios grid-x py-5">
                        <div class="grid-x">
                            <div class="large-10 mx-auto">
                                <div class="grid-x relative large-12 mx-auto justify-content-center">
                                    <div class="large-6">
                                        <div class="titulo text-center">
                                            <h2 class="morado"><strong>ChektAhora</strong></h2>
                                            <h2>Nuestros inicios</h2>
                                        </div>
                                    </div>
                                    <div class="large-6 flex-center">
                                        <div class="d-flex justify-content-center">
                                            <img src="../img/us/Nosotros.jpg" style="max-width: 40%;">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-x relative large-12 mx-auto justify-content-center">
                                    <div class="large-6 flex-center">
                                        <img src="../img/us/tamano.jpg" style="max-width: 30%;">
                                    </div>
                                    <div class="large-6 d-flex justify-content-center align-items-center">
                                        <div>
                                            <p>Somos un laboratório clínico líder en la transformación digital de la salud, fundada en 2015 en Dublín, Irlanda con presencia en México.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="cell text-left show-for-small hide-for-large">
                <div class="grid-x">
                    <div class="large-12 medium-12 grid-padding-x text-center inicios spaceX bkMoradaClara">
                        <h2 class="morado pt-4"><strong>ChektAhora</strong></h2>
                        <h2>Nuestros inicios</h2>
                        <img src="../img/us/Nosotros.jpg" style="width: 200px; margin-top: 20px; margin-bottom: 30px;">
                        <p>Somos una empresa de biotecnología fundada en 2015 en Dublín, Irlanda con presencia en la Ciudad de México.</p>
                        <img src="../img/us/tamano.jpg" style="width: 200px;" class="py-4">

                    </div>
                </div>
            </div>

            <div class="cell text-center kitsIts">
                <div class="grid-x">
                    <div class="large-12 medium-12 grid-padding-x bkPurple">
                        <h2>Nos destacamos…</h2>
                        <p id="animatedText" class="italic"></p>
                    </div>
                </div>
            </div>

            <div class="cell text-left show-for-medium">
                <div class="grid-x">
                    <div class="medium-12 grid-padding-x realizamos py-5 grid-x">
                        <div class="grid-x relative large-10 px-4 mx-auto">
                            <div class="large-8 medium-9 d-flex align-items-center">
                                <div>
                                    <div class="titulo">
                                        <h2>Realizamos el diagnóstico de…</h2>
                                    </div>
                                    <div>
                                        <p>
                                            Infecciones de transmisión sexual (ITS) y de virus y bacterias en enfermedades respiratorias como la influenza y el Sars-CoV-2 ( COVID-19 ) a través de <strong>pruebas PCR, antígenos y anticuerpos.</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="large-4 medium-3">
                                <div>
                                    <img src="../img/us/16628735101662871067renombrar_2.png" alt="diagnostico">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cell text-left py-3 show-for-small-only">
                <div class="grid-x">
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center">

                        <img src="../img/us/16628735101662871067renombrar_2.png" alt="diagnostico" style="width: 200px;">

                    </div>
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center bkMoradaClara diagnostico">
                        <div class="titulo">
                            <h2>Realizamos el diagnóstico de…</h2>
                        </div>
                        <p>
                            Infecciones de transmisión sexual (ITS) y de virus y bacterias en enfermedades respiratorias como la influenza y el Sars-CoV-2 ( COVID-19 ) a través de <strong>pruebas PCR, antígenos y anticuerpos.</strong>
                        </p>
                    </div>
                </div>
            </div>

            <div class="cell text-left spaceSection">
                <div class="grid-x nuestrosValores">
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center pt-4">
                        <h2 class="morado"><strong>ChektAhora es</strong></h2>
                    </div>
                    <div class="large-12 medium-12 small-12 grid-padding-x py-5 show-for-medium">
                        <ul class="valores list-unstyled m-0">
                            <li class="integridad">

                            </li>
                            <li class="etica">

                            </li>
                            <li class="compromiso">

                            </li>
                            <li class="responsabilidad">

                            </li>
                        </ul>
                    </div>

                    <div class="large-12 medium-12 small-12 grid-padding-x py-3 show-for-small-only">
                        <div class="valoresMobile">
                            <img alt="" src="../css/img/integridad.png" />
                            <img alt="" src="../css/img/etica.png" />
                            <img alt="" src="../css/img/compromiso.png" />
                            <img alt="" src="../css/img/responsabilidad.png" />
                        </div>
                    </div>
                </div>

            </div>

            <div class="cell bkPurple">
                <div class="grid-x justify-content-center">
                    <div class="large-4 small-12 grid-padding-x align-self-middle">
                        <div class="promesaText text-center">
                            <h2>NUESTRA PROMESA</h2>
                            <h3 class="mb-2">Cuidar tu salud</h3>
                            <a href="its" class="m-auto text-center btn-banner-border px-1">Conoce nuestras pruebas</a>
                        </div>

                    </div>
                    <div class="large-7 small-12 grid-padding-x promesa d-flex">
                        <div class="Blaine my-5 grid-x justify-content-center">
                            <div class="medium-3 picture mx-2">
                                <img src="../img/us/Blaine-Doyle.png" style="width: 200px;" alt="Blaine CEO / Biólogo Molecular">
                            </div>
                            <div class="text medium-6">
                                <div>
                                    <div>
                                        <p class="text-justify">"Nuestro principal objetivo es generar conciencia acerca de la importancia de la prevención y atención temprana de ITS´s, la mayoría de ellas tienen un tratamiento muy sencillo si se detectan a tiempo.".</p>
                                    </div>
                                    <div class="job__position text-right">
                                        <p class="name m-0">Blaine Doyle</p>
                                        <p class="cargo m-0">CEO / Biólogo Molecular</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Rodrigo my-5 grid-x justify-content-center">
                            <div class="medium-3 picture mx-2">
                                <img src="../img/us/Rodrigo-Cervantes.png" style="width: 200px;" alt="Rodrigo CCO/Ingeniero Biomédico">
                            </div>
                            <div class="text medium-6">
                                <div>
                                    <p class="text-justify">"La tecnología hace mucho más sencillas nuestras vidas y nos acerca una gran cantidad de servicios y productos, vemos una gran oportunidad para llevar salud digital hasta las casas de nuestros pacientes.".</p>
                                </div>
                                <div class="job__position text-right">
                                    <p class="name m-0">Rodrigo Cervantes</p>
                                    <p class="cargo m-0">CCO/Ingeniero Biomédico</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cell text-left spaceSection py-3">
                <div class="grid-x">
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center">
                        <h2 class="morado"><strong>Publicados en</strong></h2>
                    </div>
                </div>
            </div>

            <div class="cell text-left bkSpacial">
                <div class="grid-x mb-2">
                    <div class="large-4 medium-4 small-12 grid-padding-x text-center spaceX py-2" style="margin:auto;"></div>
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center spaceX">
                        <img class="logos" alt="aliados" src="../css/img/publicaciones/publicados.jpg" />
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
        /**animacion de texto escribiendo*/

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
        $(window).scroll(function() {
            var top_of_element = $("#animatedText").offset().top;
            var bottom_of_element = $("#animatedText").offset().top + $("#animatedText").outerHeight();
            var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
            var top_of_screen = $(window).scrollTop();

            if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)) {
                something();
            } else {
                // do nothing
            }
        });
        var something = (function() {
            var executed = false;
            return function() {
                if (!executed) {
                    executed = true;
                    var content = 'en el desarrollo e investigación biomolecular para crear una plataforma de diagnóstico';
                    var ele = '<span>' + content.split('').join('</span><span>') + '</span>';
                    $(ele).hide().appendTo('p#animatedText').each(function(i) {
                        $(this).delay(50 * i).css({
                            display: 'inline',
                            opacity: 0
                        }).animate({
                            opacity: 1
                        }, 50);
                    });
                }
            };
        })();
        /**animacion de texto escribiendo*/
    </script>
</body>

</html>