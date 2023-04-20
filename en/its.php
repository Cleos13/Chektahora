<?php include '../lib/global.php'; ?>
<!doctype html>
<html lang="es-MX" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

<head>
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
    <script src="https://www.google.com/recaptcha/api.js?render=6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh"></script>
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
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VW67FHGEX4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-VW67FHGEX4');
    </script>
</head>

<body>
    <div class="fluid">
        
        <div class="grid-x">
            <?php include 'template/header.php'; ?>
            <!-- Banners Home page -->
            <div class="cell spaceTop relative" style="margin-top: 100px; margin-bottom: -50px;">
            <?php
                include 'master/banners.php';
                $banners = getBanners('its');
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
            <div class="cell text-left" style="margin-top: 150px">
                <div class="grid-x">
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center align-self-middle">
                        <h2 class="morado" id="nuestrasPruebas"><strong>OUR</strong> STI KITS</h2>
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
                                if ($p['category'] === 'its') {
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
            </div>
            <div class="cell text-left spaceSection">
                <div class="grid-x show-for-medium">
                    <div class="large-6 medium-6 grid-padding-x video">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ackw2ljoYf0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="large-6 medium-6 grid-padding-x text-left queEsIts">
                        <h2>sexually transmitted infection kits</h2>
                        <p>STIs are infections that affect everyone regardless of sexual orientation or gender identity.</p>
                        <p>From the beginning of sexual life you can be exposed to these infections. At Chektahora we are experts in the diagnosis of sexually transmitted infections,
                            <a href="nosotros">Learn more about us and our mission.</a>
                        </p>

                    </div>
                </div>
                <div class="grid-x show-for-small-only">
                    <div class="large-6 medium-6 small-12 grid-padding-x text-left queEsIts">
                        <h2>sexually transmitted infection kits</h2>
                        <p>STIs are infections that affect everyone regardless of sexual orientation or gender identity.</p>
                        <p>From the beginning of sexual life you can be exposed to these infections. At Chektahora we are experts in the diagnosis of sexually transmitted infections, learn more about us and our mission.</p>
                    </div>
                    <!-- <div class="large-6 medium-6 small-12 grid-padding-x">
                        <iframe width="100%" height="300px" src="https://www.youtube.com/embed/ackw2ljoYf0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div> -->
                </div>
            </div>
            <div class="cell text-center spaceSection py-5">
                <div class="grid-x">
                    <div class="large-12 medium-12 small-12 grid-padding-x kits">
                        <div class="titulos">
                            <h2>sexually transmitted infection kits</h2>
                        </div>
                        <p>Personal diagnostic kit at home. The packaging is highly discreet and the results 100% confidential, you can take the sample yourself, receive it at the door of your home, school and office.</br>
                            <a href="#nuestrosKits" class="nuestrosKits">Learn more about our STI kits and each of their features</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="cell text-left spaceSection">
                <div class="grid-x">
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center">
                        <h2 class="morado"><strong>HOW DOES IT WORK?</strong></h2>
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
                                        <h3>ORDER YOUR KIT</h3>
                                        <p>Buy your kit on our website. Fill out the form and enter your gender. You will receive the purchase confirmation in your email.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="large-6 medium-6 grid-padding-x text-center show-for-medium">
                        <img src="../css/img/comoFunciona-Paso1.png" />
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
                                        <h3>PURCHASE CONFIRMATION</h3>
                                        <p>Our medical team will contact you and provide you with all the information you need to carry out your sample collection.</p>
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
                                        <h3>SAMPLING</h3>
                                        <p>In your kit you will find everything you need to self-take your sample.</p>
                                        <p>If you require it, you can also schedule your sample collection in our laboratory (It is scheduled once the purchase is made) in CDMX and the metropolitan area.</p>
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
            <div class="cell text-left spaceSection py-6">
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
                                        <h3>RESULTS</h3>
                                        <p>Once the kit has been analyzed, we will send you the results by email and WhatsApp within a maximum of 72 hours.</p>
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
    <script src="../js/flickity.js"></script>
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
        $(document).ready(function() {
            $('.sim-thumb').on('click', function() {
                $('#main-product-image').attr('src', $(this).data('image'));
            })
            $('.sim-thumb2').on('click', function() {
                $('#main-product-image2').attr('src', $(this).data('image'));
            })
            $('.sim-thumb3').on('click', function() {
                $('#main-product-image3').attr('src', $(this).data('image'));
            })
            $('.sim-thumb4').on('click', function() {
                $('#main-product-image4').attr('src', $(this).data('image'));
            })

        });

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