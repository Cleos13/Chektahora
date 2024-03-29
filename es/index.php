<?php include '../lib/global.php'; ?>
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
    <link rel="stylesheet" href="../css/inicio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?render=6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh"></script>
    <link rel="preconnect" href="https://www.google.com">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://www.gstatic.com" crossorigin>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#myModal").modal();
        });
    </script>
  <!-- Event snippet for Vista de página de ChektAhora conversion page -->
  <script>
  gtag('event', 'conversion', {'send_to': 'AW-11048402014/zpuvCPaRvuEYEN74pJQp'});
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-473769696"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-473769696');
</script>


</head>

<body>
    <div>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNR8MBT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- Botón para abrir el pop-up -->
        <!-- Contenedor del pop-up 
        <div id="popup" class="popup-container">
        <div class="popup-content">
            <span class="close-button" onclick="closePopup()">&times;</span>
            <img class="popup-image" src="../css/img/GD_Popup_2023_ChektAhora Web.jpg" alt="Imagen">
        </div>
    </div>
        Contenedor del pop-up -->



        <div class="fluid" id="home">


            <div class="grid-x">
                <?php include 'template/header.php'; ?>
                <!-- Banners Home page -->
                <div class="cell spaceTop relative" style="margin: 0px 0;">
                    <?php
                    include 'master/banners.php';
                    $banners = getBanners('home');
                    echo '<div class="owl-carousel owl-theme" id="carousel-banner">';
                    /* echo '<div class="owl-carousel owl-theme" id="carousel-banner">
                        <div class="bannerHome item">
                                <div class="call">c
                                    <h1 class="home text-left"></h1>
                                    <p><strong>En ChektAhora</strong> a un sólo clic, obtén atención médica, diagnósticos oportunos y confiables.</p>
                                    <div class="orbitBTn grid-x large-12 small-12 py-1">
                                        <div class="mb-3 large-5 grid-x small-12 px-1">
                                            <a class="btn-banner small-12" href="its">KIT DE ITS</a>
                                        </div>
                                        <div class="mb-3 large-5 small-12 px-1">
                                            <a class="btn-banner-border px-1" href="covid-19"><span>PRUEBAS  COVID-19 </span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>'; */
                    foreach ($banners as $b) {
                        echo '<div class="item">
                                    <img src="../img/banners/desktop/Covers-Hot-Junio.webp" class="hide-for-small-only show-for-medium" alt="" width="100%" carousel="img-1">
                                    <img src="../img/banners/mobile/Covers-Junio-mobile.webp" class="hide-for-medium show-for-small" alt="" width="100%" carousel="img-1">
                                </div>';

                    }
                    foreach ($banners as $b) {
                        echo '<div class="item">
                                    <img src="../css/img/Banner-web-escritorio.png" class="hide-for-small-only show-for-medium" alt="" width="100%" carousel="img-1">
                                    <img src="../css/img/Banner-web-mobile.png" class="hide-for-medium show-for-small" alt="" width="100%" carousel="img-1">
                                </div>';
                    }
                    echo '</div>';
                    ?>
                </div>
                <!-- Banners Home page -->

                <!--  <div class="large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection">
                    <h2 style="font-size: 35px;" class="morado"><strong>KITS DE DIAGNÓSTICO DE INFECCIONES DE TRANSMISIÓN SEXUAL (ITS)</strong></h2>
                </div>

                <div class="product-container large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection">
                    <div class="product-item">
                        <h2 style="font-weight: bold; color: #662480;">KIT GOLD DETECTA 7 <br> ITS</h2>
                        <img src="../img/Producto-Kit-Gold-Sitio-Web.jpg" alt="Producto 1" class="llamativo">
                        <p style="font-weight: bold; font-size: 28px; color:black;" class="price">$2,720</p>
                        <div class="buttons">
                            <a href="https://buy.stripe.com/aEUbL3f5M3zm2iY7sC" class="buy-button">Comprar</a>
                            <a href="#" class="more-button">Ver más</a>
                        </div>
                        <div class="additional-info">
                            <h3 style="font-size: 20px; color: #4F2D83;">Procesamientos por PCR</h3>
                            <ul class="text-center">
                                <li>Clamidia</li>
                                <li>Gonorrea</li>
                                <li>Tricomoniasis</li>
                                <li>Mycoplasma Hominis</li>
                                <li>Mycoplasma Genitalium</li>
                                <li>Ureaplasma Urealyticum</li>
                                <li>Ureaplasma Parvum</li>
                            </ul>
                            <h3 style="font-size: 20px; color: #4F2D83;">El KIT incluye</h3>
                            <ul>
                                <li>1 Hisopo o 1 Cytobrush (Kit vulva).</li>
                                <li>1 PeeCanter (Kit pene).</li>
                                <li>1 Tubo de recolección con medio de transporte.</li>
                                <li>1 Instructivo.</li>
                                <li>1 Bolsa de recolección.</li>
                                <li>1 Plantilla de etiquetas ID</li>
                            </ul>
                            <h3 style="font-size: 20px; color: #4F2D83;">Tipos de muestra</h3>
                            <p><img src="../img/CA_Iconos Sexo_Vulva_2023.webp" alt="Icono" style="width: 40px; height: 40px;"> Persona con vulva: Vaginal.</p>
                            <p><img src="../img/CA_Iconos Sexo_Pene_2023.webp" alt="Icono" style="width: 40px; height: 40px;"> Persona con pene: Orina.</p>
                            <p syle="color: red; font-size: 10px;">Estudios en otras zonas que no se incluyen en el kit, se cotizan por separado <br>

                                El Kit Incluye la toma de muestra y análisis clínicos para pene o vulva, si quieres incluir prueba anal o bucal, el costo es adicional.</p>
                        </div>
                    </div>

                    <div class="product-item">
                        <h2 style="font-weight: bold; color: #662480;">KIT BLACK DETECTA 13 <br> ITS</h2>
                        <img src="../img/Producto-Kit-Black-Sitio-Web.jpg" alt="Producto 2" class="llamativo">
                        <p style="font-weight: bold; font-size: 28px; color:black;" class="price">$4,999</p>
                        <div class="buttons">
                            <a href="https://buy.stripe.com/4gw02lbTAd9W0aQ9Gh" class="buy-button">Comprar</a>
                            <a href="#" class="more-button">Ver más</a>
                        </div>
                        <div class="additional-info">
                            <h3 style="font-size: 20px; color: #4F2D83;">Procesamientos por PCR</h3>
                            <ul>
                                <li>VPH</li>
                                <li>Clamidia</li>
                                <li>Gonorrea</li>
                                <li>Tricomoniasis</li>
                                <li>Mycoplasma Hominis</li>
                                <li>Mycoplasma Genitalium</li>
                                <li>Ureaplasma Urealyticum</li>
                                <li>Ureaplasma Parvum</li>
                            </ul>

                            <h3 style="font-size: 20px; color: #4F2D83;">Procesamientos por INMUNOCROMATOGRAFÍA</h3>
                            <ul>
                                <li>VPH</li>
                                <li>Sífilis</li>
                                <li>Herpes</li>
                                <li>Hepatitis B</li>
                                <li>Hepatitis C</li>
                            </ul>

                            <h3 style="font-size: 20px; color: #4F2D83;">El KIT incluye</h3>
                            <ul>
                                <li>1 Hisopo o 1 Cytobrush (Kit vulva).</li>
                                <li>1 PeeCanter (Kit pene).</li>
                                <li>1 Tubo de recolección para muestra sanguínea BD Vacutainer.</li>
                                <li>1 Aguja para punción venosa.</li>
                                <li>1 Cinta adhesiva circular.</li>
                                <li>1 Toallita desinfectante</li>
                                <li>2 Tubos de recolección con medio de transporte.</li>
                                <li>1 Bolsa de recolección.</li>
                                <li>1 Plantilla de etiquetas ID</li>
                            </ul>
                            <h3 style="font-size: 20px; color: #4F2D83;">Tipos de muestra</h3>
                            <p><img src="../img/CA_Iconos Sexo_Vulva_2023.webp" alt="Icono" style="width: 40px; height: 40px;"> Persona con Vulva: Cervical, vaginal y Sanguínea.</p>
                            <p><img src="../img/CA_Iconos Sexo_Pene_2023.webp" alt="Icono" style="width: 40px; height: 40px;"> Persona con pene: Orina, uretral y sanguínea.</p>
                            <p syle="color: red; font-size: 10px;">Estudios en otras zonas que no se incluyen en el kit, se cotizan por separado <br>

                                El Kit Incluye la toma de muestra y análisis clínicos para pene o vulva, si quieres incluir prueba anal o bucal, el costo es adicional.</p>
                        </div>
                    </div>

                    <div class="product-item">
                        <h2 style="font-weight: bold; color: #662480;">KIT PLATINUM DETECTA 12 ITS</h2>
                        <img src="../img/Producto-Kit-Platinum-Sitio-Web.jpg" alt="Producto 3" class="llamativo">
                        <p style="font-weight: bold; font-size: 28px; color:black;" class="price">$3,320</p>
                        <div class="buttons">
                            <a href="https://buy.stripe.com/8wMaGZcXE8TG2iY00c" class="buy-button">Comprar</a>
                            <a href="#" class="more-button">Ver más</a>
                        </div>
                        <div class="additional-info">
                            <h3 style="font-size: 20px; color: #4F2D83;">Procesamientos por PCR</h3>
                            <ul>
                                <li>Clamidia</li>
                                <li>Gonorrea</li>
                                <li>Tricomoniasis</li>
                                <li>Mycoplasma Hominis</li>
                                <li>Mycoplasma Genitalium</li>
                                <li>Ureaplasma Urealyticum</li>
                                <li>Ureaplasma Parvum</li>
                            </ul>

                            <h3 style="font-size: 20px; color: #4F2D83;">Procesamientos por INMUNOCROMATOGRAFÍA</h3>
                            <ul>
                                <li>VPH</li>
                                <li>Sífilis</li>
                                <li>Herpes</li>
                                <li>Hepatitis B</li>
                                <li>Hepatitis C</li>
                            </ul>


                            <h3 style="font-size: 20px; color: #4F2D83;">El KIT incluye</h3>
                            <ul>
                                <li>1 Hisopo o 1 Cytobrush (Kit vulva).</li>
                                <li>1 PeeCanter (Kit pene).</li>
                                <li>1 Tubo de recolección para muestra sanguínea BD Vacutainer.</li>
                                <li>1 Aguja para punción venosa.</li>
                                <li>1 Cinta adhesiva circular.</li>
                                <li>1 Toallita desinfectante</li>
                                <li>2 Tubos de recolección con medio de transporte.</li>
                                <li>1 Bolsa de recolección.</li>
                                <li>1 Plantilla de etiquetas ID</li>
                            </ul>
                            <h3 style="font-size: 20px; color: #4F2D83;">Tipos de muestra</h3>
                            <p><img src="../img/CA_Iconos Sexo_Vulva_2023.webp" alt="Icono" style="width: 40px; height: 40px;"> Persona con Vulva: Cervical, vaginal y Sanguínea.</p>
                            <p><img src="../img/CA_Iconos Sexo_Pene_2023.webp" alt="Icono" style="width: 40px; height: 40px;"> Persona con pene: Orina, uretral y sanguínea.</p>
                            <p syle="color: red; font-size: 10px;">Estudios en otras zonas que no se incluyen en el kit, se cotizan por separado <br>

                                El Kit Incluye la toma de muestra y análisis clínicos para pene o vulva, si quieres incluir prueba anal o bucal, el costo es adicional.</p>
                        </div>
                    </div>

                    <div class="product-item">
                        <h2 style="font-weight: bold; color: #662480;">KIT <br> VPH</h2>
                        <img src="../img/Producto-Kit-VPH-Sitio-Web.jpg" alt="Producto 4" class="llamativo">
                        <p style="font-weight: bold; font-size: 28px; color:black;" class="price">$2,620</p>
                        <div class="buttons">
                            <a href="https://buy.stripe.com/00g6qJ2j0d9W3n214h" class="buy-button">Comprar</a>
                            <a href="#" class="more-button">Ver más</a>
                        </div>
                        <div class="additional-info">
                            <h3 style="font-size: 20px; color: #4F2D83;">Procesamientos por PCR</h3>
                            <ul>
                                <h3 style="font-size: 20px; color: #4F2D83;">Genotipos de Alto Riesgo</h3>
                                <li>16,18,26,31,33,35,39,45,51,52,53,56,58,59,66,68,69,73,82.</li>
                                <h3 style="font-size: 20px; color: #4F2D83;">Genotipos de Bajo Riesgo</h3>
                                <li>6,11,40,42,43,44,54,61,70.</li>
                            </ul>

                            <h3 style="font-size: 20px; color: #4F2D83;">Procesamientos por INMUNOCROMATOGRAFÍA</h3>
                            <ul>
                                <li>VPH</li>
                                <li>Sífilis</li>
                                <li>Herpes</li>
                                <li>Hepatitis B</li>
                                <li>Hepatitis C</li>
                            </ul>

                            <h3 style="font-size: 20px; color: #4F2D83;">El KIT incluye</h3>
                            <ul>
                                <li>1 Cytobrush (Kit Vulva).</li>
                                <li>1 Hisopo Uretral (Kit pene).</li>
                                <li>1 Tubo de recolección con medio de transporte.</li>
                                <li>1 Instructivo.</li>
                                <li>1 Bolsa de recolección</li>
                                <li>1 Plantilla de etiquetas ID</li>
                            </ul>
                            <h3 style="font-size: 20px; color: #4F2D83;">Tipos de muestra</h3>
                            <p><img src="../img/CA_Iconos Sexo_Vulva_2023.webp" alt="Icono" style="width: 40px; height: 40px;"> Persona con Vulva: Cervical.</p>
                            <p><img src="../img/CA_Iconos Sexo_Pene_2023.webp" alt="Icono" style="width: 40px; height: 40px;"> Persona con pene: Uretral.</p>
                            <p syle="color: red; font-size: 10px;">Estudios en otras zonas que no se incluyen en el kit, se cotizan por separado <br>

                                El Kit Incluye la toma de muestra y análisis clínicos para pene o vulva, si quieres incluir prueba anal o bucal, el costo es adicional.</p>
                        </div>
                    </div>

                </div>



                <div class="large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection">
                        <h2 class="morado"><strong>KITS DE DIAGNÓSTICO DE INFECCIONES DE TRANSMISIÓN SEXUAL (ITS) <b style="color:red;">PROMOCIÓN</b> </strong></h2>
                    </div>

                    <div class="product-container-2 large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection">
  <div class="product-item">
  <h2 style="font-weight: bold; color: #662480:">KIT BLACK<br> COMBO PAREJA</h2>
    <img src="../img/Producto-Kits-Black-Pareja-Sitio-Web.jpg" alt="Producto 1" class="llamativo">
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $7,999</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/7sIbL30aS6Ly8Hm2bG" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>
  
  <div class="product-item">
  <h2 style="font-weight: bold; color: #662480:">KIT PLATINUM  <br> COMBO PAREJA</h2>
    <img src="../img/Producto-Kits-Platinum-Pareja-Sitio-Web.jpg" alt="Producto 2" class="llamativo">
    <p style="font-weight: bold; font-size: 28px;" class="price">  <br> $5,312</p>
    <div class="buttons">
      <a href="https://buy.stripe.com/28obL36zg0naaPubNd" class="buy-button">Comprar</a>
      <a href="#" class="more-button">Ver más</a>
    </div>
  </div>
</div>-->







                <!--  <div class="large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection">
                    <h2 class="morado"><strong>KITS DE DIAGNÓSTICO DE VIRUS RESPIRATORIOS</strong></h2>
                </div>

                <div class="product-container large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection">
                    <div class="product-item">
                        <h2 style="font-weight: bold; color: #662480:">PRUEBA INFLUENZA + COVID<br> ITS</h2>
                        <img src="../img/Producto-Covid-19-Anticuerpos-Sitio-Web.jpg" alt="Producto 1" class="llamativo">
                        <p style="font-weight: bold; font-size: 28px; color:black;" class="price"> $1,399</p>
                        <div class="buttons">
                            <a href="https://buy.stripe.com/6oE02le1I3zmaPu6s2" class="buy-button">Comprar</a>
                            <a href="#" class="more-button">Ver más</a>
                        </div>
                    </div>

                    <div class="product-item">
                        <h2 style="font-weight: bold; color: #662480:">PRUEBA <br> PCR</h2>
                        <img src="../img/Producto-Covid-19-PCR-Sitio-Web.jpg" alt="Producto 2" class="llamativo">
                        <p style="font-weight: bold; font-size: 28px; color:red;" class="price"><del style="color: black;">$1,100</del> $599</p>
                        </p>
                        <div class="buttons">
                            <a href="https://buy.stripe.com/fZe5mFbTA0nae1GcQp" class="buy-button">Comprar</a>
                            <a href="#" class="more-button">Ver más</a>
                        </div>
                    </div>

                    <div class="product-item">
                        <h2 style="font-weight: bold; color: #662480:">PRUEBA <br> ANTÍGENOS</h2>
                        <img src="../img/Producto-Covid-19-Influenza-Sitio-Web.jpg" alt="Producto 3" class="llamativo">
                        <p style="font-weight: bold; font-size: 28px; color:black;" class="price"> $599</p>
                        <div class="buttons">
                            <a href="https://buy.stripe.com/6oEbL38Hoc5S3n23fS" class="buy-button">Comprar</a>
                            <a href="#" class="more-button">Ver más</a>
                        </div>
                    </div>

                    <div class="product-item">
                        <h2 style="font-weight: bold; color: #662480:">PRUEBA <br> ANTICUERPOS</h2>
                        <img src="../img/Producto-Covid-19-PCR-Sitio-Web.jpg" alt="Producto 4" class="llamativo">
                        <p style="font-weight: bold; font-size: 28px; color:black;" class="price">$1,050</p>
                        <div class="buttons">
                            <a href="https://buy.stripe.com/cN28yR0aSee05va4jI" class="buy-button">Comprar</a>
                            <a href="#" class="more-button">Ver más</a>
                        </div>
                    </div>

                </div>


                <div class="large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection">
                        <h2 class="morado"><strong>KITS DE DIAGNÓSTICO DE VIRUS RESPIRATORIOS</strong></h2>
                    </div>

            <div class="products-container">
  <div class="product-box">
    <img src="../img/2650.jpg" alt="Product 1" />
    <h3>PRUEBA INFLUENZA + COVID</h3>
    <p class="price">$1,399</p>
    <button class="buy-button"><a style="color: white;" href="https://buy.stripe.com/6oE02le1I3zmaPu6s2">Comprar Ahora</a></button>
  </div>
  <div class="product-box">
    <img src="../img/1100.jpg" alt="Product 2" />
    <h3>PRUEBA PCR</h3>
    <p class="price">$599</p>
    <button class="buy-button"><a style="color: white;" href="https://buy.stripe.com/fZe5mFbTA0nae1GcQp">Comprar Ahora</a></button>
  </div>
  <div class="product-box">
    <img src="../img/600.jpg" alt="Product 3" />
    <h3>PRUEBA ANTÍGENOS</h3>
    <p class="price">$599</p>
    <button class="buy-button"><a style="color: white;" href="https://buy.stripe.com/6oEbL38Hoc5S3n23fS">Comprar Ahora</a></button>
  </div>
  <div class="product-box">
    <img src="../img/1050.jpg" alt="Product 4" />
    <h3>PRUEBA ANTICUERPOS</h3>
    <p class="price">$1,050</p>
    <button class="buy-button"><a style="color: white;" href="https://buy.stripe.com/cN28yR0aSee05va4jI">Comprar Ahora</a></button>
  </div>
</div>


            -->



                <!--<div class="cell text-left">
                <div class="grid-x spaceSection">
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection">
                        <h2 class="morado"><strong>KITS DE DIAGNÓSTICO DE INFECCIONES DE TRANSMISIÓN SEXUAL (ITS)</strong></h2>
                    </div>
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection">
                        <h2 class="morado"><p class="moradito">NUESTROS KITS DETECTAN HASTA</p></h2>
                    </div>
                    <div class="grid-container py-5 grid-x large-12 small-12">
                        <div class="owl-carousel owl-theme grid-x large-10 small-12 mx-auto" id="carousel-products"> 
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
                                                            <button class="" plus-cart="' . $p['id'] . '">Añadir</button>
                                                        </div>
                                                        <div class="large-6 small-6 ver-mas-link tc-facet-header tc-toggle-show">
                                                            <button class="' . $p['id'] . '">Ver más</button>
                                                            
                                                        </div>
                                                        <div class="tc-facet tc-facet-open">
                                                            <br>
                                                            ' . $p['description'] . '
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
                < Banners Home page -->

                <div class="large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection my-4">
                    <h2 style="font-size: 35px;" class="morado">
                        <strong>KITS DE DIAGNÓSTICO DE INFECCIONES DE TRANSMISIÓN SEXUAL (ITS)</strong>
                    </h2>
                </div>

                <?php include './template/partials/products/its.php'; ?>

                <div class="large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection my-4">
                    <h2 class="morado"><strong>KITS DE DIAGNÓSTICO DE VIRUS RESPIRATORIOS</strong></h2>
                </div>

                <?php include './template/partials/products/covid-19.php'; ?>

                <div class="cell text-left spaceSection banner_inmunochek mt-3">
                    <div class="grid-x ">
                        <div class="large-12 medium-12 grid-padding-x mb-3 " style="text-align: center">
                            <div class="contenido ">
                                <a href="https://www.inmunochek.com/" target="_blank" class="w3-yellow w3-border w3-round-large">
                                    Conoce Más
                                    <!-- <button type="button" class="w3-button w3-yellow w3-border w3-round-large" style="vertical-align: bottom">Enlace</button> -->
                                </a>
                                <img src="../img/banners/desktop/Banner-Chekt-x-Inmuno-web.webp" class="show-for-large" alt="inmunocheck" style="display: block; margin: 0 auto;" width="1920" height="575">
                                <img src="../css/img/banners/mobile/Banner-Chekt-x-Inmuno-mobile.webp" class="show-for-small hide-for-large" alt="inmunocheck" style="display: block; margin: 0 auto;" width="768" height="1024">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cell text-left ">
                    <div class="grid-x ">
                        <div class="large-12 medium-12 small-12 grid-padding-x my-4">
                            <h2 class="morado text-center"><strong>NUESTROS NÚMEROS</strong></h2>
                        </div>
                        <div class="large-12 medium-12 small-12 grid-padding-x text-center ">
                            <p class="morado espacio ">Estamos convencidos que la mejor forma de cuidar tu salud</br>
                                es mediante la cultura de la prevención.</p>
                        </div>
                        <div class="large-12 medium-12 small-12 grid-padding-x info align-self-middle ">
                            <ul class="numeros " id="numbers ">
                                <li>
                                    <img alt="ITS " src="../css/img/iconos/caja.png " width="86" height="61" />
                                    <p class="dato text-center count ">+80,000</p>
                                    <p>Kits de ITS en México</p>
                                </li>
                                <li>
                                    <img alt="ITS " src="../css/img/iconos/virus.png " width="86" height="61" />
                                    <p class="dato t ext-center count ">+50000</p>
                                    <p>Pruebas de COVID-19 </p>
                                </li>
                                <li>
                                    <img alt="ITS " src="../css/img/iconos/resultados.png " width="86" height="61" />
                                    <p class="dato text-center count ">+100000</p>
                                    <p>Informes de resultados</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="cell py-5 ">
                    <div class="grid-x ">
                        <div class="large-12 medium-12 small-12 grid-padding-x covidPruebas text-left ">
                            <h3>Según la OMS se estima que en México hay un total de 3.76M</br> de casos de COVID-19 , <a href="covid-19">encuentra tu prueba</br> ideal, protégete y protege a los tuyos.</a></h3>
                        </div>
                    </div>
                </div>

                <div class="cell text-left spaceSection ">
                    <div class="grid-x ">
                        <div class="large-12 medium-12 small-12 grid-padding-x text-center ">
                            <h2 class="morado "><strong>¿Cómo funciona ChektAhora?</strong></h2>
                        </div>
                    </div>
                </div>

                <div class="cell text-left spaceSection ">
                    <div class="grid-x ">
                        <div class="large-13 medium-12 small-12 grid-padding-x ">
                            <ul class="comoFunciona ">
                                <li>
                                    <div class="text-center ">
                                        <img alt="Paso 1" src="../css/img/paso1.png " width="125" height="131" />
                                        <p class="text-left "><strong>1.- Selecciona el kit o prueba que necesites</strong></p>
                                        <p class="text-left ">Opta por el kit o prueba que necesites, elige la cantidad y da clic en “añadir al carrito”.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="text-center ">
                                        <img alt="Paso 2" src="../css/img/paso2.png " width="125" height="131" />
                                        <p class="text-left "><strong>2.- Llena tus datos </strong></p>
                                        <p class="text-left ">Llena los datos que se te indican en cada uno de los campos y selecciona el método de compra.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="text-center ">
                                        <img alt="paso 3" src="../css/img/paso3.png " width="125" height="131" />
                                        <p class="text-left "><strong>3.- Recibe tu comprobante </strong></p>
                                        <p class="text-left ">Recibirás tu comprobante de compra en el correo que nos hayas proporcionado, no lo pierdas.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="cell text-left spaceSection ">
                    <div class="grid-x ">
                        <div class="large-12 medium-12 small-12 grid-padding-x align-self-middle text-center py-3 ">
                            <h2 class="morado px-1 "><strong>¿Qué dicen nuestros clientes?</strong></h2>
                        </div>
                        <div class="large-12 medium-12 small-12 grid-padding-x comments show-for-medium ">
                            <div class="commentCliente ">
                                <div class="comment bkMoradaClara ">
                                    <p>Excelente servicio, llegaron puntual, la chica que me atendió muy respetuosa y los resultados me los entregaron en tiempo. Lo recomiendo mucho.
                                    </p>
                                    <div class="comment__footer">
                                        <img alt="estrellas " src="../css/img/estrellas.png " width="146" height="22" />
                                        <p class="name ">Jess Godi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="commentCliente ">
                                <div class="comment bkMoradaClara ">
                                    <p>De primera calidad el servicio y la atención, excelente equipo de trabajo, se nota la amabilidad y empatía del personal, tanto confiabilidad.</p>
                                    <div class="comment__footer">
                                        <img alt="estrellas " src="../css/img/estrellas.png " width="146" height="22" />
                                        <p class="name ">Karla García</p>
                                    </div>
                                </div>
                            </div>
                            <div class="commentCliente ">
                                <div class="comment bkMoradaClara ">
                                    <p>Excelente servicio que me brindo el enfermero que vino a mi domicilio, se puso todo su equipo de protección y mis resultados me los entregaron.</p>
                                    <div class="comment__footer">
                                        <img alt="estrellas " src="../css/img/estrellas.png " width="146" height="22" />
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
                                            <div><img alt="estrellas " src="../css/img/estrellas.png " width="146" height="22" /></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="comentario bkMoradaClara ">
                                        <p>De primera calidad el servicio y la atención, excelente equipo de trabajo, se nota la amabilidad y empatía del personal, tanto confiabilidad y confianza, en mi opinión super lo recomiendo</p>
                                        <div>
                                            <p class="name ">-Karla García</p>
                                            <div><img alt="estrellas " src="../css/img/estrellas.png " width="146" height="22" /></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="comentario bkMoradaClara ">
                                        <p>Excelente servicio que me brindo el enfermero que vino a mi domicilio, se puso todo su equipo de protección y mis resultados me los entregaron en tiempo y forma tal y como dijeron que lo harían</p>
                                        <div>
                                            <p class="name ">Gonzalo Francisco</p>
                                            <div><img alt="estrellas " src="../css/img/estrellas.png " width="146" height="22" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cell text-left bkSpacial ">
                    <div class="grid-x ">
                        <div class="large-12 medium-12 small-12 grid-padding-x text-center spaceX ">
                            <h2 class="morado my-3">
                                <strong>NUESTROS ALIADOS</strong>
                            </h2>
                            <img class="logos " alt="aliados " src="../img/banners/desktop/banner-aliados.webp" style="display: block; margin: 0 auto;" width="2560" height="1067" />
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
            localStorage.removeItem('cart');
            localStorage.removeItem('cart_update');
            localStorage.removeItem('stock');
            localStorage.removeItem('stock_update');
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
            $('#carousel-products-resp').owlCarousel({
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
            $('#carousel-products-clinicos').owlCarousel({
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
            // $(document).ready(function(){
            // $(".less").click(function(){
            //     $("p").slideUp();
            // });
            // $(".more").click(function(){
            //     $("p").slideDown();
            // });
            // });
            $('.tc-facet').hide();
            $(document).ready(function() {
                $(".tc-facet-header").on("click", function(e) {
                    $(this).toggleClass("tc-toggle-show");
                    $(this).toggleClass("tc-toggle-hide");
                    $(this).next(".tc-facet").slideToggle();
                });
            });
        </script>
        <style>
            .contenido .w3-button {
                position: absolute !important;

                width: 100px;
                margin-left: -50% !important;
                bottom: 0px !important;
            }

            @media all and (min-width: 400px) and (max-width: 1000px) {
                .itsMorado {
                    /*background: url(../css/img/banners/desktop/banner-web.jpg) no-repeat 0 0;*/
                    color: #4F2D83;
                    position: relative;
                    width: 100%;
                    height: 555px;
                    background-size: cover;
                }
            }

            @media (max-width:700px) and (min-width:500px) {
                .morado {
                    font-size: 1.5rem !important;
                }
            }
        </style>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

        <script src="script.js">
            function mostrarPopup() {
                document.getElementById("popup").style.display = "flex";
            }

            function ocultarPopup() {
                document.getElementById("popup").style.display = "none";
            }
        </script>

        <script>
            // Función para abrir el pop-up automáticamente al cargar la página
            window.onload = function() {
                openPopup();
            }

            // Función para abrir el pop-up
            function openPopup() {
                document.getElementById('popup').style.display = 'block';
            }

            // Función para cerrar el pop-up
            function closePopup() {
                document.getElementById('popup').style.display = 'none';
            }

            // Cierra el pop-up si se hace clic en el fondo oscuro
            document.getElementById('popup').addEventListener('click', function(e) {
                if (e.target === this) {
                    closePopup();
                }
            });
        </script>

        <!-- <script> ( function (){ var  s = document.createElement( "script" ) ; s.setAttribute( "cuenta-datos" , "mWr7pnNPQK" ) ; s. setAttribute( "src", "https://cdn.userway.org/widget.js" ) ; document.body.appendChild(s); })();</script>  -->
        <!-- <noscript> Habilite JavaScript para garantizar  <a href =" https://userway.org " > accesibilidad del sitio web </a></noscript> -->
        <?php include './template/partials/scripts/more-btn.php'; ?>

</body>


</html>