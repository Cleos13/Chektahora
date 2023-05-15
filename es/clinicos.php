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
            <div class="product-container-3">
  <div class="product-item">
    <img src="../img/Biometría-ematica.jpg" alt="Producto 1">
    <h2 style="font-weight: bold; color: #662480:">BIOMETRIA <br> HEMATICA</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $281.25</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/9AQdTb6zg0nae1G7xl" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>
  <!-- Repite el código del producto para los demás productos -->
  <div class="product-item">
    <img src="../img/dfisjio.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">COPROPARASITOSCOPICO 1 MUESTRA</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $180</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/14k6qJ9Ls9XKcXCdVK" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/get.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">COPROPARASITOSCOPICO 3 MUESTRAS</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $240</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/bIYdTb7Dk1re7DidVL" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/9.-Examen-general-de-orina.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">EXAMEN GENERAL DE ORINA</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $180</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/28o4iB6zg3zmcXC5pg" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/11.-Grupo-sanguineo-y-factor-RH.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">GRUPO SANGUINEO Y FACTOR RH</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $250</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/9AQ5mF0aS0na7Di8Bv" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/12.-Quimica-sanguinea-3-elementos.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">QUIMICA SANGUINEA DE 3 ELEMENTOS</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $279</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/8wM3ex4r84Dq7Dig3Y" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/13.-Quimica-sanguinea-4-elementos.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">QUIMICA SANGUINEA DE 4 ELEMENTOS</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $294.80</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/8wM16p4r8fi40aQ6tp" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/14.-Quimica-sanguinea-5-elementos.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">QUIMICA SANGUINEA DE 5 ELEMENTOS</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $316.80</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/8wM16p0aSc5S3n27xu" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/Químca-sanguinea-6-elementos.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">QUIMICA SANGUINEA DE 6 ELEMENTOS</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $325</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/00g3ex7Dk0na7Di6ts" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/16.-Quimica-sanguinea-12.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">QUIMICA SANGUINEA DE 12 ELEMENTOS</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price"> <br> $838</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/14kbL30aS6Ly9Lq5pq" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/17.-Quimica-sanguinea-28-elementos.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">QUIMICA SANGUINEA DE 28 ELEMENTOS</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price"> <br> $950</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/5kAdTbf5M0naaPucRR" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/18.-Quimica-sanguinea-de-32-elementos.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">QUIMICA SANGUINEA DE 32 ELEMENTOS</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $1,100</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/bIY9CV5vc2vi3n2aJL" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/19.-Reacciones-febriles.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">REACCIONES FEBRILES</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $350</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/7sI02lbTA4Dq2iY2dg" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/20.-Cultivo-de-heces.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">CULTIVO DE HECES (COPROCULTIVO)</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $385</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/dR62atg9Q2vi9Lqg47" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/Perfil-de-drogas-3.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">PERFIL 3 DROGAS DE ABUSO (AMP,THC,COC)</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price"> <br> $750</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/3cs16p1eWfi47Di5pu" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/22.-Perfil-enzimas-cardiaco.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">PERFIL ENZIMAS CARDIACO</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $330</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/7sI02lg9Q6Ly2iYdW1" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/27.-VIH-1-2-ANTICUERPOS-y-AG-p24.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">VIH 1-2 ANTICUERPOS Y AG P24 DE VIH1</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $380</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/9AQaGZ6zggm8cXCf07" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/23.-Perfil-drogas-de-abuso-(5).jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">PERFIL 5 DROGAS DE ABUSO (AMP,THC,COC,BAR,BDZ)</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price"> <br> $1,300</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/aEUdTb6zg5Hu0aQ9FM" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/28.-Perfil-de-lipidos.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">PERFIL DE LIPIDOS</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $310</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/14k2at3n41re1eUdW4" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/29.-Perfil-pancratico.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">PERFIL PANCREATICO</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price"> <br> $396</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/aEUbL30aSd9W5vabNX" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/4.-Biometria-hepatica.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">PERFIL HEPATICO</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $910</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/4gwcP79Ls6Ly5vacS2" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/31.-Depuracion-de-creatinina.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">DEPURACION DE CREATININA</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $237.50</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/dR67uN2j0gm89Lqg4f" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/32.-Depuracion-de-urea.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">DEPURACION DE UREA</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $260</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/28oaGZcXE2vi2iY9FT" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/33.-hemoglobina-glucosilada-(HB-A1C).jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">HEMOGLOBINA GLUCOSILADA (HB-A1C)</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $338</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/00gaGZ4r85HuaPu5pE" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/34.-Perfil-tiroideo.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">PERFIL TIROIDEO</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $630</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/7sI9CV4r8ee06ze4lB" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/35.-Calcio.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">CALCIO</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $210</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/aEU2ate1I5Hu8HmcS8" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/36.-Rpr-vdrl-sifilis.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">VDRL</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $250</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/00g5mF1eW3zmbTy2dv" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/40.-AC-anti-hepatitis.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">AC. ANTI Treponema pallidum</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $415</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/8wM4iB1eW5HuaPubO6" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/38.-Hepatitis-B-AG.-SUPERFICIE.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">Antigeno de Superficie de la hepatitis B</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $286</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/cN26qJg9Q6Ly2iYbO7" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/39.-Nitrogeno-ureico.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">NITROGENO UREICO (BUN)</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $180</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/9AQaGZ7Dk7PC4r62dy" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/30.-Perfil-hepatico.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">AC ANTI-HEPATITIS C</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $275</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/4gw16p9Ls4Dq1eU2dz" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/41.-Albumina.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">ALBUMINA</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $196</p>
    <div class="buttons">
      <a href="#" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/42.-Cultivo-de-orina.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">CULTIVO DE ORINA (UROCULTIVO)</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $380</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/bIYcP79Ls2vi2iY3hF" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/44.-tiempo-de-tromboplastina.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">TIEMPO DE PROTROMBINA</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $320</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/3cs6qJ0aS1re1eUbOc" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/44.-tiempo-de-tromboplastina.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">TIEMPO DE TROMBOPLASTINA  PARCIAL ACTIVADA</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price"> <br> $310</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/aEUg1j8Ho9XK0aQaK9" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/49.-Antigeno-prostatico.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">ANTIGENO PROSTATICO ESPECIFICO TOTAL</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $350</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/cN22at3n4d9We1G6tU" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/46.-Glucosa.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">GLUCOSA</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $160</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/28o6qJcXE0nae1Gf0r" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/47.-Electrolitos.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">ELECTROLITOS Na, K, Cl</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $375</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/dR66qJ5vc2vicXCf0s" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/52.-Insulina.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">INSULINA</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $220</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/cN202l9Lsb1O9LqdWr" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/53.-Exudado-faringeo.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">EXUDADO FARÍNGEO</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $385</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/cN2dTbcXE2viaPuaKg" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/50.-Citologia-cervico-vaginal.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">CITOLOGIA CERVICO - VAGINAL (PAPANICOLAOU)</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $360</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/14k2at5vc5Hu4r605z" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>

  <div class="product-item">
    <img src="../img/51.-Hormona-estimulante.jpg" alt="Producto 45">
    <h2 style="font-weight: bold; color: #662480:">HORMONA ESTIMULANTE DE TIROIDES TSH</h2>
    <p style="font-weight: bold; font-size: 28px;" class="price"><br> $180</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/3cs02lcXEfi41eU6tY" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
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