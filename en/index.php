<?php include '../lib/global.php'; ?>
<!doctype html>
<html lang="es-MX" prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb#">

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
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache" />
    <title>Chektahora</title>
    <?php include 'template/favicon.php'; ?>
    <link rel="preload" as="image" href="../css/img/iconos/chktahora.png">
    <link rel="stylesheet" href="../css/app.css?update=<?php echo constant('UPDATE'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?render=6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh"></script>
    

</head>

<body>
    <div class="fluid" id="home">
        

        <div class="grid-x">
            <?php include 'template/header.php'; ?>
            <!-- Banners Home page -->
            <div class="cell spaceTop relative" style="margin: 100px 0;">
            <?php
                include 'master/banners.php';
                $banners = getBanners('home');
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
            <div class="cell text-left">
                <div class="grid-x spaceSection">
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection">
                        <h2 class="morado"><strong>Our tests</strong></h2>
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
                                if ($p['home'] === '1') {
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
                                                            <button class="" action="add-card" plus-cart="' . $p['id'] . '">Add</button>
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
            <div class="cell text-left spaceSection ">
                <div class="grid-x ">
                    <div class="large-12 medium-12 grid-padding-x itsMorado mb-3 ">
                        <div class="contenido ">
                            <p>According to the <strong>WHO</strong> every day more than 1 million people acquire an STI in the world, 75% of STIs are asymptomatic,
                                <a href="https://www.youtube.com/watch?v=ackw2ljoYf0 "> learn more in our informative video</a>
                            </p>
                            <img class="show-for-small-only monita " src="../css/img/monita.png " />
                        </div>
                    </div>
                </div>
            </div>
            <div class="cell text-left ">
                <div class="grid-x ">
                    <div class="large-12 medium-12 small-12 grid-padding-x ">
                        <h2 class="morado text-center "><strong>Our Stats</strong></h2>
                    </div>
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center ">
                        <p class="morado espacio ">We are convinced that the best way to take care<br>of your health It is through the culture of prevention.</p>
                    </div>
                    <div class="large-12 medium-12 small-12 grid-padding-x info align-self-middle ">
                        <ul class="numeros " id="numbers ">
                            <li>
                                <img alt="ITS " src="../css/img/iconos/caja.png " />
                                <p class="dato text-center count ">+123456</p>
                                <p>STI Kits in Mexico</p>
                            </li>
                            <li>
                                <img alt="ITS " src="../css/img/iconos/virus.png " />
                                <p class="dato t ext-center count ">+50000</p>
                                <p>COVID-19 tests</p>
                            </li>
                            <li>
                                <img alt="ITS " src="../css/img/iconos/resultados.png " />
                                <p class="dato text-center count ">+100000</p>
                                <p>COVID-19 tests</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cell py-5 ">
                <div class="grid-x ">
                    <div class="large-12 medium-12 small-12 grid-padding-x covidPruebas text-left ">
                        <h3>According to the WHO, it is estimated that in Mexico there<br>are a total of 3.76M of COVID-19 cases, <a href="covid-19">find your proof<br>ideal, protect yourself and protect yours.</a></h3>
                    </div>
                </div>
            </div>
            <div class="cell text-left spaceSection ">
                <div class="grid-x ">
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center ">
                        <h2 class="morado "><strong>How does ChektAhora WORKS?</strong></h2>
                    </div>
                </div>
            </div>
            <div class="cell text-left spaceSection ">
                <div class="grid-x ">
                    <div class="large-13 medium-12 small-12 grid-padding-x ">
                        <ul class="comoFunciona ">
                            <li>
                                <div class="text-center ">
                                    <img alt=" " src="../css/img/paso1.png " />
                                    <p class="text-left "><strong>1.- Select the kit or test you need </strong></p>
                                    <p class="text-left ">Choose the kit or test you need, choose the quantity and click "add to cart".</p>
                                </div>
                            </li>
                            <li>
                                <div class="text-center ">
                                    <img alt=" " src="../css/img/paso2.png " />
                                    <p class="text-left "><strong>2.- - Fill in your details </strong></p>
                                    <p class="text-left ">Fill in the information indicated in each of the fields and select the payment method.</p>
                                </div>
                            </li>
                            <li>
                                <div class="text-center ">
                                    <img alt=" " src="../css/img/paso3.png " />
                                    <p class="text-left "><strong>3.- Receive your receipt </strong></p>
                                    <p class="text-left ">You will receive your proof of purchase in the email that you provided us, do not lose it.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cell text-left spaceSection ">
                <div class="grid-x ">
                    <div class="large-12 medium-12 small-12 grid-padding-x align-self-middle text-center py-5 ">
                        <h2 class="morado px-1 "><strong>What do our customers say?</strong></h2>
                    </div>
                    <div class="large-12 medium-12 small-12 grid-padding-x comments show-for-medium ">
                        <div class="commentCliente ">
                            <div class="comment bkMoradaClara ">
                                <p>Excelente servicio, llegaron puntual, la chica que me atendió muy respetuosa y los resultados me los entregaron en tiempo. Lo recomiendo mucho.
                                </p>
                                <div>
                                    <img alt="estrellas " src="../css/img/estrellas.png " />
                                    <p class="name ">Jess Godi</p>
                                </div>
                            </div>
                        </div>
                        <div class="commentCliente ">
                            <div class="comment bkMoradaClara ">
                                <p>De primera calidad el servicio y la atención, excelente equipo de trabajo, se nota la amabilidad y empatía del personal, tanto confiabilidad y confianza, en mi opinión super lo recomiendo.</p>
                                <div>
                                    <img alt="estrellas " src="../css/img/estrellas.png " />
                                    <p class="name ">Karla García</p>
                                </div>
                            </div>
                        </div>
                        <div class="commentCliente ">
                            <div class="comment bkMoradaClara ">
                                <p>Excelente servicio que me brindo el enfermero que vino a mi domicilio, se puso todo su equipo de protección y mis resultados me los entregaron en tiempo y forma tal y como dijeron que lo harían.</p>
                                <div>
                                    <img alt="estrellas " src="../css/img/estrellas.png " />
                                    <p class="name ">Gonzalo Francisco</p>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="large-12 medium-12 small-12 grid-padding-x comments show-for-small-only ">
                        <div id="slideshow">
                            <div>
                                <div class="comentario bkMoradaClara ">
                                    <p>Excelente servicio, llegaron puntual, la chica que me atendió muy respetuosa y los resultados me los entregaron en tiempo. Lo recomiendo mucho.
                                    </p>
                                    <div>
                                        <p class="name ">-Jess Godi</p>
                                        <div><img alt="estrellas " src="../css/img/estrellas.png " /></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="comentario bkMoradaClara ">
                                    <p>De primera calidad el servicio y la atención, excelente equipo de trabajo, se nota la amabilidad y empatía del personal, tanto confiabilidad y confianza, en mi opinión super lo recomiendo</p>
                                    <div>
                                        <p class="name ">-Karla García</p>
                                        <div><img alt="estrellas " src="../css/img/estrellas.png " /></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="comentario bkMoradaClara ">
                                    <p>Excelente servicio que me brindo el enfermero que vino a mi domicilio, se puso todo su equipo de protección y mis resultados me los entregaron en tiempo y forma tal y como dijeron que lo harían</p>
                                    <div>
                                        <p class="name ">Gonzalo Francisco</p>
                                        <div><img alt="estrellas " src="../css/img/estrellas.png " /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cell text-left bkSpacial ">
                <div class="grid-x ">
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center py-5 ">
                        <h2 class="morado "><strong>Our alies</strong></h2>
                    </div>
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center spaceX ">
                        <img class="logos " alt="aliados " src="../css/img/aliados.png " />
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="reveal py-5 border-radius" id="pop-up-message" data-reveal style="margin-top: 6%;">
            <button class="close-button btn-modal-close" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="py-3 px-3">
                <div class="text-center">
                    <div style="color: #4F2D83; font-size: 22px;" class="fw-bold">Next Saturday, August 27, we will not have home delivery or sample collection in our laboratory, we will restart normal operations on Monday, August 29, we ask you to please take your precautions and schedule your sample collection in advance. We offer you an apology and thank you for your understanding.</div>
                </div>
            </div>
        </div> -->

        <?php include 'template/footer.php'; ?>
    </div>
    <script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="../js/main/owl.carousel.min.js"></script>
    <script src="../js/pop-up.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script>
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
    </script>
</body>

</html>
