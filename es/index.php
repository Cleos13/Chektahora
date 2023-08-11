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
    <div>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNR8MBT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Imagen Pop-up</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="../css/img/pop.jpg" alt="imagen-pop-up">
                    </div>
                </div>
            </div>
        </div>

        <div class="fluid" id="home">

            <div class="grid-x main__content">
                <?php include 'template/header.php'; ?>
                <!-- Banners Home page -->
                <div class="cell spaceTop relative">
                    <div class="item">
                        <img src="../img/banners/desktop/Banners-Web-escritorio-Julio-23.jpg" class="hide-for-small-only show-for-medium" alt="" width="100%" carousel="img-1">
                        <img src="../img/banners/mobile/Banners-Web-Julio-23.jpg" class="hide-for-medium show-for-small" alt="" width="100%" carousel="img-1">
                    </div>
                </div>
                <!-- Banners Home page -->

                <div class="large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection my-4">
                    <h2 style="font-size: 35px;" class="morado">
                        <strong>KITS DE DIAGNÓSTICO DE INFECCIONES DE TRANSMISIÓN SEXUAL (ITS)</strong>
                    </h2>
                </div>

                <div class="product-container large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection">

                    <div class="product-item">
                        <h2 style="font-weight: bold; color: #662480;">KIT GOLD DETECTA 7 <br> ITS</h2>
                        <img src="../img/productos/Img_Kit_Glod.webp" alt="KIT GOLD DETECTA 7 ITS" class="llamativo">
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

                                 <p syle="color: red; font-size: 10px;">Este Kit se realiza por autotoma.<br>

                                Solicita tu asesoria médica vía telefónica o WhatsApp.</p>
                        </div>
                    </div>

                    <div class="product-item">
                        <h2 style="font-weight: bold; color: #662480;">KIT BLACK DETECTA 13 <br> ITS</h2>
                        <img src="../img/productos/Img_Kit_Black.webp" alt="KIT BLACK DETECTA 13 ITS" class="llamativo">
                        <p style="font-weight: bold; font-size: 28px; color:black;" class="price">$4,999</p>
                        <div class="buttons">
                            <a href="https://buy.stripe.com/4gweXf8Ho2vibTy8Dd" class="buy-button">Comprar</a>
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
                        <img src="../img/productos/Img_Kit_Platinum.webp" alt="KIT PLATINUM DETECTA 12 ITS" class="llamativo">
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
                        <img src="../img/productos/Img_Kit_VPH.webp" alt="Producto 4" class="llamativo">
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

                <div class="large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection my-4">
                    <h2 class="morado"><strong>KITS DE DIAGNÓSTICO DE VIRUS RESPIRATORIOS</strong></h2>
                </div>

                <div class="product-container large-12 medium-12 small-12 grid-padding-x text-center align-self-middle spaceSection">

                    <div class="product-item">
                        <h2 style="font-weight: bold; color: #662480">Prueba PCR para detección de influenza + COVID</h2>
                        <img src="../img/productos/Img_Kit_Anticuerpos.webp" alt="Producto 1" class="llamativo">
                        <p style="font-weight: bold; font-size: 28px; color:black;" class="price"> $1,399</p>
                        <div class="buttons">
                            <a href="https://buy.stripe.com/6oE02le1I3zmaPu6s2" class="buy-button">Comprar</a>
                            <a href="#" class="more-button">Ver más</a>
                        </div>
                    </div>

                    <div class="product-item">
                        <h2 style="font-weight: bold; color: #662480">Prueba PCR para detección de COVID</h2>
                        <img src="../img/productos/Img_Kit_Covid-19.webp" alt="Producto 2" class="llamativo">
                        <p style="font-weight: bold; font-size: 28px; color:red;" class="price"><del style="color: black;">$1,100</del> $599</p>
                        </p>
                        <div class="buttons">
                            <a href="https://buy.stripe.com/fZe5mFbTA0nae1GcQp" class="buy-button">Comprar</a>
                            <a href="#" class="more-button">Ver más</a>
                        </div>
                    </div>

                    <div class="product-item">
                        <h2 style="font-weight: bold; color: #662480">Prueba de Antígenos para detección de COVID</h2>
                        <img src="../img/productos/Img_Kit_Covid-Influeza.webp" alt="Producto 3" class="llamativo">
                        <p style="font-weight: bold; font-size: 28px; color:black;" class="price"> $599</p>
                        <div class="buttons">
                            <a href="https://buy.stripe.com/6oEbL38Hoc5S3n23fS" class="buy-button">Comprar</a>
                            <a href="#" class="more-button">Ver más</a>
                        </div>
                    </div>

                    <div class="product-item">
                        <h2 style="font-weight: bold; color: #662480">Prueba de Anticuerpos para detección de COVID</h2>
                        <img src="../img/productos/Img_Kit_Covid-19.webp" alt="Producto 4" class="llamativo">
                        <p style="font-weight: bold; font-size: 28px; color:black;" class="price">$1,050</p>
                        <div class="buttons">
                            <a href="https://buy.stripe.com/cN28yR0aSee05va4jI" class="buy-button">Comprar</a>
                            <a href="#" class="more-button">Ver más</a>
                        </div>
                    </div>

                </div>

                <div class="cell text-left spaceSection banner_inmunochek mt-3">
                    <div class="grid-x ">
                        <div class="large-12 medium-12 grid-padding-x mb-3 " style="text-align: center">
                            <div class="contenido ">
                                <a href="https://www.inmunochek.com/" class="w3-yellow w3-border w3-round-large">
                                    Conoce Más
                                    <!-- <button type="button" class="w3-button w3-yellow w3-border w3-round-large" style="vertical-align: bottom">Enlace</button> -->
                                </a>
                                <img src="../img/banners/desktop/Banner-Chekt-x-Inmuno-web.webp" class="show-for-large" alt="inmunocheck">
                                <img src="../css/img/banners/desktop/Banner-Web.jpg" class="show-for-small hide-for-large" alt="inmunocheck">
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
                                    <img alt="ITS " src="../css/img/iconos/caja.png " width="40%" />
                                    <p class="dato text-center count ">+80,000</p>
                                    <p>Kits de ITS en México</p>
                                </li>
                                <li>
                                    <img alt="ITS " src="../css/img/iconos/virus.png " width="40%" />
                                    <p class="dato t ext-center count ">+50000</p>
                                    <p>Pruebas de COVID-19 </p>
                                </li>
                                <li>
                                    <img alt="ITS " src="../css/img/iconos/resultados.png " width="40%" />
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
                                        <img alt=" " src="../css/img/paso1.png " />
                                        <p class="text-left "><strong>1.- Selecciona el kit o prueba que necesites</strong></p>
                                        <p class="text-left ">Opta por el kit o prueba que necesites, elige la cantidad y da clic en “añadir al carrito”.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="text-center ">
                                        <img alt=" " src="../css/img/paso2.png " />
                                        <p class="text-left "><strong>2.- Llena tus datos </strong></p>
                                        <p class="text-left ">Llena los datos que se te indican en cada uno de los campos y selecciona el método de compra.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="text-center ">
                                        <img alt=" " src="../css/img/paso3.png " />
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
                                        <img alt="estrellas " src="../css/img/estrellas.png " />
                                        <p class="name ">Jess Godi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="commentCliente ">
                                <div class="comment bkMoradaClara ">
                                    <p>De primera calidad el servicio y la atención, excelente equipo de trabajo, se nota la amabilidad y empatía del personal, tanto confiabilidad.</p>
                                    <div class="comment__footer">
                                        <img alt="estrellas " src="../css/img/estrellas.png " />
                                        <p class="name ">Karla García</p>
                                    </div>
                                </div>
                            </div>
                            <div class="commentCliente ">
                                <div class="comment bkMoradaClara ">
                                    <p>Excelente servicio que me brindo el enfermero que vino a mi domicilio, se puso todo su equipo de protección y mis resultados me los entregaron.</p>
                                    <div class="comment__footer">
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
                        <div class="large-12 medium-12 small-12 grid-padding-x text-center spaceX ">
                            <h2 class="morado my-3">
                                <strong>NUESTROS ALIADOS</strong>
                            </h2>
                            <img class="logos " alt="aliados " src="../img/banners/desktop/banner-aliados.webp" />
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

        <!-- <script> ( function (){ var  s = document.createElement( "script" ) ; s.setAttribute( "cuenta-datos" , "mWr7pnNPQK" ) ; s. setAttribute( "src", "https://cdn.userway.org/widget.js" ) ; document.body.appendChild(s); })();</script>  -->
        <!-- <noscript> Habilite JavaScript para garantizar  <a href =" https://userway.org " > accesibilidad del sitio web </a></noscript> -->
        <script>
            // Obtén todos los botones "Ver más"
            var moreButtons = document.querySelectorAll(".more-button");

            // Recorre cada botón y agrega un controlador de eventos clic
            moreButtons.forEach(function(button) {
                button.addEventListener("click", function(event) {
                    event.preventDefault(); // Evita el comportamiento predeterminado del enlace

                    // Encuentra el contenedor del producto más cercano
                    var productItem = button.closest(".product-item");
                    // Encuentra el elemento de información adicional dentro del contenedor del producto
                    var additionalInfo = productItem.querySelector(".additional-info");

                    // Alterna la visibilidad de la información adicional al hacer clic en el botón
                    if (additionalInfo.style.display === "none") {
                        additionalInfo.style.display = "block";
                    } else {
                        additionalInfo.style.display = "none";
                    }
                });
            });
        </script>

</body>

</html>