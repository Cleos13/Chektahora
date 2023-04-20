<?php
include '../lib/global.php';
require '../pasarelas/token.php';
?>
<!doctype html>
<html class="no-js" lang="es">

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
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache" />
    <title>Chektahora</title>
    <?php include 'template/favicon.php'; ?>
    <link rel="stylesheet" href="../css/app.css?update=<?php echo constant('UPDATE'); ?>">
    <link rel="stylesheet" href="../css/select-flag.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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

        /* .hora-input-covid:checked+label {
    background-color: #4F2D83 !important;
    color: #fff !important;
} */
        .hora-label-covid.active {
            background-color: #4F2D83 !important;
            color: #fff !important;
        }

        .hora-input-covid {
            display: none;
        }
    </style>
</head>

<body>
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
                                <p class="hide-for-small-only">Order your test</p>
                            </li>
                            <li>
                                <div class="notActive mb-2"></div>
                                <p class="hide-for-small-only">Select the payment method</p>
                            </li>
                            <li>
                                <div class="notActive mb-2"></div>
                                <p class="hide-for-small-only">Wait for your purchase!</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="grid-x flex-center">
                    <!-- car shopping -->
                    <div space="car" class="large-8 medium-12 small-12 grid-padding-x">
                        <div class="pb-3 px-3">
                            <div class="fs-6 fw-bold text-morado">Summary of your purchase</div>
                        </div>
                        <ul class="carritoList" id="carritoList"></ul>
                        <div class="grid-x large-12 small-12 text-center fs-1 px-3 text-morado mb-3">
                            Our medical team can go to take your blood sample with an extra cost for your STI kits (you can add it below) or you can attend our laboratory totally FREE.
                        </div>
                    </div>
                    <!-- form -->
                    <div space="form-data" class="large-11 medium-12 small-12 grid-padding-x pb-3 display-none">
                        <!-- <div class="py-3 px-3">
                            <div class="fs-6 fw-bold text-morado text-center">Por ultimo, llena tus datos</div>
                            <p class="text-morado text-center">Necesitamos que llenes tus datos para poder continuar con la compra en Chektahora y recibir tus resultados.</p>
                        </div> -->
                        <div class="large-12 medium-12 small-12 grid-padding-x card-details">
                            <form id="data-customer" class="fluid formularios">
                                <input type="hidden" name="id" value="<?php echo $reference_id; ?>">
                                <div class="grid-x grid-padding-x">
                                    <div class="grid-x large-12 small-12 px-1 py-2 mb-3">
                                        <div class="grid-x large-12 small-12 mb-3">
                                            <div class="small-12 px-1">
                                                <div class="fs-19px fw-bold text-morado text-center mb-3">tell us about yourself</div>
                                            </div>
                                            <div class="large-7 small-12 px-1">
                                                <div class="large-12 small-12">
                                                    <input type="text" name="nombre" id="Nombre_completo" placeholder="Full name" class="input" maxlength="80" required autocomplete="none">
                                                </div>
                                                <div class="cell text-end">
                                                    <p class="fs-1 text-morado">*Required</p>
                                                </div>
                                            </div>
                                            <div class="large-5 small-12 grid-x px-1">
                                                <div class="large-12 medium-12 small-12">
                                                    <input type="text" name="email" id="email" placeholder="Email" class="input" maxlength="90" required autocomplete="none">
                                                </div>
                                                <div class="cell text-end">
                                                    <p class="fs-1 text-morado">*Required</p>
                                                </div>
                                            </div>
                                            <div class="large-5 small-12 px-1 grid-x mb-2">
                                                <div class="large-3 small-5">
                                                    <input id="lada" type="hidden" class="input" value="+52">
                                                </div>
                                                <div class="large-7 small-7 px-1" name="tel-alert">
                                                    <input type="text" name="telefono" id="telefono" placeholder="Contact number" class="input" maxlength="15" minlength="9" required style="background: #fff !important;padding-left: 20px; border: 1px solid #4F2D83;color:#4F2D83!important; box-shadow: none;" autocomplete="none">
                                                    <div class="cell text-end">
                                                        <p class="fs-1 text-morado">*Required</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="large-7 small-12 grid-x mb-3">
                                                <div class="large-4 small-12 d-flex align-height-center mb-3 px-1">
                                                    <div class="fs-19px text-morado text-center fw-normal">Date of Birth</div>
                                                </div>
                                                <div class="large-4 small-12 px-1 d-flex align-height-center mb-2">
                                                    <input type="text" class="input text-center" id="dp1" name="fecha" placeholder="DD/MM/YYYY" required autocomplete="none">
                                                </div>
                                                <div class="large-4 small-12 d-flex align-height-center mb-3">
                                                    <div class="fs-1 text-morado fw-normal mb-1 text-center">Enter the date correctly starting with the day, month and year.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-x large-8 small-12 d-flex align-height-center flex-center display-none" space="its-option">
                                            <div class="large-7 small-12 px-1 mb-3">
                                                <div class="large-12 small-12 cell text-center">
                                                    <div class="fs-19px py-1 text-morado">You have a history of an STI</div>
                                                    <p class="fs-1 text-morado text-center">All your information is safe, with this information our medical advisors will be able to better advise you on your results</p>
                                                    <div class="cell text-center px-3">
                                                        <p class="fs-1 text-morado">*Required</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="large-4 small-12 px-1 d-flex align-height-center mb-3">
                                                <fieldset class="large-12 cell flex-center mb-3">
                                                    <span class="flex-center px-3">
                                                        <label class="textBox checkbox_p_d" id="checkbox_its_1" for="its_si" name="its-alert">
                                                            <input type="radio" name="its" value="Si" id="its_si">
                                                        </label>
                                                        <label class="text-morado d-flex align-height-center px-1">Yes</label>
                                                    </span>
                                                    <span class="flex-center px-3">
                                                        <label class="textBox checkbox_p_d" id="checkbox_its_2" for="its_no" name="its-alert">
                                                            <input type="radio" name="its" value="No" id="its_no">
                                                        </label>
                                                        <label class="text-morado d-flex align-height-center px-1">Nope</label>
                                                    </span>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="large-4 small-12 px-1 d-flex align-height-center justify-content-center flex-col mb-2" id="space-peoples">
                                            <select name="cantidad_personas" class="input" style="background: transparent;padding-left: 20px; border: 1px solid #cacaca;" id="cantidad-personas">
                                                <option value="1" selected disabled>Is your purchase for someone else?</option>
                                            </select>
                                            <div class="fs-1 text-morado text-center fw-normal mb-3">Fill in the data correctly of the person who will receive the results</div>
                                        </div>
                                    </div>
                                    <div class="grid-x large-12 small-12 px-1 py-1 display-none" id="data_persona_ext">
                                    </div>
                                    <div class="grid-x large-12 small-12 px-1">
                                        <div class="small-12 px-1">
                                            <div class="fs-19px mb-3 text-morado text-center">Where will we carry out your sample collection?</div>
                                        </div>
                                        <div class="large-4 small-12 px-1">
                                            <input name="calle" type="text" id="right-label" placeholder="Street" class="input" required maxlength="90" autocomplete="none">
                                        </div>
                                        <div class="large-2 medium-4 small-12 px-1">
                                            <input name="no_int" type="number" id="right-label" placeholder="#INT" class="text-center" maxlength="10" autocomplete="none">
                                        </div>
                                        <div class="large-2 medium-4 small-12 px-1">
                                            <input name="no_ext" type="number" id="no_ext" placeholder="#EXT" class="text-center" required maxlength="10" autocomplete="none">
                                        </div>
                                        <div class="large-4 small-12 px-1">
                                            <input name="colonia" type="text" id="right-label" placeholder="Suburb" class="input" required maxlength="50" autocomplete="none">
                                        </div>
                                    </div>
                                    <div class="grid-x large-12 small-12 px-1">
                                        <div class="large-4 medium-4 small-12 px-1 mb-3">
                                            <input name="codigo_postal" type="text" id="right-label" placeholder="Postal Code" class="input" required maxlength="5" minlength="4" autocomplete="none">
                                        </div>
                                        <div class="large-4 small-12 px-1">
                                            <input name="municipio" type="text" id="right-label" placeholder="Municipality" class="" required maxlength="50" autocomplete="none">
                                        </div>
                                        <div class="large-4 small-12 px-1">
                                            <input name="estado" type="text" id="right-label" placeholder="State" class="" required maxlength="50" autocomplete="none">
                                        </div>
                                    </div>
                                    <div class="cell text-end">
                                        <p class="fs-1 text-morado">*Required</p>
                                    </div>
                                    <!-- Agenda toma de muestra -->
                                    <div class="grid-x large-12 small-12 display-none mb-3 px-1" space="date-covid">
                                        <div class="large-12 small-12 grid-x py-3">
                                            <div class="large-12 small-12 px-1 text-center">
                                                <h3 class="fs-19px fw-bold text-morado">Schedule your sampling</h3>
                                            </div>
                                            <div class="grid-x large-12 medium-12 small-12 d-flex justify-content-center py-3">
                                                <div class="large-4 small-12 px-3">
                                                    <div class="text-morado text-center fw-normal fs-17px mb-2" style="width: 80%; margin: auto;">Enter the date correctly starting with the day, month and year.</div>
                                                </div>
                                                <div class="large-4 small-12 px-3 mb-2">
                                                    <input type="text" class="input" id="dp2" name="agenda-covid" placeholder="DD/MM/YYYY">
                                                    <div class="display-none" action="date-valid">
                                                        <p class="fs-1" style="color: #2dbe2b;">The date is available for collection.</p>
                                                    </div>
                                                    <div class="display-none" id="domingo">
                                                        <p class="fs-1" style="color: #ff0000;">On Sundays we do not have schedules, you can schedule it for another day.</p>
                                                    </div>
                                                    <div class="display-none" action="date-not-valid">
                                                        <p class="fs-1" style="color: #ff0000;">The date is not available for collection, please choose another day.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid-x large-12 medium-12 small-12 d-flex justify-content-center py-3 mb-3 display-none" id="espacio-horarios-covid">
                                                <div class="large-4 small-12 px-1 flex-center">
                                                    <div class="text-morado fw-bold py-2 mb-2 fs-17px text-center">Available times<br>on the date of your sample<br>taking</div>
                                                </div>
                                                <div class="large-6 small-12 px-3 grid-x" id="horarios-agenda">
                                                    <div class="large-3 medium-3 small-12">
                                                        <input class="hora-input-covid _03" name="agenda-hora-covid" id="8_00" type="checkbox" value="8:00 AM" />
                                                        <label class="hora-label-covid flex-center" for="8_00">8:00 AM</label>
                                                    </div>
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
                                                    <div class="fs-17px text-center fw-bold">Your sample collection is scheduled on <span id="date-message-covid"></span> at <span id="hora-message-covid"></span></div>
                                                    <div class="text-center">There may be a variation of 25 to 35 minutes in the selected time</div>
                                                </div>
                                            </div>
                                            <div class="grid-x large-12 small-12 flex-center mb-3 display-none" id="message-covid-hours">
                                                <div class="large-10 small-12 px-3 flex-center flex-col text-morado" style="height: 40px; background-color: #E7E3EE !important;">
                                                    <div class="text-center">The time you entered is incorrect, please enter a different time</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-x large-12 small-12 px-3 py-1 flex-center">
                                        <div class="large-12 small-12 px-1 grid-x mb-3">
                                            <div class="large-12 small-12 fs-15px text-morado text-center">Finally,<br>we need some extra data to complete your order</div>
                                            <div class="large-3 small-10 mb-3" style="border-bottom: 1px solid #4F2D83;margin: 10px auto;"></div>
                                        </div>
                                        <div class="large-12 small-12 px-1 py-3 grid-x justify-content-center display-none" space="sexo-option">
                                            <div class="large-4 small-12 cell text-center mb-3 grid-x flex-center">
                                                <div class="large-12 fs-19px py-1 text-morado">Select your gender</div>
                                                <div class="large-12 fs-1 text-morado text-center fw-normal">We will only use this information to send you<br>the accessories of your KIT</div>
                                            </div>
                                            <fieldset class="flex-center cell large-6 grid-x">
                                                <div class="textBox d-flex align-height-center px-1 py-1">
                                                    <label id="vulva" for="checkbox1">
                                                        <input type="radio" name="sexo" value="Persona con vulva" id="checkbox1" style="display: none;">
                                                    </label>
                                                    <label class="text-morado">Person with vulva</label>
                                                </div>
                                                <div class="textBox d-flex align-height-center px-1 py-1">
                                                    <label id="pene" for="checkbox2">
                                                        <input type="radio" name="sexo" value="Persona con pene" id="checkbox2" style="display: none;">
                                                    </label>
                                                    <label class="text-morado">Person with penis</label>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="grid-x large-6 medium-12 small-12 d-flex align-height-center mb-3 pb-3 display-none" style="height: 200px;" id="covid-input-sintomas">
                                            <div class="large-6 small-12 medium-12 px-2 flex-center flex-col">
                                                <div class="cell fw-normal text-morado fs-19px text-center py-1">Do you have any covid symptoms?</div>
                                                <div class="fs-10px text-morado text-center fw-normal">Your information is safe, with this information our medical advisors will be able to better advise you on your results</div>
                                            </div>
                                            <div class="large-6 small-12 medium-12 text-center flex-center">
                                                <fieldset class="cell flex-center">
                                                    <span class="flex-center px-1">
                                                        <label class="textBox checkbox_p_d" id="checkbox_sint_1_" for="checkbox_sint_1">
                                                            <input type="radio" name="sintomas-option" value="Si" id="checkbox_sint_1">
                                                        </label>
                                                        <label class="text-morado d-flex align-height-center px-1">Yes</label>
                                                    </span>
                                                    <span class="flex-center px-1">
                                                        <label class="textBox checkbox_p_d" id="checkbox_sint_2_" for="checkbox_sint_2">
                                                            <input type="radio" name="sintomas-option" value="No" id="checkbox_sint_2">
                                                        </label>
                                                        <label class="text-morado d-flex align-height-center px-1">Nope</label>
                                                    </span>
                                                </fieldset>
                                            </div>
                                            <div class="large-12 small-12 medium-12 px-1 display-none" space="input-sintomas">
                                                <input type="text" name="sintomas" placeholder="Enter your covid symptoms here" class="input" maxlength="65" autocomplete="none">
                                            </div>
                                        </div>
                                        <div class="grid-x large-6 medium-12 small-12 d-flex align-height-center mb-3 pb-3 display-none" style="height: 200px;" id="covid-input-pasaporte">
                                            <div class="large-7 small-12 medium-12 px-2 flex-center flex-col">
                                                <div class="cell fw-normal text-morado fs-19px text-center py-1">Is your covid result for travel?</div>
                                                <div class="fs-10px text-morado text-center fw-normal">Write the passport number that your result will have<br></div>
                                            </div>
                                            <div class="large-5 small-12 medium-12 text-center flex-center">
                                                <fieldset class="cell flex-center">
                                                    <span class="flex-center px-1">
                                                        <label class="textBox checkbox_p_d" id="checkbox_pasa_1_" for="checkbox_pasa_1">
                                                            <input type="radio" name="pasaporte-option" value="Si" id="checkbox_pasa_1">
                                                        </label>
                                                        <label class="text-morado d-flex align-height-center px-1">Yes</label>
                                                    </span>
                                                    <span class="flex-center px-1">
                                                        <label class="textBox checkbox_p_d" id="checkbox_pasa_2_" for="checkbox_pasa_2">
                                                            <input type="radio" name="pasaporte-option" value="No" id="checkbox_pasa_2">
                                                        </label>
                                                        <label class="text-morado d-flex align-height-center px-1">Nope</label>
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
                                                    <div class="cell fw-normal text-morado fs-19px text-center py-1">Are you on antibiotic treatment?</div>
                                                    <div class="fs-10px text-morado text-center fw-normal">All your information is safe, with this information our medical advisors will be able to better advise you on your results</div>
                                                </div>
                                                <div class="large-5 small-12 medium-12 text-center flex-center">
                                                    <fieldset class="cell flex-center">
                                                        <span class="flex-center px-1">
                                                            <label class="textBox checkbox_p_d" id="clinicos_true_" for="clinicos_true">
                                                                <input type="radio" name="clinicos-option" value="Si" id="clinicos_true">
                                                            </label>
                                                            <label class="text-morado d-flex align-height-center px-1">Yes</label>
                                                        </span>
                                                        <span class="flex-center px-1">
                                                            <label class="textBox checkbox_p_d" id="clinicos_false_" for="clinicos_false">
                                                                <input type="radio" name="clinicos-option" value="No" id="clinicos_false">
                                                            </label>
                                                            <label class="text-morado d-flex align-height-center px-1">Nope</label>
                                                        </span>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="grid-x large-6 medium-12 small-12 d-flex align-height-center py-3">
                                                <div class="large-6 small-12 px-1 d-flex align-height-center">
                                                    <div class="fs-19px text-morado text-center fw-normal mb-3">How did you find us?</div>
                                                </div>
                                                <div class="large-6 small-12 px-1">
                                                    <select name="conoce" class="input" style="padding-left: 20px; border: 1px solid #cacaca;">
                                                        <option value="Redes sociales" selected>Social networks</option>
                                                        <option value="Recomendación">Recommendation</option>
                                                        <option value="Anuncios">Advertisements</option>
                                                        <option value="Contacto">Contact</option>
                                                        <option value="Otro">Other</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="alert-error-dc display-none" id="alert-mobile">
                                        <div class="absolute camp"><img src="../css/img/roja.png" alt="" width="35px"></div>Verify that the data you entered is correct
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
                                                            Accept our terms and conditions
                                                        </a>
                                                        <div class="textBox">
                                                            <label for="checkbox10" class="fs-1 text-morado px-1">If you want to know more about how we store your data, please read our privacy policy here and terms and conditions can be found here.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="grid-x large-12 small-12 flex-center">
                                            <a class="btn-banner-2 px-3 display-none fw-bold" action="pay" disabled>Continue</a>
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
                                    <div class="morado fw-bold fs-7">Order Summary</div>
                                </div>
                            </div>
                            <div class="grid-x flex-center">
                                <div class="large-4 medium-5 small-4 text-left">
                                    <p>Subtotal</p>
                                    <p>Shipment</p>
                                    <p>Discount</p>
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
                                        <a href="" class="btn-banner-2 px-3" action="next">Continue</a>
                                    </div>
                                    <div class="flex-center">
                                        <div class="text-info-pay text-center py-1 display-none" space="cart-empty" style="color:#ee4747b4!important;">To be able to pay you must have at least one product</div>
                                    </div>
                                    <div class="flex-center">
                                        <div class="text-info-pay text-center py-1 display-none" action="error-empty">To be able to pay you must fill in all the fields</div>
                                    </div>
                                    <div class="flex-center">
                                        <div class="text-info-pay text-center display-none py-1" action="error-envio">For national delivery of covid tests, there must be a minimum of 5</div>
                                    </div>

                                </div>
                            </div>
                            <div class="separator"></div>
                            <input type="hidden" name="envio" value="">
                            <div class="grid-x coupon" space="cupon">
                                <input type="text" placeholder="Do you have a code?" name="cupon" class="input-coupon medium-9 small-8" />
                            </div>
                            <div class="grid-x" style="justify-content: center;">
                                <div class="large-2 small-2" style="justify-content: end;display: flex;padding: 10px;">
                                    <img src="../css/img/carrito.svg" alt="" width="30px" class="text-right">
                                </div>
                                <div class="large-10 medium-6 small-10 text-left">
                                    <p class="envio">
                                        Free shipping in CDMX and metropolitan area
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cell text-left" space="plus">
                <div class="grid-x spaceX">
                    <div class="large-12 medium-12 small-12 grid-padding-x text-center">
                        <h4 class="morado">Add our services to your purchase</h4>
                    </div>
                    <div class="grid-x large-12 small-12 flex-center">
                        <div class="large-4 medium-6 small-12 display-none" space="servicio-visita">
                            <div class="otrosProductos fondoMorado">
                                <div><img alt="" src="../css/img/portafolio.png" /></div>

                                <p>Home visit by a nurse for your blood sample collection. </p>
                                <p>Have a nurse come to your home and take your blood sample. </p>
                                <p><strong>$ 300 MXN</strong></br>Mexico City metropolitan area</p>
                                <div class="text-right"><a href="#" data-open="service-its" class="btnPurple">Add</a></div>
                            </div>
                        </div>
                        <div class="large-4 medium-6 small-12">
                            <div class="otrosProductos fondoMorado">
                                <div><img alt="" src="../css/img/user.png" /></div>

                                <p style="padding: 52% 0;" class="text-center">Special costs</br> for doctors</p>
                                <div class="text-right"><a href="mailto:contacto@chektahora.com" class="btnPurple">Contact</a></div>
                            </div>
                        </div>
                        <div class="large-4 medium-6 small-12">
                            <div class="otrosProductos fondoMorado">
                                <div><img alt="" src="../css/img/user.png" /></div>

                                <p style="padding: 52% 0;" class="text-center">special costs</br> for clinics</p>
                                <div class="text-right"><a href="mailto:contacto@chektahora.com" class="btnPurple">Contact</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-cart">
            <div class="cell medium-12 small-12 text-center">
                <h6>Do you have any doubt? contact us <strong>(55) 7938 - 9364 / (55) 6071-8812</strong></h6>
            </div>
        </div>
    </div>
    <div class="reveal py-5 border-radius" id="service-its" data-reveal style="margin-top: 8%;">
        <button class="close-button btn-modal-close" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
        <div space="verify_cp_service">
            <div class="flex-center">
                <h1 class="title-modal text-center fw-bold text-morado">We need to verify your zip code</h1>
            </div>
            <div class="grid-x large-12 small-12 py-3 flex-center">
                <div class="large-5 px-1">
                    <input type="text" placeholder="Postal Code" class="input" name="cp_service" autocomplete="none">
                </div>
                <div class="large-3 px-1">
                    <a href="#" class="btn-banner-2" action="verify-cp" style="padding: .8rem 0.9rem !important;">Verify</a>
                </div>
            </div>
            <div class="grid-x large-12 small-12 text-center fs-1 px-3 text-morado">
            Our medical team can go to take your blood sample with an extra cost for your STI kits or you can attend our laboratory totally FREE.
            </div>
        </div>
        <div class="py-3 display-none" space="invalid_cp_service">
            <div class="text-center">
                <div id="cp_error" style="color: #4F2D83; font-size: 16px;" class="fw-bold">Sorry, your zip code is not in our coverage area, only CDMX and the metropolitan area.</div>
            </div>
        </div>
    </div>
    <div class="reveal py-5 border-radius" id="alert-covid" data-reveal style="margin-top: 8%;">
        <button class="close-button btn-modal-close" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
        <div space="verify_cp_covid">
            <div class="flex-center">
                <h1 class="title-modal text-center fw-bold text-morado">We need to verify your zip code</h1>
            </div>
            <div class="flex-center px-3">
                <h3 class="text-center fs-1 text-morado">The collection coverage for <span class="fw-bold">covid tests</span> and <span class="fw-bold">clinics</span> is only valid within CDMX, exterior minimum 5 pieces.</h3>
            </div>
            <div class="grid-x large-12 small-12 py-3 flex-center">
                <div class="large-5 px-1">
                    <input type="text" placeholder="Postal Code" class="input" name="cp_covid" autocomplete="none">
                </div>
                <div class="large-3 px-1">
                    <a href="#" class="btn-banner-2 shadow" action="verify-cp-covid" style="padding: .8rem 0.9rem !important;">Verify</a>
                </div>
            </div>
        </div>
        <div class="py-3 display-none" space="invalid_cp_covid">
            <div class="text-center">
                <div style="color: #4F2D83; font-size: 22px;" class="fw-bold">Sorry, your zip code is not in our coverage area.</div>
            </div>
            <div class="text-center py-3">
                <div style="color: #4F2D83; font-size: 16px;" class="fw-bold">For areas outside CDMX, your purchase must have a minimum of 5 pieces from the covid category and clinics.</div>
            </div>
            <div class="large-12 px-1 flex-center">
                <a href="#" class="btn-banner shadow" action="new-cp" style="padding: .8rem 0.9rem !important;">Enter a new one</a>
            </div>
        </div>
    </div>
    <div class="reveal py-5 border-radius" id="alert-covid-none" data-reveal style="margin-top: 6%;">
        <button class="close-button btn-modal-close" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="py-3">
            <div class="text-center">
                <div style="color: #4F2D83; font-size: 22px;" class="fw-bold">You need to add a different date, otherwise your sample collection will be scheduled for tomorrow.</div>
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
    <!-- <div class="reveal py-5 border-radius" id="pop-up-message" data-reveal style="margin-top: 6%;">
        <button class="close-button btn-modal-close" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="py-3 px-3">
            <div class="text-center">
                <div style="color: #4F2D83; font-size: 22px;" class="fw-bold">El próximo 10 de mayo nuestro horario de atención a clientes y toma de muestras será de 9 a 2:00 pm, les pedimos por favor programen sus tomas con anticipación.<br><br>Muchas gracias por su comprensión.<br><br>¡Muchas felicidades a todas las mamás en este día!</div>
            </div>
        </div>
    </div> -->
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