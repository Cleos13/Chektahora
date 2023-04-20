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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?render=6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh"></script>
    <link rel="preconnect" href="https://www.google.com">
    <link rel="preconnect" href="https://www.gstatic.com" crossorigin>
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
</head>

<body>
    <div class="fluid">
        
        <div class="grid-x">
            <?php include 'template/header.php'; ?>
            <div class="cell spaceTop">
            </div>
            <div class="cell text-left spaceTop">
                <div class="grid-x ">
                    <div class="large-6 medium-6 small-12 grid-padding-x covid19Morado spaceX">
                        <ul class="accordion" data-accordion>
                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title grid-x">
                                    Is my data safe?</a>
                                <div class="accordion-content" data-tab-content>
                                    <p>Your data is safe, we follow security protocols to keep your information safe</p>
                                </div>
                            </li>
                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title">
                                    How reliable is the result of my analysis?</a>
                                <div class="accordion-content" data-tab-content>
                                    <p>The result is highly reliable, the search for the microorganism is carried out by means of a technique called PCR, in which the amplification of the nucleic acids of the DNA is carried out, with greater security at
                                        95%. </p>
                                </div>
                            </li>
                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title">
                                    Is it possible that I have contracted more than one STI? </a>
                                <div class="accordion-content" data-tab-content>
                                    <p>Yes, once we have started our sexual life, we are at risk of contracting one or more sexually transmitted infections. It is always important to consult a doctor</p>
                                </div>
                            </li>
                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title">
                                    What do I do to send my sample to the laboratory?</a>
                                <div class="accordion-content" data-tab-content>
                                    <p>It is very simple, once you have ordered your kit you only have to register it on this platform, create your profile and complete the requested data, we will take care of collecting your sample to the door of your house,
                                        office or wherever you want and later we process it in our laboratory. Your result will be ready in a period not exceeding 72 business hours.</p>
                                </div>
                            </li>
                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title">
                                    My result is POSITIVE for STIs, what do I do now?</a>
                                <div class="accordion-content" data-tab-content>
                                    <p>We will channel you to the medical office for care by one of the Doctors, who will contact you to provide you with personal advice.</p>
                                </div>
                            </li>
                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title">
                                    Who can take the test?</a>
                                <div class="accordion-content" data-tab-content>
                                    <p>It can be performed by men and women who have already started their sexual life.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="large-6 medium-6 small-12 grid-padding-x">
                        <img alt="preguntas-frecuentes" src="../css/img/preguntas.png" />
                    </div>
                </div>
            </div>
            <div class="cell text-left  spaceX preguntasFrecuentes bkLila">
                <div class="grid-x spaceTop ">
                    <div class="large-12 medium-12 small-12 grid-padding-x formularios">
                        <h1 class="fs-mobile-5"><strong>IS SOMETHING NOT CLEAR TO YOU?</br> WE ARE HERE TO RESOLVE ALL YOUR DOUBTS</strong></h1>
                    </div>
                    <div class="large-6 medium-6 small-12 grid-padding-x mt-2">
                        <Form id="form-message">
                            <div class="fluid">
                                <div class="grid-x grid-padding-x flex-center">
                                    <div class="medium-12 small-10">
                                        <div class="medium-12 small-12">
                                            <label>
                                                <input type="text" placeholder="Full name" id="name-message">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="medium-12 small-10">
                                        <div class="medium-12 small-12">
                                            <label>
                                                <input type="text" placeholder="Email" id="email-message">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="medium-12 small-10">
                                        <div class="medium-12 small-12">
                                            <label>
                                                <textarea cols="10" rows="10" placeholder="Leave us your message here" id="text-message"></textarea>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="medium-12 small-8 py-1">
                                        <div class="medium-12 small-12">
                                            <a class="btnYellow" id="submit-message">Send</a>
                                        </div>
                                    </div>
                                    <div class="large-10 medium-12 small-12 py-1 fw-bold text-center display-none" id="alert-message" style="color:#811cb4ff!important; font-size: 12px;">Tu mensaje se ha enviado.</div>
                                </div>
                            </div>
                        </Form>
                    </div>
                    <div class="large-12 medium-12 small-12 grid-padding-x text-right">
                        <p class="text-morado fs-mobile-5 mt-2">Do you have any complaints or suggestions? Write us!<a class="text-morado fs-mobile-5" href="mailto:quejas.sugerencias@chektahora.com">quejas.sugerencias@chektahora.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'template/footer.php'; ?>
    </div>

    <script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="../js/pop-up.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="../js/newsletter.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="../js/contact.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script>
        $(document).foundation({
            orbit: {
                animation: 'slide',
                timer_speed: 1000,
                pause_on_hover: true,
                animation_speed: 500,
                navigation_arrows: false,
                bullets: true
            }
        });
    </script>
</body>

</html>