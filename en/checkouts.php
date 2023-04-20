<?php
include '../lib/global.php';
require '../pasarelas/rappi.php';
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
</head>

<body>
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
                                <p class="hide-for-small-only">Order your test</p>
                            </li>
                            <li>
                                <div class="active mb-2"></div>
                                <p class="hide-for-small-only">Select the payment method</p>
                            </li>
                            <li>
                                <div class="notActive mb-2"></div>
                                <p class="hide-for-small-only">Wait for your purchase!</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="grid-x pb-3">
                    <div class="px-3">
                        <div class="fs-7 fw-bold text-morado pb-3">Finally, select the payment gateway</div>
                        <div class="ajust-icons">
                            <img src="../css/img/metodos-pago.jpeg" alt="">
                        </div>
                    </div>
                    <div class="grid-x large-8 medium-8 small-12 grid-padding-x card-details-payment card-options-pay">
                        <div class="large-12 card-details-payment card-options-pay">
                            <div class="flex-center small-12 grid-x mt-2">
                                <div class='spinner display-none' id="loading"></div>
                                <button id="btnStripe" lenguaje="es" class="btnPurpleStripe py-2 mb-2" action="conekta-pay"></button>
                                <div class="text-center cell fs-2 text-morado">Pay in cash, card or spei.</div>
                            </div>
                             <div class="pb-3 flex-center my-3">
                                <div class="pr pr-md pr-mx" action="rappi"></div>
                            </div>
                            <div class="flex-center small-12 grid-x mt-2">
                                <a href="checkout-conekta" class="btnPurpleConekta py-2 mb-2" action="conekta-pay"></a>
                                <div class="text-center cell fs-2 text-morado">Pay in cash, card or spei.</div>
                            </div> 
                        </div>
                    </div>
                    <div class="large-4 medium-4 small-12 grid-padding-x text-center">
                        <div class="resumen resume-responsive-1">
                            <div class="grid-x flex-center">
                                <div class="large-12 medium-12 small-12 grid-padding-x py-3">
                                    <div class="morado fw-bold fs-7">Order Summary</div>
                                </div>
                            </div>
                            <div class="grid-x flex-center">
                                <div class="large-5 medium-5 small-5">
                                    <p>Subtotal</p>
                                    <p>Shipment</p>
                                    <p>Discount</p>
                                    <p>Total</p>
                                </div>
                                <div class="large-5 medium-5 small-5">
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
                            <div class="grid-x" style="justify-content: center;">
                                <div class="large-2 small-2" style="justify-content: end;display: flex;padding: 10px;">
                                    <img src="../css/img/carrito.svg" alt="" width="30px" class="text-right">
                                </div>
                                <div class="large-10 small-10 text-left">
                                    <p class="envio">
                                        Free shipping in CDMX and metropolitan area
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
                <h6>Do you have any doubt? contact us <strong>(55) 7938 - 9364 / (55) 6071-8812</strong></h6>
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