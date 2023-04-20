<?php
include '../lib/global.php';
$productos = simplexml_load_file("../api/datos/español.xml") or die("Error: No se puede cargar el fichero xml");
?>
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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?render=6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh"></script> 
    <!-- <link rel="stylesheet" href="../css/owl.carousel.min.css"> -->

    <!-- Event snippet for Vista de página (1) conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-11060448578/Qt00CN6GpIcYEMKahJop'});
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
    <div class="fluid" id="home">
        

        <div class="grid-x">
            <?php include 'template/header.php'; ?>
            <!-- Banners Home page -->
            <div class="cell spaceTop relative" style="margin-top: 100px;">
                <div class="owl-carousel owl-theme" id="carousel-banner">
                    <?php
                    include 'master/banners.php';
                    $banners = getBanners('clinicos');
                    foreach ($banners as $b) {
                        echo '<div class="item">
                                <img src="../img/banners/desktop/' . $b['img_desktop'] . '" class="hide-for-small-only show-for-medium" alt="" width="100%" carousel="img-1">
                                <img src="../img/banners/mobile/' . $b['img_mobile'] . '" class="hide-for-medium show-for-small" alt="" width="100%" carousel="img-1">
                            </div>';
                    }
                    ?>
                </div>
            </div>
            <!-- Banners Home page -->
            <div class="cell text-left" style="background-color: #fff; margin-bottom: 60px; margin-top: 50px">
                <div class="grid-x spaceSection relative">
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center productos-clinicos">
                        <h2 class="morado">Nuestros estudios clinicos</h2>
                        <div class="separator-purple"></div>
                    </div>
                    <div class="mx-auto section-products">
                        <div class="relative">
                            <input class="search-products" id="search-products">
                            <span class="absolute" style="right: 20px; top: 9px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </span>
                            <div class="absolute text-morado display-none" id="products-list">
                                <?php
                                global $items;
                                global $images;
                                global $conn;
                                foreach ($items as $p) {
                                    $img = '';
                                    foreach ($images as $image) {
                                        if ($image['id_product'] === $p['id']) {
                                            $img = $image['img'];
                                        }
                                    }
                                    if ($p['category'] === 'clinicos') {
                                        echo '<div class="mb-2 display-none">
                                                    <a href="producto?_ref=' . $p['id'] . '" class="fs-3">
                                                        <img src="../img/products/' . $img . '" alt="" width="25px" class="mx-2">
                                                        ' . $p['name'] . '</span>
                                                    </a>
                                                </div>';
                                    }
                                }
                                ?>
                            </div>

                        </div>
                    </div>
                    <div class="grid-container py-5 grid-x large-12 small-12">
                        <div class="owl-carousel owl-theme grid-x large-10 small-12 mx-auto" id="carousel-products">
                            <?php
                            foreach ($items as $p){
                                $img = '';
                                foreach ($images as $image){
                                    if($image['id_product'] === $p['id']){
                                        $img = $image['img'];
                                    }
                                }
                                if ($p['category'] === 'clinicos') {
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
                                                        <div class="large-6 small-6 ver-mas-link">
                                                            <a href="producto?_ref=' . $p['id'] . '">Ver más</a>
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
            <div class="cell text-left spaceSection como funciona-clinicos" id="como-funciona">
                <div class="large-12 medium-12 small-12 grid-padding-x text-center title-section">
                    <h2 class="morado">¿Cómo funciona?</h2>
                    <div class="separator-purple"></div>
                </div>
                <div class="grid-x cell mx-auto">
                    <div class="large-6 small-12 d-flex align-height-center flex-col text-morado">
                        <div class="grid-x d-flex justify-content-center">
                            <div class="large-1 icon-1">
                                <div class="d-flex flex-center mt-2">
                                    <img src="../css/img/clinicos/carrito.png" alt="" width="50px" class="mx-auto">
                                </div>
                            </div>
                            <div class="large-7 small-8 px-1 title">
                                <div class="fw-bold mt-2 fs-19px">ORDENA EN LINEA</div>
                                <br>
                                <div class="mb-3 body">Agrega los estudios que requieras al carrito de compra, posteriormente llena el formulario con todos tus datos</div>
                                <div class="separator mb-3"></div>
                            </div>
                        </div>
                        <div class="grid-x d-flex justify-content-center">
                            <div class="large-1 icon-2">
                                <div class="d-flex flex-center py-1">
                                    <img src="../css/img/clinicos/hoja.png" alt="" width="35px">
                                </div>
                            </div>
                            <div class="large-7 small-8 px-1 title">
                                <div class="fw-bold mt-2 fs-19px">CONFIRMACIÓN DE DATOS</div>
                                <br>
                                <div class="mb-3 body">Nuestros médicos se comunicaran contigo y agendaron tu estudio a domicilio o tu visita a nuestro aboratorio</div>
                                <div class="separator mb-3"></div>
                            </div>
                        </div>
                        <div class="grid-x d-flex justify-content-center mt-2">
                            <div class="large-1 icon-3">
                                <div class="d-flex flex-center">
                                    <img src="../css/img/clinicos/prueba.png" alt="" width="50px">
                                </div>
                            </div>
                            <div class="large-7 small-8 px-1 title">
                                <div class="fw-bold mt-2 fs-19px">TOMA DE MUESTRA</div>
                                <br>
                                <div class="mb-3 body">Nuestro equipo medico llegara a tu domicilio y realizara tu toma de muestra.<br><br>
                                    Enviaremos tus resultados mediante correo electrónico y WhatsApp.

                                </div>
                                <div class="separator"></div>
                            </div>
                        </div>
                    </div>
                    <div class="large-5 d-flex justify-content-center align-height-center hide-for-small-only">
                        <div>
                            <img src="../css/img/clinicos/como-funciona.png" alt="" width="460px">
                        </div>
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
                    <div style="color: #4F2D83; font-size: 22px;" class="fw-bold">El próximo 10 de mayo nuestro horario de atención a clientes y toma de muestras será de 9:00 am a 2:00 pm, les pedimos por favor programen sus tomas con anticipación.<br><br>Muchas gracias por su comprensión.<br><br>¡Muchas felicidades a todas las mamás en este día!</div>
                </div>
            </div>
        </div> -->

        <?php include 'template/footer.php'; ?>
    </div>
    <script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>

    <script src="../js/main/owl.carousel.min.js"></script>
    <script src="../js/pop-up.js?update=<?php echo constant('UPDATE'); ?>"></script>
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
            },
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        })
        $('#search-products').on('keyup', function() {
            var data = $('#products-list div');
            var _this = this;
            if ($(this).val().length >= 2) {
                $.each($('#products-list div'), function() {
                    if ($(this).html().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1) {
                        $(this).addClass('display-none');
                    } else {
                        $(this).removeClass('display-none');
                    }
                    if ($('#products-list div').not('.display-none').length == 0) {
                        $('#products-list').addClass('display-none');
                    } else {
                        $('#products-list').removeClass('display-none');
                    }
                })
            } else {
                $('#products-list').addClass('display-none');
            }
        });
    </script>
</body>

</html>