<?php
include '../lib/global.php';
require '../pasarelas/rappi.php';
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
    <link rel="stylesheet" href="../css/datepicker.css?v=00005">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
    <style>
        .invalid {
            border: #ffa5a5 2px !important;
            border-style: solid !important;
        }

        .invalid-info {
            color: #ff3b3b;
            font-size: 12px;
            margin-top: -10px;
            margin-bottom: 10px;
        }

        .ajust-icons {
            width: 30%;
        }

        @media screen and (max-width: 767px) {
            .ajust-icons {
                width: 100% !important;
                margin-bottom: 40px;
            }
        }

        .resume-responsive-1 {
            margin-left: 70px;
            top: 30px;
        }

        @media screen and (max-width: 1000px) {
            .resume-responsive-1 {
                margin-right: auto !important;
                margin-left: auto !important;
                top: 30px;
                padding: 5% !important;
            }
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
<div class="outer-loader-stripe flex-center align-height-center display-none" id="loading">
    <div>
        <div class="flex-center align-height-center">
            <div class="spinner"></div>
        </div>
        <h5 class="text-white">Preparando Stripe...</h5>
    </div>
</div>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNR8MBT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <div class="fluid formulariosDashboard" style="background:#fff;">
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
            <div class="cell text-left spaceCard fondoMorado" style="min-height: 750px;">
                <div class="grid-x">
                    <div class="large-12 medium-12 small-12 py-1 grid-padding-x">
                        <h1 class="morado"></h1>
                        <ul class="detalles">
                            <li>
                                <div class="notActive mb-2"></div>
                                <p class="hide-for-small-only">Ordena tu prueba</p>
                            </li>
                            <li>
                                <div class="active mb-2"></div>
                                <p class="hide-for-small-only">Selecciona el metodo de pago</p>
                            </li>
                            <li>
                                <div class="notActive mb-2"></div>
                                <p class="hide-for-small-only">¡Espera tu compra!</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="grid-x pb-3 flex-center">
                    <div class="grid-x large-7 medium-8 small-12">
                        <div>
                            <div class="fs-7 fw-bold text-morado pb-3" >Por ultimo, selecciona la pasarela de pago</div>
                            <div class="ajust-icons" >
                                <img src="../css/img/metodos-pago.jpeg" alt="">
                            </div>
                            <div class="large-12 card-details-payment card-options-pay">
                                <div class="flex-center small-12 grid-x mt-2">
                                    <div class='spinner display-none' id="loading"></div>
                                    <button id="btnStripe" lenguaje="es" class="btnPurpleStripe py-2 mb-2" action="conekta-pay"></button>
                                    <div class="text-center cell fs-2 text-morado">Paga con tarjeta de crédito y débito</div>
                                </div>
                               <!-- <div class="pb-3 flex-center my-3">
                                    <div class="pr pr-md pr-mx" action="rappi"></div>
                                </div>
                                <div class="flex-center small-12 grid-x mt-2">
                                    <a href="checkout-conekta" class="btnPurpleConekta py-2 mb-2" action="conekta-pay"></a>
                                    <div class="text-center cell fs-2 text-morado">Paga en efectivo, tarjeta o spei.</div>
                                </div> -->
                            </div>
                        </div>
                        <!-- <div class="large-4 flex-center small-12 grid-x">
                            <a href="checkout-conekta" class="btnPurpleConekta py-2 mb-2" action="conekta-pay">Paga con Stripe</a>
                            <div class="text-center cell fs-2 text-morado">Paga en efectivo, tarjeta o spei.</div>
                        </div> -->
                    </div>
                    <div class="large-4 medium-12 small-12 text-center" space="card-resume-order">
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
                                        <p><strong>$ <?php echo $_SESSION['total_parcial'] ?></strong></p>
                                    </div>
                                    <div id="envio" class="fw-bold">
                                        <p><strong>$ <?php echo $_SESSION['envio'] ?></strong></p>
                                    </div>
                                    <div id="descuento" class="fw-bold">
                                        <p><strong>$ <?php echo '-' . $_SESSION['descuento_secure'] + $_SESSION['promotion'] ?></strong></p>
                                    </div>
                                    <div id="total" class="fw-bold">
                                        <p><strong>$ <?php echo $_SESSION['total'] ?></strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-x py-1 flex-center">
                                <div class="large-10 medium-12 small-12 text-center">
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
                            <div class="grid-x" style="justify-content: center;">
                                <div class="large-2 small-2" style="justify-content: end;display: flex;padding: 10px;">
                                    <img src="../css/img/carrito.svg" alt="" width="30px" class="text-right">
                                </div>
                                <div class="large-10 medium-6 small-10 text-left">
                                    <p class="envio">
                                        Envio gratuito en CDMX y área metropolitana
                                    </p>
                                </div>
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
    <script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="../js/main/checkouts.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="<?php echo $url_rappi; ?>/rms/merchant-services/sdk/rms.js" crossorigin="anonymous"></script>
    <script>
        $('[action="rappi"]').on('click', function() {
            RappiPagaCheckout({
                checkout_id: '<?= $id ?>', // $r->id
                success_url: 'https://www.chektahora.com/orden-compras?c_ref=<?= base64_encode($_SESSION['id']) ?>',
                cancel_url: 'https://www.chektahora.com/checkouts',
                onSuccess: (id) => {
                    window.location.href = "https://www.chektahora.com/orden-compras?c_ref=<?= base64_encode($_SESSION['id']) ?>";
                },
                onFailure: (id) => {
                    if (window.innerWidth < 768) {
                        window.location.href = 'https://www.chektahora.com/checkouts';
                    }
                },
                onClose: (id) => {
                    if (window.innerWidth < 768) {
                        window.location.href = 'https://www.chektahora.com/checkouts';
                    }
                },
                onCancel: (id) => {
                    if (window.innerWidth < 768) {
                        window.location.href = 'https://www.chektahora.com/checkouts';
                    }
                }
            })
        })
    </script>
</body>

</html>