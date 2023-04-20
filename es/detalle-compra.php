<?php
include '../lib/global.php';
require '../pasarelas/token.php';
?>
<!doctype html>
<html class="no-js" lang="es">

<head>
   
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Prueba discreta a domicilio para detección de infecciones de transmisión sexual. Con certificado ISO 9000 y COFEPRIS, médicos altamente capacitados con tecnología de punta.">
    <meta http-equiv="cache-control" content="no-cache" />
    <title>ChektAhora</title>
    <?php include 'template/favicon.php'; ?>
    <link rel="stylesheet" href="../css/app.css?update=<?php echo constant('UPDATE'); ?>">
    <link rel="stylesheet" href="../css/select-flag.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?render=6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh"></script> 
    <script src="https://unpkg.com/imask"></script>
    <style>
        input[type=radio] {
            display: none;
        }

        #vulva {
            width: 50px;
            height: 50px;
            margin-right: 20px;
            background-image: url(../css/img/vulva.svg);
            background-repeat: no-repeat;
            background-size: 50px;
            cursor: pointer;
        }

        .checkbox_p_d {
            width: 30px;
            height: 30px;
            background-color: transparent;
            background-repeat: no-repeat;
            background-size: 50px;
            border: #4F2D83 1px solid;
            cursor: pointer;
            border-radius: 40px;
        }

        .checkbox_p_a {
            width: 30px;
            height: 30px;
            background-color: #4F2D83;
            background-repeat: no-repeat;
            background-size: 50px;
            border: #4F2D83 1px solid;
            cursor: pointer;
            border-radius: 40px;
        }

        #pene {
            width: 50px;
            height: 50px;
            margin-right: 20px;
            background-image: url(../css/img/pene.svg);
            background-repeat: no-repeat;
            background-size: 50px;
            cursor: pointer;
        }

        ._03:not(old)+label {
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        ._03:not(old)+label:before {
            content: '';
            width: 22px;
            height: 22px;
            background-size: cover;
            border-radius: 10px;
            cursor: pointer;
            vertical-align: top;
            display: inline-block;
            margin-right: 5px;
            position: absolute;
            right: 15px;
        }

        .hora-label-covid {
            position: relative;
            display: block;
            font-weight: bold;
            cursor: pointer;
            text-align: center;
            background-color: #E7E3EE !important;
            transition: background-color .15s ease-in-out;
            background-color: white;
            height: 40px;
            margin: 9px 10px !important;
        }

        .hora-label-covid:hover {
            background-color: #4F2D83 !important;
            color: #fff !important;
        }

        .hora-label-covid.invalid {
            background-color: #d87b7b !important;
            color: #fff !important;
        }
        .hora-label-covid.active {
            background-color: #4F2D83 !important;
            color: #fff !important;
        }

        .hora-input-covid {
            display: none;
        }
    </style>
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
    <div class="outer-loader">
        <div class="inner-loader-img">
        </div>
    </div>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNR8MBT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <div class="fluid formulariosDashboard">
        <div class="grid-x">
            <div class="cell text-center">
                <div class="top-bar stacked-for-medium spaceX">
                    <div class="top-bar-title mx-sm-auto">
                        <a href="index">
                            <img src="../css/img/logoChektahora.svg" width="200px">
                        </a>
                    </div>
                </div>
            </div>
            <div class="cell text-left spaceCard fondoMorado" space="cart-background">
                <div class="grid-x">
                    <div class="large-12 medium-12 small-12 py-1 grid-padding-x">
                        <h1 class="morado"></h1>
                        <ul class="detalles">
                            <li>
                                <div class="active mb-2"></div>
                                <p class="hide-for-small-only">Ordena tu prueba</p>
                            </li>
                            <li>
                                <div class="notActive mb-2"></div>
                                <p class="hide-for-small-only">Selecciona el método de pago</p>
                            </li>
                            <li>
                                <div class="notActive mb-2"></div>
                                <p class="hide-for-small-only">¡Espera tu compra!</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="grid-x flex-center">
                    <!-- car shopping -->
                    <div space="car" class="large-8 medium-12 small-12 grid-padding-x">
                        <div class="pb-3 px-3">
                            <div class="fs-6 fw-bold text-morado">Resumen de tu compra</div>
                        </div>
                        <ul class="carritoList" id="carritoList"></ul>
                        <div class="grid-x large-12 small-12 text-center fs-1 px-3 text-morado mb-3">
                            Nuestro equipo medico pueden ir a realizar tu toma de muestra sanguínea para tus KITS de ITS  o puedes asistir a nuestro laboratorio totalmente GRATIS.
                        </div>
                    </div>
                    <!-- form -->
                    <div space="form-data" class="large-11 medium-12 small-12 grid-padding-x pb-3 display-none">
                        <!-- <div class="py-3 px-3">
                            <div class="fs-6 fw-bold text-morado text-center">Por ultimo, llena tus datos</div>
                            <p class="text-morado text-center">Necesitamos que llenes tus datos para poder continuar con la compra en Chektahora y recibir tus resultados.</p>
                        </div> -->
                        <div class="large-12 medium-12 small-12 grid-padding-x card-details">
                            <form id="data-customer" class="fluid formularios" autocomplete="none">
                                <input type="hidden" name="id" value="<?php echo $reference_id; ?>">
                                <div class="grid-x grid-padding-x">
                                    <div class="grid-x large-12 small-12 px-1 py-2 mb-3">
                                        <div class="grid-x large-12 small-12 mb-3">
                                            <div class="small-12 px-1">
                                                <div class="fs-19px fw-bold text-morado text-center mb-3">Cuéntanos sobre ti</div>
                                            </div>
                                            <div class="large-7 small-12 px-1">
                                                <div class="large-12 small-12">
                                                    <input type="text" name="nombre" id="Nombre_completo" placeholder="Nombre completo" class="input" maxlength="80" required autocomplete="none">
                                                </div>
                                                <div class="cell text-end">
                                                    <p class="fs-1 text-morado">*Requerido</p>
                                                </div>
                                            </div>
                                            <div class="large-5 small-12 grid-x px-1">
                                                <div class="large-12 medium-12 small-12">
                                                    <input type="text" name="email" id="email" placeholder="Correo electrónico" class="input" maxlength="90" required autocomplete="none">
                                                </div>
                                                <div class="cell text-end">
                                                    <p class="fs-1 text-morado">*Requerido</p>
                                                </div>
                                            </div>
                                            <div class="large-5 small-12 px-1 grid-x mb-2">
                                                <div class="large-3 small-5">
                                                    <input id="lada" type="hidden" class="input" value="+52">
                                                </div>
                                                <div class="large-7 small-7 px-1" name="tel-alert">
                                                    <input type="text" name="telefono" id="telefono" placeholder="Número de Contacto" class="input" maxlength="15" minlength="9" required style="background: #fff !important;padding-left: 20px; border: 1px solid #4F2D83;color:#4F2D83!important; box-shadow: none;" autocomplete="none">
                                                    <div class="cell text-end">
                                                        <p class="fs-1 text-morado">*Requerido</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="large-7 small-12 grid-x mb-3">
                                                <div class="large-4 small-12 d-flex align-height-center mb-3 px-1">
                                                    <div class="fs-19px text-morado text-center fw-normal">Fecha de Nacimiento</div>
                                                </div>
                                                <div class="large-4 small-12 px-1 d-flex align-height-center mb-2">
                                                    <input type="text" class="input text-center" id="dp1" name="fecha" placeholder="DD/MM/AAAA" required autocomplete="none">
                                                </div>
                                                <div class="large-4 small-12 d-flex align-height-center mb-3">
                                                    <div class="fs-1 text-morado fw-normal mb-1 text-center">Coloca la fecha de forma correcta comenzando con el día, mes y año.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-x large-8 small-12 d-flex align-height-center flex-center display-none" space="its-option">
                                            <div class="large-7 small-12 px-1 mb-3">
                                                <div class="large-12 small-12 cell text-center">
                                                    <div class="fs-19px py-1 text-morado">Tienes antecedentes de una ITS</div>
                                                    <p class="fs-1 text-morado text-center">Toda tu información se encuentra segura, con este dato nuestros asesores médicos podrán asesorarte mejor en tus resultados</p>
                                                    <div class="cell text-end px-3">
                                                        <p class="fs-1 text-morado">*Requerido</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="large-4 small-12 px-1 d-flex align-height-center mb-3">
                                                <fieldset class="large-12 cell flex-center mb-3">
                                                    <span class="flex-center px-3">
                                                        <label class="textBox checkbox_p_d" id="checkbox_its_1" for="its_si" name="its-alert">
                                                            <input type="radio" name="its" value="Si" id="its_si">
                                                        </label>
                                                        <label class="text-morado d-flex align-height-center px-1">Si</label>
                                                    </span>
                                                    <span class="flex-center px-3">
                                                        <label class="textBox checkbox_p_d" id="checkbox_its_2" for="its_no" name="its-alert">
                                                            <input type="radio" name="its" value="No" id="its_no">
                                                        </label>
                                                        <label class="text-morado d-flex align-height-center px-1">No</label>
                                                    </span>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="large-4 small-12 px-1 align-height-center justify-content-center flex-col mb-2" id="space-peoples">
                                            <select name="cantidad_personas" class="input" style="background: transparent;padding-left: 20px; border: 1px solid #cacaca;" id="cantidad-personas">
                                                <option value="1" selected disabled>¿Tu compra es para alguien más?</option>
                                            </select>
                                            <div class="fs-1 text-morado text-center fw-normal mb-3">Llena los datos de forma correcta del la persona que recibirá los resultados</div>
                                        </div>
                                    </div>
                                    <div class="grid-x large-12 small-12 px-1 py-1 display-none" id="data_persona_ext">
                                    </div>
                                    <div class="grid-x large-12 small-12 px-1">
                                        <div class="small-12 px-1">
                                            <div class="fs-19px mb-3 text-morado text-center">¿En donde realizaremos tu toma de muestra?</div>
                                        </div>
                                        <div class="large-4 small-12 px-1">
                                            <input name="calle" type="text" id="right-label" placeholder="Calle" class="input" required maxlength="90" autocomplete="none">
                                        </div>
                                        <div class="large-2 medium-4 small-12 px-1">
                                            <input name="no_int" type="number" id="right-label" placeholder="#INT" class="text-center" maxlength="10" autocomplete="none">
                                        </div>
                                        <div class="large-2 medium-4 small-12 px-1">
                                            <input name="no_ext" type="number" id="no_ext" placeholder="#EXT" class="text-center" required maxlength="10" autocomplete="none">
                                        </div>
                                        <div class="large-4 small-12 px-1">
                                            <input name="colonia" type="text" id="right-label" placeholder="Colonia" class="input" required maxlength="50" autocomplete="none">
                                        </div>
                                    </div>
                                    <div class="grid-x large-12 small-12 px-1">
                                        <div class="large-4 medium-4 small-12 px-1 mb-3">
                                            <input name="codigo_postal" type="text" id="right-label" placeholder="Código postal" class="input" required maxlength="5" minlength="4" autocomplete="none">
                                        </div>
                                        <div class="large-4 small-12 px-1">
                                            <input name="municipio" type="text" id="right-label" placeholder="Municipio" class="" required maxlength="50" autocomplete="none">
                                        </div>
                                        <div class="large-4 small-12 px-1">
                                            <input name="estado" type="text" id="right-label" placeholder="Estado" class="" required maxlength="50" autocomplete="none">
                                        </div>
                                    </div>
                                    <div class="cell text-end">
                                        <p class="fs-1 text-morado">*Requerido</p>
                                    </div>
                                    <!-- Agenda toma de muestra -->
                                    <div class="grid-x large-12 small-12 display-none mb-3 px-1" space="date-covid">
                                        <div class="large-12 small-12 grid-x py-3">
                                            <div class="large-12 small-12 px-1 text-center">
                                                <h3 class="fs-19px fw-bold text-morado">Agenda tu toma de muestra</h3>
                                            </div>
                                            <div class="grid-x large-12 medium-12 small-12 d-flex justify-content-center py-3">
                                                <div class="large-4 small-12 px-3">
                                                    <div class="text-morado text-center fw-normal fs-17px mb-2" style="width: 80%; margin: auto;">Coloca la fecha de forma correcta comenzando con el día, mes y año.</div>
                                                </div>
                                                <div class="large-4 small-12 px-3 mb-2">
                                                    <input type="text" class="input" id="dp2" name="agenda-covid" placeholder="DD/MM/AAAA" autocomplete="none">
                                                    <div class="display-none" action="date-valid">
                                                        <p class="fs-1" style="color: #2dbe2b;">La fecha esta disponible para recolección.</p>
                                                    </div>
                                                    <div class="display-none" id="domingo">
                                                        <p class="fs-1" style="color: #ff0000;">Los domingos no tenemos horarios, puedes agendarlo para otro día.</p>
                                                    </div>
                                                    <div class="display-none" action="date-valid">
                                                        <p class="fs-1" style="color: #ff0000;">La fecha esta disponible para recolección.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid-x large-12 medium-12 small-12 d-flex justify-content-center py-3 mb-3 display-none" id="espacio-horarios-covid">
                                                <div class="large-4 small-12 px-1 flex-center">
                                                    <div class="text-morado fw-bold py-2 mb-2 fs-17px text-center">Horarios disponibles<br>en la fecha de tu toma<br>de muestra</div>
                                                </div>
                                                <div class="large-6 small-12 px-3 grid-x" id="horarios-agenda">
                                                   <!-- <div class="large-3 medium-3 small-12">
                                                        <input class="hora-input-covid _03" name="agenda-hora-covid" id="8_00" type="checkbox" value="8:00 AM" />
                                                        <label class="hora-label-covid flex-center" for="8_00">8:00 AM</label>
                                                    </div>-->
                                                    <div class="large-3 medium-3 small-12">
                                                        <input class="hora-input-covid _03" name="agenda-hora-covid" id="8_30" type="checkbox" value="8:30 AM" />
                                                        <label class="hora-label-covid flex-center" for="8_30">8:30 AM</label>
                                                    </div>
                                                    <div class="large-3 medium-3 small-12">
                                                        <input class="hora-input-covid _03" name="agenda-hora-covid" id="9_00" type="checkbox" value="9:00 AM" />
                                                        <label class="hora-label-covid flex-center" for="9_00">9:00 AM</label>
                                                    </div>
                                                    <div class="large-3 medium-3 small-12">
                                                        <input class="hora-input-covid _03" name="agenda-hora-covid" id="9_30" type="checkbox" value="9:30 AM" />
                                                        <label class="hora-label-covid flex-center" for="9_30">9:30 AM</label>
                                                    </div>
                                                    <div class="large-3 medium-3 small-12">
                                                        <input class="hora-input-covid _03" name="agenda-hora-covid" id="10_00" type="checkbox" value="10:00 AM" />
                                                        <label class="hora-label-covid flex-center" for="10_00">10:00 AM</label>
                                                    </div>
                                                    <div class="large-3 medium-3 small-12">
                                                        <input class="hora-input-covid _03" name="agenda-hora-covid" id="10_30" type="checkbox" value="10:30 AM" />
                                                        <label class="hora-label-covid flex-center" for="10_30">10:30 AM</label>
                                                    </div>
                                                    <div class="large-3 medium-3 small-12">
                                                        <input class="hora-input-covid _03" name="agenda-hora-covid" id="11_00" type="checkbox" value="11:00 AM" />
                                                        <label class="hora-label-covid flex-center" for="11_00">11:00 AM</label>
                                                    </div>
                                                    <div class="large-3 medium-3 small-12">
                                                        <input class="hora-input-covid _03" name="agenda-hora-covid" id="11_30" type="checkbox" value="11:30 AM" />
                                                        <label class="hora-label-covid flex-center" for="11_30">11:30 AM</label>
                                                    </div>
                                                    <div class="large-3 medium-3 small-12">
                                                        <input class="hora-input-covid _03" name="agenda-hora-covid" id="12_00" type="checkbox" value="12:00 PM" />
                                                        <label class="hora-label-covid flex-center" for="12_00">12:00 PM</label>
                                                    </div>
                                                  <div class="large-3 medium-3 small-12">
                                                        <input class="hora-input-covid _03" name="agenda-hora-covid" id="12_30" type="checkbox" value="12:30 PM" />
                                                        <label class="hora-label-covid flex-center" for="12_30">12:30 PM</label>
                                                    </div>
                                                    <div class="large-3 medium-3 small-12">
                                                        <input class="hora-input-covid _03" name="agenda-hora-covid" id="1_00" type="checkbox" value="1:00 PM" />
                                                        <label class="hora-label-covid flex-center" for="1_00">1:00 PM</label>
                                                    </div>
                                                    <div class="large-3 medium-3 small-12">
                                                        <input class="hora-input-covid _03" name="agenda-hora-covid" id="1_30" type="checkbox" value="1:30 PM" />
                                                        <label class="hora-label-covid flex-center" for="1_30">1:30 PM</label>
                                                    </div>
                                                    <div class="large-3 medium-3 small-12">
                                                        <input class="hora-input-covid _03" name="agenda-hora-covid" id="2_00" type="checkbox" value="2:00 PM" />
                                                        <label class="hora-label-covid flex-center" for="2_00">2:00 PM</label>
                                                    </div>
                                                    <div class="large-3 medium-3 small-12">
                                                        <input class="hora-input-covid _03" name="agenda-hora-covid" id="2_30" type="checkbox" value="2:30 PM" />
                                                        <label class="hora-label-covid flex-center" for="2_30">2:30 PM</label>
                                                    </div>
                                                    <div class="large-3 medium-3 small-12">
                                                        <input class="hora-input-covid _03" name="agenda-hora-covid" id="3_00" type="checkbox" value="3:00 PM" />
                                                        <label class="hora-label-covid flex-center" for="3_00">3:00 PM</label>
                                                    </div>
                                                    <div class="large-3 medium-3 small-12">
                                                        <input class="hora-input-covid _03" name="agenda-hora-covid" id="3_30" type="checkbox" value="3:30 PM" />
                                                        <label class="hora-label-covid flex-center" for="3_30">3:30 PM</label>
                                                    </div>
                                                    <div class="large-3 medium-3 small-12">
                                                        <input class="hora-input-covid _03" name="agenda-hora-covid" id="4_00" type="checkbox" value="4:00 PM" />
                                                        <label class="hora-label-covid flex-center" for="4_00">4:00 PM</label>
                                                    </div>
                                                    <div class="large-3 medium-3 small-12">
                                                        <input class="hora-input-covid _03" name="agenda-hora-covid" id="4_30" type="checkbox" value="4:30 PM" />
                                                        <label class="hora-label-covid flex-center" for="4_30">4:30 PM</label>
                                                    </div>
                                                    <div class="large-3 medium-3 small-12">
                                                        <input class="hora-input-covid _03" name="agenda-hora-covid" id="5_00" type="checkbox" value="5:00 PM" />
                                                        <label class="hora-label-covid flex-center" for="5_00">5:00 PM</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-x large-12 small-12 flex-center mb-3 display-none" id="message-covid">
                                                <div class="large-10 small-12 px-3 flex-center flex-col text-morado relative alert-date-covid">
                                                    <div class="absolute camp">
                                                        <img src="../css/img/amarilla.png" alt="" width="40px">
                                                    </div>
                                                    <div class="fs-17px text-center fw-bold">Tu toma de muestra se agenda el <span id="date-message-covid"></span> a las <span id="hora-message-covid"></span></div>
                                                    <div class="text-center">Puede haber una variación de 25 a 35 minutos en el horario seleccionado</div>
                                                </div>
                                            </div>
                                            <div class="grid-x large-12 small-12 flex-center mb-3 display-none" id="message-covid-hours">
                                                <div class="large-10 small-12 px-3 flex-center flex-col text-morado" style="height: 40px; background-color: #E7E3EE !important;">
                                                    <div class="text-center">El horario que ingresaste es incorrecto, ingresa un horario diferente</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-x large-12 small-12 px-3 py-1 flex-center">
                                        <div class="large-12 small-12 px-1 grid-x mb-3">
                                            <div class="large-12 small-12 fs-15px text-morado text-center">Por último,<br>necesitamos algunos datos extra para completar tu orden</div>
                                            <div class="large-3 small-10 mb-3" style="border-bottom: 1px solid #4F2D83;margin: 10px auto;"></div>
                                        </div>
                                        <div class="large-12 small-12 px-1 py-3 grid-x justify-content-center display-none" space="sexo-option">
                                            <div class="large-4 small-12 cell text-center mb-3 grid-x flex-center">
                                                <div class="large-12 fs-19px py-1 text-morado">Selecciona tu Sexo</div>
                                                <div class="large-12 fs-1 text-morado text-center fw-normal">Este dato únicamente lo usaremos para enviarte<br>los complementos de tu KIT</div>
                                            </div>
                                            <fieldset class="flex-center cell large-6 grid-x">
                                                <div class="textBox d-flex align-height-center px-1 py-1">
                                                    <label id="vulva" for="checkbox1">
                                                        <input type="radio" name="sexo" value="Persona con vulva" id="checkbox1" style="display: none;">
                                                    </label>
                                                    <label class="text-morado">Persona con vulva</label>
                                                </div>
                                                <div class="textBox d-flex align-height-center px-1 py-1">
                                                    <label id="pene" for="checkbox2">
                                                        <input type="radio" name="sexo" value="Persona con pene" id="checkbox2" style="display: none;">
                                                    </label>
                                                    <label class="text-morado">Persona con pene</label>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="grid-x large-6 medium-12 small-12 d-flex align-height-center mb-3 pb-3 display-none" style="height: 200px;" id="covid-input-sintomas">
                                            <div class="large-6 small-12 medium-12 px-2 flex-center flex-col">
                                                <div class="cell fw-normal text-morado fs-19px text-center py-1">¿Tienes algun sintoma covid?</div>
                                                <div class="fs-10px text-morado text-center fw-normal">Tu información se encuentra segura, con este dato nuestros asesores medicos podrán asesorarte mejor en tus resultados</div>
                                            </div>
                                            <div class="large-6 small-12 medium-12 text-center flex-center">
                                                <fieldset class="cell flex-center">
                                                    <span class="flex-center px-1">
                                                        <label class="textBox checkbox_p_d" id="checkbox_sint_1_" for="checkbox_sint_1">
                                                            <input type="radio" name="sintomas-option" value="Si" id="checkbox_sint_1">
                                                        </label>
                                                        <label class="text-morado d-flex align-height-center px-1">Si</label>
                                                    </span>
                                                    <span class="flex-center px-1">
                                                        <label class="textBox checkbox_p_d" id="checkbox_sint_2_" for="checkbox_sint_2">
                                                            <input type="radio" name="sintomas-option" value="No" id="checkbox_sint_2">
                                                        </label>
                                                        <label class="text-morado d-flex align-height-center px-1">No</label>
                                                    </span>
                                                </fieldset>
                                            </div>
                                            <div class="large-12 small-12 medium-12 px-1 display-none" space="input-sintomas">
                                                <input type="text" name="sintomas" placeholder="Ingresa aqui tus síntomas de covid" class="input" maxlength="65">
                                            </div>
                                        </div>
                                        <div class="grid-x large-6 medium-12 small-12 d-flex align-height-center mb-3 pb-3 display-none" style="height: 200px;" id="covid-input-pasaporte">
                                            <div class="large-7 small-12 medium-12 px-2 flex-center flex-col">
                                                <div class="cell fw-normal text-morado fs-19px text-center py-1">¿Tu resultado covid es para viaje?</div>
                                                <div class="fs-10px text-morado text-center fw-normal">Escribe el número de pasaporte que tendrá tu resultado<br></div>
                                            </div>
                                            <div class="large-5 small-12 medium-12 text-center flex-center">
                                                <fieldset class="cell flex-center">
                                                    <span class="flex-center px-1">
                                                        <label class="textBox checkbox_p_d" id="checkbox_pasa_1_" for="checkbox_pasa_1">
                                                            <input type="radio" name="pasaporte-option" value="Si" id="checkbox_pasa_1">
                                                        </label>
                                                        <label class="text-morado d-flex align-height-center px-1">Si</label>
                                                    </span>
                                                    <span class="flex-center px-1">
                                                        <label class="textBox checkbox_p_d" id="checkbox_pasa_2_" for="checkbox_pasa_2">
                                                            <input type="radio" name="pasaporte-option" value="No" id="checkbox_pasa_2">
                                                        </label>
                                                        <label class="text-morado d-flex align-height-center px-1">No</label>
                                                    </span>
                                                </fieldset>
                                            </div>
                                            <div class="large-12 small-12 medium-12 px-1 display-none py-3" space="input-pasaporte">
                                                <input type="text" name="pasaporte" placeholder="Escribe el número de pasaporte" class="input" maxlength="65">
                                            </div>
                                        </div>
                                        <div class="large-12 small-12  grid-x d-flex justify-content-center">
                                            <div class="grid-x large-6 medium-12 small-12 d-flex align-height-center display-none py-3" id="clinicos">
                                                <div class="large-7 small-12 medium-12 px-2 py-3 flex-center flex-col">
                                                    <div class="cell fw-normal text-morado fs-19px text-center py-1">¿Estás en tratamiento de antibiótico?</div>
                                                    <div class="fs-10px text-morado text-center fw-normal">Toda tu información se encuentra segura, con este dato nuestros asesores medicos podrán asesorarte mejor en tus resultados</div>
                                                </div>
                                                <div class="large-5 small-12 medium-12 text-center flex-center">
                                                    <fieldset class="cell flex-center">
                                                        <span class="flex-center px-1">
                                                            <label class="textBox checkbox_p_d" id="clinicos_true_" for="clinicos_true">
                                                                <input type="radio" name="clinicos-option" value="Si" id="clinicos_true">
                                                            </label>
                                                            <label class="text-morado d-flex align-height-center px-1">Si</label>
                                                        </span>
                                                        <span class="flex-center px-1">
                                                            <label class="textBox checkbox_p_d" id="clinicos_false_" for="clinicos_false">
                                                                <input type="radio" name="clinicos-option" value="No" id="clinicos_false">
                                                            </label>
                                                            <label class="text-morado d-flex align-height-center px-1">No</label>
                                                        </span>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="grid-x large-6 medium-12 small-12 d-flex align-height-center py-3">
                                                <div class="large-6 small-12 px-1 d-flex align-height-center">
                                                    <div class="fs-19px text-morado text-center fw-normal mb-3">¿Cómo nos encontraste?</div>
                                                </div>
                                                <div class="large-6 small-12 px-1">
                                                    <select name="conoce" class="input" style="padding-left: 20px; border: 1px solid #cacaca;">
                                                        <option value="Redes sociales" selected>Redes sociales</option>
                                                        <option value="Recomendación">Recomendación</option>
                                                        <option value="Anuncios">Anuncios</option>
                                                        <option value="Contacto">Contacto</option>
                                                        <option value="Otro">Otro</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="alert-error-dc display-none" id="alert-mobile">
                                        <div class="absolute camp"><img src="../css/img/roja.png" alt="" width="35px"></div>Verifica que los datos que ingresaste sean correctos
                                    </div>
                                    <div class="grid-x large-12 small-12 py-3">
                                        <div class="grid-x large-12 small-12 px-3">
                                            <div class="large-3"></div>
                                            <fieldset class="large-8 small-12 px-1 py-3">
                                                <div class="fw-bold text-morado grid-x">
                                                    <div class="px-1 large-1 small-2">
                                                        <label class="textBox checkbox_p_d" id="checkbox_terms" for="checkbox10">
                                                            <input type="radio" name="terms" id="checkbox10">
                                                        </label>
                                                    </div>
                                                    <div class="large-9 small-10">
                                                        <a class="px-1 text-morado" href="terminos-y-condiciones" style="border-bottom: 1px solid #4F2D83;">
                                                            Acepta nuestros términos y condiciones
                                                        </a>
                                                        <div class="textBox">
                                                            <label for="checkbox10" class="fs-1 text-morado px-1">Si desea saber más sobre cómo almacenamos sus datos, lea nuestra política de privacidad aquí y los términos y condiciones se pueden encontrar aquí.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="grid-x large-12 small-12 flex-center">
                                            <a class="btn-banner-2 px-3 display-none fw-bold" action="pay" disabled>Continuar</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- resume order -->
                    <div class="large-4 medium-12 small-12 grid-padding-x text-center" space="card-resume-order">
                        <div class="resumen resume-responsive">
                            <div class="grid-x flex-center">
                                <div class="large-12 medium-12 small-12 grid-padding-x py-3">
                                    <div class="morado fw-bold fs-7">Resumen de la orden</div>
                                </div>
                            </div>
                            <div class="grid-x flex-center">
                                <div class="large-4 medium-5 small-4 text-left">
                                    <p>Total Parcial</p>
                                    <p>Envío</p>
                                    <p>Descuento</p>
                                    <p>Total</p>
                                </div>
                                <div class="large-4 medium-5 small-4 text-right">
                                    <div id="total-parcial" class="fw-bold">
                                        <p><strong>$ 0</strong></p>
                                    </div>
                                    <div id="envio" class="fw-bold">
                                        <p><strong>$ 0</strong></p>
                                    </div>
                                    <div id="descuento">
                                        <p><strong>$ -0</strong></p>
                                    </div>
                                    <div id="total">
                                        <p><strong>$ 0</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-x py-1 flex-center">
                                <div class="large-10 medium-12 small-12 text-center">
                                    <div class="text-right mb-2 px-3">
                                        <a href="" class="btn-banner-2 display-none" action="back">Volver</a>
                                        <a href="" class="btn-banner-2 px-3" action="next">Continuar</a>
                                    </div>
                                    <div class="flex-center">
                                        <div class="text-info-pay text-center py-1 display-none" space="cart-empty" style="color:#ee4747b4!important;">Para poder pagar debes tener al menos un producto</div>
                                    </div>
                                    <div class="flex-center">
                                        <div class="text-info-pay text-center py-1 display-none" action="error-empty">Para poder pagar debes llenar todos los campos</div>
                                    </div>
                                    <div class="flex-center">
                                        <div class="text-info-pay text-center display-none py-1" action="error-envio">Para envio nacional de pruebas covid deben ser minimo 5</div>
                                    </div>

                                </div>
                            </div>
                            <div class="separator"></div>
                            <input type="hidden" name="envio" value="">
                            <div class="grid-x coupon" space="cupon">
                                <input type="text" placeholder="¿Tienes un código?" name="cupon" class="input-coupon medium-9 small-8" />
                            </div>
                            <div class="grid-x" style="justify-content: center;">
                                <div class="large-2 small-2" style="justify-content: end;display: flex;padding: 10px;">
                                    <img src="../css/img/carrito.svg" alt="" width="30px" class="text-right">
                                </div>
                                <div class="large-10 medium-6 small-10 text-left">
                                    <p class="envio">
                                        Envio gratuito en CDMX y área metropolitana
                                        <br> Consulta nuestros codigos postales participanes
                                    </p>
                                    <a style="color:#4F2D83;" href="https://docs.google.com/spreadsheets/d/1q0i7wDsg-R5VnDdTQB8hL9hvveOrzdIDOJFdtOAwnp4/edit#gid=1702465783">Ver ahora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cell text-left" space="plus">
                <div class="grid-x spaceX">
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center">
                        <h4 class="morado">Añade nuestros servicios a tu compra</h4>
                    </div>
                    <div class="grid-x large-12 small-12 flex-center">
                        
                        <div class="large-4 medium-6 small-12 display-none" space="servicio-visita">
                            <div class="otrosProductos fondoMorado">
                                <div><img alt="" src="../css/img/portafolio.png" /></div>

                                <p>Visita domiciliaria de una enfermera para tu toma de muestra sanguínea. </p>
                                <p>Pídale a una enfermera que vaya a tu casa y realice tu muestra sanguínea. </p>
                                <p><strong>$ 300 MXN</strong></br>CDMX área metropolitana</p>
                                <div class="text-right"><a href="#" data-open="service-its" class="btnPurple">Añadir</a></div>
                            </div>
                        </div>
                        <div class="large-4 medium-6 small-12">
                            <div class="otrosProductos fondoMorado">
                                <div><img alt="" src="../css/img/user.png" /></div>

                                <p style="padding: 52% 0;" class="text-center">Costos especiales</br> Para médicos</p>
                                <div class="text-right"><a href="mailto:contacto@chektahora.com" class="btnPurple">Contactar</a></div>
                            </div>
                        </div>
                        <div class="large-4 medium-6 small-12">
                            <div class="otrosProductos fondoMorado">
                                <div><img alt="" src="../css/img/user.png" /></div>

                                <p style="padding: 52% 0;" class="text-center">Costos especiales</br> Para clínicas</p>
                                <div class="text-right"><a href="mailto:contacto@chektahora.com" class="btnPurple">Contactar</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-cart">
            <div class="cell medium-12 small-12 text-center">
                <h6>¿Tienes alguna duda? Contáctate con nosotros <strong>(55) 7938 - 9364 / (55) 6071-8812</strong></h6>
            </div>
        </div>
    </div>
    <div class="reveal py-5 border-radius" id="service-its" data-reveal style="margin-top: 8%;">
        <button class="close-button btn-modal-close" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
        <div space="verify_cp_service">
            <div class="flex-center">
                <h1 class="title-modal text-center fw-bold text-morado">Necesitamos verificar tu código postal</h1>
            </div>
            <div class="grid-x large-12 small-12 py-3 flex-center">
                <div class="large-5 px-1">
                    <input type="text" placeholder="Codigo postal" class="input" name="cp_service" autocomplete="none">
                </div>
                <div class="large-3 px-1">
                    <a href="#" class="btn-banner-2" action="verify-cp" style="padding: .8rem 0.9rem !important;">Verificar</a>
                </div>
            </div>
            <div class="grid-x large-12 small-12 text-center fs-1 px-3 text-morado">
                Nuestro equipo medico pueden ir a realizar tu toma de muestra sanguínea con un costo extra para tus kits de ITS o puedes asistir a nuestro laboratorio totalmente GRATIS.
            </div>
        </div>
        <div class="py-3 display-none" space="invalid_cp_service">
            <div class="text-center">
                <div id="cp_error" style="color: #4F2D83; font-size: 16px;" class="fw-bold">Lo sentimos, tu código postal no se encuentra en nuestra zona de cobertura, solo CDMX y área metropolitana.</div>
            </div>
        </div>
    </div>
    <div class="reveal py-5 border-radius" id="alert-covid" data-reveal style="margin-top: 8%;">
        <button class="close-button btn-modal-close" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
        <div space="verify_cp_covid">
            <div class="flex-center">
                <h1 class="title-modal text-center fw-bold text-morado">Necesitamos verificar tu código postal</h1>
            </div>
            <div class="flex-center px-3">
                <h3 class="text-center fs-1 text-morado">La cobertura de recolección para <span class="fw-bold">pruebas covid</span> y <span class="fw-bold">clinicos</span> solo es valida dentro de CDMX, exterior minimo 5 piezas.</h3>
            </div>
            <div class="grid-x large-12 small-12 py-3 flex-center">
                <div class="large-5 px-1">
                    <input type="text" placeholder="Código postal" class="input" name="cp_covid" autocomplete="none">
                </div>
                <div class="large-3 px-1">
                    <a href="#" class="btn-banner-2 shadow" action="verify-cp-covid" style="padding: .8rem 0.9rem !important;">Verificar</a>
                </div>
            </div>
        </div>
        <div class="py-3 display-none" space="invalid_cp_covid">
            <div class="text-center">
                <div style="color: #4F2D83; font-size: 22px;" class="fw-bold">Lo sentimos, tu código postal no se encuentra en nuestra zona de cobertura.</div>
            </div>
            <div class="text-center py-3">
                <div style="color: #4F2D83; font-size: 16px;" class="fw-bold">Para zonas fuera de CDMX tu compra debe tener minimo 5 piezas de la categoría covid y clinicos.</div>
            </div>
            <div class="large-12 px-1 flex-center">
                <a href="#" class="btn-banner shadow" action="new-cp" style="padding: .8rem 0.9rem !important;">Ingresar uno nuevo</a>
            </div>
        </div>
    </div>
    <div class="reveal py-5 border-radius" id="alert-covid-none" data-reveal style="margin-top: 6%;">
        <button class="close-button btn-modal-close" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="py-3">
            <div class="text-center">
                <div style="color: #4F2D83; font-size: 22px;" class="fw-bold">Necesitas agregar una fecha diferente, sino tu toma de muestra se programara para el día de mañana.</div>
            </div>
        </div>
    </div>
    <div class="reveal py-5" id="alert-error-back" data-reveal style="margin-top: 6%; background-color: #E7E3EE !important; min-height: 170px !important;height: 170px !important;">
        <button class="close-button btn-modal-close" id="close-error" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="text-center py-3">
            <div style="color: #4F2D83; font-size: 18px;" class="fw-bold">Error inesperado, el sistema se reiniciara, porfavor llena el formulario nuevamente.</div>
        </div>
    </div>
    <div class="reveal py-5 border-radius" id="pop-up-promo" data-reveal style="margin-top: 6%;">
        <button class="close-button btn-modal-close" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="py-3 px-3">
            <div class="text-center">
                <div style="color: #4F2D83; font-size: 28px;" class="fw-bold">¡PROMOCIÓN DETECTADA!</div>
                <div style="color: #4F2D83; font-size: 14px;" class="display-none" id="promo-active-gift"></div>
                <div style="color: #4F2D83; font-size: 18px;" class="mt-2" id="promo-active"></div>
                <div style="color: red; font-size: 28px;" class="mt-2 fw-bold" id="promo-active-discount"></div>
            </div>
        </div>
    </div>
    <script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="../js/main/select-flag.min.js"></script>
    <script src="../js/main/detalle-compra.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
</body>

</html>