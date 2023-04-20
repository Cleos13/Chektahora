<?php include '../lib/global.php'; ?>
<!doctype html>
<html lang="es-MX" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

<head>
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
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VW67FHGEX4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-VW67FHGEX4');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache" />
    <title>Chektahora</title>
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

</head>

<body>
    <div class="fluid">
        
        <div class="grid-x" style="overflow: hidden;">
            <?php include 'template/header.php'; ?>

            <!-- Banners Home page -->
            <div class="cell spaceTop relative" style="margin-top: 100px;">
            <?php
                include 'master/banners.php';
                $banners = getBanners('covid');
                echo '<div class="owl-carousel owl-theme" id="carousel-banner">';
                foreach ($banners as $b) {
                    echo '<div class="item">
                                    <img src="../img/banners/desktop/' . $b['img_desktop'] . '" class="hide-for-small-only show-for-medium" alt="" width="100%" carousel="img-1">
                                    <img src="../img/banners/mobile/' . $b['img_mobile'] . '" class="hide-for-medium show-for-small" alt="" width="100%" carousel="img-1">
                                </div>';
                }
                echo '</div>';
                ?>
            </div>
            <!-- Banners Home page -->
            <div class="cell">
                <div class="grid-x bkPurple spaceX ">
                    <div class="large-6 medium-6 small-12 grid-padding-x align-self-middle certificado">
                        <img alt="certificado" class="show-for-medium" src="../css/img/certificadoMaleta.png" />
                        <img alt="certificado" class="show-for-small-only" src="../css/img/maletas.png" />
                    </div>
                    <div class="large-6 medium-6 small-12 grid-padding-x align-self-middle text-right certificado ">
                        <p><a href="#nuestrasPruebas">Get your travel certificate <strong>passed</strong> With Our COVID-19 detection tests Get your result in a maximum of 24 hours in the PCR test</a></p>
                    </div>
                </div>
            </div>
            <div class="cell text-left" id="products_covid">
                <div class="grid-x py-3">
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center align-self-middle py-3">
                        <h2 class="morado" id="nuestrasPruebas"><strong>Our COVID-19 tests</strong> </h2>
                    </div>
                    <div class="grid-container py-5 grid-x large-12 small-12">
                        <div class="owl-carousel owl-theme grid-x large-10 small-12 mx-auto" id="carousel-products">
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
                                                            <button class="" plus-cart="' . $p['id'] . '">Add</button>
                                                        </div>
                                                        <div class="large-6 small-6 ver-mas-link">
                                                            <a href="producto?_ref=' . $p['id'] . '">See more</a>
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
                <section id="3"></section>
            </div>
            <div class="cell spaceSection spaceX py-5">
                <div class="grid-x">
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center">
                        <h2 class="morado"><strong>How does it work?</strong></h2>
                    </div>
                </div>
            </div>
            <div class="cell">
                <div class="grid-x show-for-medium">
                    <div class="large-12 medium-12 grid-padding-x  bkLila step1">
                        <div>
                            <img class="step" alt="pasos" src="../css/img/pasos/step1.png" />
                        </div>
                        <div class="infoSteps">

                            <h2>Order your test online</h2>
                            <p>Complete the online questionnaire in a matter of minutes, schedule your sample collection and pay for your test.</p>

                            <p>We will provide you with an automatic itemized receipt for your order.</p>
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

                            <h2>Visit to your home</h2>
                            <p>Our trained team will come to your home and take your sample.</p>
                            <div class="step2-Video">
                                <a data-open="exampleModal1">
                                    <img class="pasos1" alt="pasos" src="../css/img/step2-Video.png" />
                                </a>
                                <p>See how the entire sampling process is carried out.</p>
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

                            <h2>Check your results</h2>
                            <p>With your ID you can check and download your results online, they will also be sent by email and WhatsApp.</p>


                        </div>
                        <div class="condition">
                            <p>Your results are safe thanks to our security certificates</p>
                        </div>
                    </div>
                </div>
                <div class="grid-x show-for-small-only pasosMobile">
                    <div class="small-12 grid-padding-x text-center bkLila py-5">
                        <img alt="paso1" src="../css/img/pasos/step1.png" />
                        <h2>Order your test online</h2>
                        <p>Complete the online questionnaire in a matter of minutes, schedule your sample collection and pay for your test.</p>
                        <p>We will provide you with an automatic itemized receipt for your order.</p>
                    </div>
                    <div class="small-12 grid-padding-x text-center py-5">
                        <img alt="paso2" src="../css/img/pasos/step2.png" />
                        <h2>Visit to your home</h2>
                        <p>Our trained team will come to your home and take your sample.</p>
                        <iframe class="show-for-medium" width="100%" height="300" src="https://www.youtube.com/embed/oeHkGkmIeX8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p class="videoMobile show-for-medium">See how the entire sampling process is carried out.</p>

                    </div>
                    <div class="small-12 grid-padding-x text-center paso3Mobile py-6">
                        <img alt="paso3" src="../css/img/pasos/step3.png" />
                        <h2>Check your results</h2>
                        <p>With your ID you can check and download your results online, we will also send them by email and WhatsApp</p>
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