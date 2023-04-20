<?php include '../lib/global.php'; ?>
<!doctype html>
<html lang="es-MX" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

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
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-VW67FHGEX4');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache" />
    <title>Chektahora</title>
    <?php include 'template/favicon.php'; ?>
    <link rel="stylesheet" href="../css/app.css?update=<?php echo constant('UPDATE'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '686668561821805');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=686668561821805&ev=PageView&noscript=1" /></noscript>
    <script src="https://www.google.com/recaptcha/api.js?render=6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh"></script>
</head>

<body>
    <div class="fluid">
        
        <div class="grid-x">
            <?php include 'template/header.php'; ?>

            <div class="cell text-left fondoMorado" style="margin-top: 8%;">
                <div class="grid-x">
                    <div class="cell text-left  spaceX preguntasFrecuentes bkLila">
                        <div class="grid-x spaceTop ">
                            <div class="large-12 medium-12 small-12 grid-padding-x formularios text-center pb-3">
                                <h1><strong>Is something not clear to you??</br> we are here to solve all your doubts</strong></h1>
                            </div>
                            <div class="large-12 medium-6 small-12 grid-padding-x flex-center">
                                <Form id="form-message">
                                    <div class="fluid">
                                        <div class="grid-x grid-padding-x flex-center">
                                            <div class="large-10 medium-12 small-12">
                                                <div class="medium-12 small-12">
                                                    <label>
                                                        <input type="text" placeholder="Full name" id="name-message">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="large-10 medium-12 small-12">
                                                <div class="medium-12 small-12">
                                                    <label>
                                                        <input type="text" placeholder="Email" id="email-message">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="large-10 medium-12 small-12">
                                                <div class="medium-12 small-12">
                                                    <label>
                                                        <textarea cols="10" rows="10" placeholder="Leave us your message here" id="text-message"></textarea>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="large-10 medium-12 small-12 py-1">
                                                <div class="medium-12 small-12">
                                                    <a class="btnYellow" id="submit-message">Send</a>
                                                </div>
                                            </div>
                                            <div class="large-10 medium-12 small-12 py-1 fw-bold text-center display-none" id="alert-message" style="color:#811cb4ff!important; font-size: 12px;">Your message has been sent.</div>
                                        </div>
                                    </div>
                                </Form>
                            </div>
                            <div class="large-12 medium-12 small-12 grid-padding-x text-right show-for-medium">
                                <p class="text-morado">Do you have any complaints or suggestions? Write us!</p>
                                <p><a class="text-morado" href="mailto:quejas.sugerencias@chektahora.com">quejas.sugerencias@chektahora.com</a></p>
                            </div>
                            <div class="large-12 medium-12 small-12 grid-padding-x text-center show-for-small-only">
                                <p class="text-morado">Do you have any complaints or suggestions? Write us!</p>
                                <p><a class="text-morado" href="mailto:quejas.sugerencias@chektahora.com">quejas.sugerencias@chektahora.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'template/footer.php'; ?>

        <div class="reveal" id="exampleModal1" data-reveal>
            <div id="videoContainer">
                <iframe class="youtube-video" width="560" height="315" src="https://www.youtube.com/embed/oeHkGkmIeX8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <button class="close-button" id="cerrarVideo" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

    <script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="../js/pop-up.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="../js/contact.js"></script>
</body>

</html>