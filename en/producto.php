<?php
include '../lib/global.php';
$productos = simplexml_load_file("../api/datos/english.xml") or die("Error: No se puede cargar el fichero xml");
$isset = false;
foreach ($productos as $p) {
    if ($p->code == $_GET['_ref']) {
        $producto = $p;
        $isset = true;
    }
}
if ($isset == false) {
    header("Location: clinicos");
}
?>
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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?render=6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh"></script>
    <link rel="preconnect" href="https://www.google.com">
    <link rel="preconnect" href="https://www.gstatic.com" crossorigin>
    <!-- <link rel="stylesheet" href="../css/owl.carousel.min.css"> -->
</head>

<body>
    <div class="fluid" id="home">
        

        <div class="grid-x">
            <?php include 'template/header.php'; ?>
            <!-- Banners Home page -->
            <div class="cell grid-x spaceTop" style="height: auto; padding: 90px 0;">
                <div class="grid-x large-5 small-12 flex-center align-height-center flex-col">
                        <?php
                                if($producto->cat == 'covid' || $producto->cat == 'its'){
                                    echo '<div class="owl-carousel owl-theme img-prueba" id="carousel-gallery" style="">';
                                    foreach ($producto->img as $i) {
                                        echo '<div class="item">
                                                <img src="../css/' . $i . '" alt="" width="200px">
                                            </div>';
                                    }
                                    echo '</div>';
                                }else{
                                    echo ' <div class="img-prueba"><img src="../css/' . $producto->img .'" alt="" class="mx-2"></div>';
                                }
                                if($producto->cat != 'clinicos'){
                                    echo '<p class="py-3 large-8 fs-1 hide-for-small-only">*The images are descriptive</p>';
                                }
                        ?>
                </div>
                <div class="large-6 small-12 flex-center align-height-center clinicosAccordion">
                    <div class="infoClinicos">
                        <div class="price">$ <?php echo $producto->price; ?> MXN</div>
                        <div class="info">Includes sampling at home in CDMX and the metropolitan area</div>
                    </div>
                    <ul class="accordion" data-accordion>
                        <?php
                        foreach ($producto->description->question as $data) {
                            echo '<li class="accordion-item" data-accordion-item>
                                            <a href="#" class="accordion-title">
                                                <span>
                                                    <img src="../css/img/blog/chektahora-iso.svg" style="width: 25px;">
                                                </span>
                                            <div>' . $data->title . '</div>
                                            </a>
                                            <div class="accordion-content" data-tab-content>
                                                <p>' . $data->content . '</p>
                                            </div>
                                        </li>';
                        }
                        ?>
                    </ul>
                    <div class="footerInfo">
                        <div>
                            <?php
                                if ($_GET['_ref'] == '135bab4d-4515-4325-b5O6-8879T700p09977') {
                                    echo '<button class="btnYellow2">COMING SOON!</button>';
                                } else {
                                    echo '<button class="btnYellow2" action="add-card" plus-cart="' . $producto->id . '">Add to cart</button>';
                                }
                                if ($producto->cat == 'covid') {
                                    $url = 'covid-19';
                                }
                                if ($producto->cat == 'its' || $producto->cat == 'clinicos') {
                                    $url = $producto->cat;
                                }
                                echo '<a href="' . $url . '#como-funciona">How does it work</a>';
                            ?>
                        </div>
                    </div>
                    <?php
                        if($producto->cat != 'clinicos'){
                            echo '<p class="py-3 large-8 small-10 fs-1 show-for-small-only">*The images are descriptive</p>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <?php include 'template/footer.php'; ?>
    </div>
    <script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="../js/main/owl.carousel.min.js"></script>
    <script src="../js/pop-up.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script>
        $('#carousel-gallery').owlCarousel({
            nav: true,
            items: 1,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            navClass: [
                'owl-prev-gallery',
                'owl-next-gallery'
            ],
        })
    </script>
</body>

</html>