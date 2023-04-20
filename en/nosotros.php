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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?render=6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh"></script>
    <link rel="preconnect" href="https://www.google.com">
    <link rel="preconnect" href="https://www.gstatic.com" crossorigin>
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

<body style="overflow-x: hidden">
<div class="fluid">

    <div class="grid-x">
        <?php include 'template/header.php'; ?>

        <!-- Banners Home page -->
        <div class="cell spaceTop relative" style="margin-top: 100px;">
            <?php
            include 'master/banners.php';
            include '../api/template/images_us.php';
            $banners = getBanners('nosotros');
            echo '<div class="owl-carousel owl-theme" id="carousel-banner">';
            /* echo '<div class="owl-carousel owl-theme" id="carousel-banner">
                    <div class="nosotros item">
                        <div class="callNosotros">
                            <h1>ChektAhora </h1>
                            <p>Es salud Digital al alcance de todos.</p>
                            <hr>
                            <p>¿Quiénes somos?</p>
                        </div>
                    </div>'; */
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
        <div class="cell text-left py-5 show-for-medium">
            <div class="grid-x">
                <div class="large-11 medium-10 grid-padding-x nuestrosInicios grid-x">
                    <div class="grid-x relative large-12">
                        <div class="large-6">
                            <div class="titulo text-center">
                                <h2 class="morado"><strong>Chektahora</strong></h2>
                                <h2>Our beginnings</h2>
                            </div>
                        </div>
                        <div class="large-6 flex-center" style="position: absolute; right: -60px; top: -15px;">
                            <img src="../img/us/<?php echo getImgName('imagen_1'); ?>" style="width: 900px;">
                        </div>
                    </div>
                    <div class="grid-x relative large-12">
                        <div class="large-6 flex-center" style="position: inherit; left: -60px; bottom: -15px;">
                            <img src="../img/us/<?php echo getImgName('imagen_2'); ?>" style="width: 900px;">
                        </div>
                        <div class="large-6">
                            <p>We are a leading clinical laboratory in the digital transformation of health, founded in 2015 in Dublin, Ireland with a presence in Mexico.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cell text-left py-5 show-for-small-only">
            <div class="grid-x">
                <div class="large-12 medium-12 grid-padding-x text-center inicios spaceX bkMoradaClara" style="margin: 4%; height: 550px; padding: 20px 0px;">
                    <h2 class="morado"><strong>Chektahora</strong></h2>
                    <h2>Our beginnings</h2>
                    <img src="../img/us/<?php echo getImgName('imagen_1'); ?>" style="width: 200px; margin-top: 20px; margin-bottom: 30px;"/>
                    <p>We are a biotechnology company founded in 2015 in Dublin, Ireland with a presence in Mexico City.</p>
                    <img src="../img/us/<?php echo getImgName('imagen_2'); ?>" style="width: 200px; margin-top: 20px;"/>
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
        <div class="cell text-left py-5 show-for-medium">
            <div class="grid-x">
                <div class="large-10 medium-12 grid-padding-x realizamos">
                    <div class="grid-x relative large-12">
                        <div class="large-8">
                            <div class="titulo">
                                <h2>We diagnose...</h2>
                            </div>
                            <p>
                                Sexually transmitted infections (STIs) and viruses and bacteria in respiratory diseases such as influenza and Sars-CoV-2 ( COVID-19 ) through <strong>PCR tests, antigens and antibodies.</strong>
                            </p>
                        </div>
                        <div class="flex-center" style="position: absolute; right: -60px; top: -35px;">
                            <img src="../img/us/<?php echo getImgName('realizamos'); ?>" style="width: 400px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cell text-left py-5 show-for-small-only">
            <div class="grid-x">
                <div class="large-12 medium-12 small-12 grid-padding-x text-center">
                    <img src="../img/us/<?php echo getImgName('realizamos'); ?>" style="width: 200px;">
                </div>
                <div class="large-12 medium-12 small-12 grid-padding-x text-center bkMoradaClara diagnostico">
                    <div class="titulo">
                        <h2>We diagnose...</h2>
                    </div>
                    <p>
                        Sexually transmitted infections (STIs) and viruses and bacteria in respiratory diseases such as influenza and Sars-CoV-2 ( COVID-19 ) through <strong>PCR tests, antigens and antibodies.</strong>
                    </p>
                </div>
            </div>
        </div>
        <div class="cell text-left spaceSection">
            <div class="grid-x nuestrosValores">
                <div class="large-12 medium-12 small-12 grid-padding-x text-center">
                    <h2 class="morado"><strong>ChektAhora is</strong></h2>
                </div>
                <div class="large-12 medium-12 small-12 grid-padding-x py-5 show-for-medium">
                    <ul class="valores">
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

                <div class="large-12 medium-12 small-12 grid-padding-x py-5 show-for-small-only">
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
            <div class="grid-x">
                <div class="large-5 medium-6 small-12 grid-padding-x align-self-middle">
                    <div class="promesaText">
                        <h2>OUR PROMISE</h2>
                        <h3>Cuidar tu salud</h3>
                        <a href="its" class="btn-banner-border px-1">Take care of your health</a>
                    </div>

                </div>
                <div class="large-7 medium-6 small-12 grid-padding-x promesa show-for-medium">
                    <div class="grid-x">
                        <div class="large-4 flex-center align-height-center">
                            <img src="../img/us/<?php echo getImgName('blaine'); ?>" style="width: 200px;" alt="Blaine CEO / Biólogo Molecular">
                        </div>
                        <div class="Blaine large-8">
                            <p class="text">"Our main objective is to raise awareness about the importance of prevention and early care of STIs, most of them have a very simple treatment if they are detected early.".</p>
                            <p class="name">Blaine Doyle</p>
                            <p class="cargo">CEO / Molecular Biologist</p>
                        </div>
                    </div>
                    <div class="grid-x">
                        <div class="Rodrigo large-7">
                            <p class="text">"Technology makes our lives much easier and brings us a large number of services and products, we see a great opportunity to bring digital health to the homes of our patients.".</p>
                            <p class="name">Rodrigo Cervantes</p>
                            <p class="cargo">CCO/Bio-medical engineer</p>
                        </div>
                        <div class="large-5 flex-center align-height-center">
                            <img src="../img/us/<?php echo getImgName('rodrigo'); ?>" style="width: 200px;" alt="Rodrigo CCO/Ingeniero Biomédico">
                        </div>
                    </div>
                </div>
                <div class="large-6 medium-6 small-12 grid-padding-x promesaMobile show-for-small-only">
                    <div class="Blaine text-right" style="margin:15px 0;">
                        <img src="../img/us/<?php echo getImgName('blaine'); ?>" style="width: 200px;" alt="Blaine CEO / Biólogo Molecular">
                        <p class="text text-center">"Our main objective is to raise awareness about the importance of prevention and early care of STIs, most of them have a very simple treatment if they are detected early.".</p>
                        <p class="name text-right"><strong>Blaine Doyle</strong></p>
                        <p class="cargo text-right">CEO / Biólogo Molecular</p>
                    </div>
                    <div class="Rodrigo text-left">
                        <img src="../img/us/<?php echo getImgName('rodrigo'); ?>" style="width: 200px;" alt="Rodrigo CCO/Ingeniero Biomédico">
                        <p class="text text-center">"Technology makes our lives much easier and brings us a large number of services and products, we see a great opportunity to bring digital health to the homes of our patients.".</p>
                        <p class="name text-left"><strong>Rodrigo Cervantes</strong></p>
                        <p class="cargo text-left">CCO/Ingeniero Biomédico</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cell text-left spaceSection py-6">
            <div class="grid-x">
                <div class="large-12 medium-12 small-12 grid-padding-x text-center py-6">
                    <h2 class="morado"><strong>Posted in</strong></h2>
                </div>
            </div>
        </div>
        <div class="cell text-left bkSpacial">
            <div class="grid-x mb-10">
                <?php
                $img_posts = getImgPost();
                if(!empty($img_posts)){
                    foreach ($img_posts as $img) {
                        echo '<div class="large-4 medium-4 small-12 grid-padding-x text-center spaceX py-6" style="margin:auto;">
                                            <img class="logos" alt="aliados" src="../img/us/'. $img['img'] .'" />
                                        </div>';
                    }
                }else{
                    echo '<div class="large-4 medium-4 small-12 grid-padding-x text-center spaceX py-6" style="margin:auto;">En este momento no tenemos ninguna imagen agregada.</div>';
                }
                ?>
                <!--<div class="large-12 medium-12 small-12 grid-padding-x text-center spaceX">
                    <img class="logos" alt="aliados" src="../css/img/publicaciones/publicaciones.png" />
                </div>-->
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
                var content = 'in biomolecular research and development to create a diagnostic platform';
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