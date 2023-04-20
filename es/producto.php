<?php
include '../lib/global.php';
include '../lib/config.php';
global $conn;
$id = $_GET['_ref'];
$get = $conn->query("SELECT * FROM products WHERE id = '$id'");
$producto = $get->fetch_assoc();
//$productos = simplexml_load_file("../api/datos/español.xml") or die("Error: No se puede cargar el fichero xml");
if (empty($producto)) {
    header("Location: clinicos");
}else{
    $get_images = $conn->query("SELECT * FROM images_product WHERE id_product='$id'");
    $images_product = $get_images->fetch_all(MYSQLI_ASSOC);

    $get_questions = $conn->query("SELECT * FROM questions_product WHERE id_product = '$id'");
    $questions = $get_questions->fetch_all(MYSQLI_ASSOC);
}
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
    <link rel="preconnect" href="https://www.google.com">
    <link rel="preconnect" href="https://www.gstatic.com" crossorigin>
    <!-- <link rel="stylesheet" href="../css/owl.carousel.min.css"> -->
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
            <div class="cell grid-x spaceTop" style="height: auto; padding: 90px 0;">
                <div class="grid-x large-5 small-12 flex-center align-height-center flex-col">

                    <?php
                        if(!empty($images_product)){
                            echo '<div class="owl-carousel owl-theme img-prueba" id="carousel-gallery" style="">';
                            foreach ($images_product as $i) {
                                echo '<div class="item">
                                                    <img src="../img/products/' . $i['img'] . '" alt="" width="200px">
                                                </div>';
                            }
                            echo '</div>';
                        }
                    ?>
                    <p class="py-3 large-8 small-10 fs-1 hide-for-small-only">* Las imagenes son descriptivas</p>
                </div>
                <div class="large-6 small-12 flex-center align-height-center clinicosAccordion">
                    <div class="infoClinicos">
                        <div class="price">$ <?php echo $producto['price']; ?> MXN</div>
                        <div class="info">Incluye toma de muestra a domicilio en CDMX y área metropolitana</div>
                    </div>
                    <ul class="accordion" data-accordion>
                        <?php
                        foreach ($questions as $question) {
                            echo '<li class="accordion-item" data-accordion-item>
                                            <a href="#" class="accordion-title">
                                                <span>
                                                    <img src="../css/img/blog/chektahora-iso.svg" style="width: 25px;">
                                                </span>
                                            <div>' . $question['title'] . '</div>
                                            </a>
                                            <div class="accordion-content" data-tab-content>
                                                <p>' . $question['content'] . '</p>
                                            </div>
                                        </li>';
                        }
                        ?>
                    </ul>
                    <div class="footerInfo">
                        <div>
                            <?php
                            if ($_GET['_ref'] == '135bab4d-4515-4325-b5O6-8879T700p09977') {
                                echo '<button class="btnYellow2">¡PROXIMAMENTE!</button>';
                            } else {
                                echo '<button class="btnYellow2" action="add-card" plus-cart="' . $producto['id'] . '">Añadir a carrito</button>';
                            }
                            if ($producto['category'] == 'covid') {
                                $url = 'covid-19';
                            }
                            if ($producto['category'] == 'its' || $producto['category'] == 'clinicos') {
                                $url = $producto['category'];
                            }
                            echo '<a href="' . $url . '#como-funciona">Como funciona</a>';
                            ?>
                        </div>
                    </div>
                    <p class="py-3 large-8 small-10 fs-1 show-for-small-only">* Las imagenes son descriptivas</p>
                </div>
            </div>
        </div>
        <?php include 'template/footer.php'; ?>
    </div>
    <script src="../js/main.min.js?update=<?php echo constant('UPDA TE'); ?>"></script>
    <script src="../js/pop-up.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="../js/main/owl.carousel.min.js"></script>
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