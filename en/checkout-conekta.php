<?php
include '../lib/global.php';
require '../pasarelas/conekta.php';
?>
<!DOCTYPE html>
<html>

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
  <title>Checkout</title>
  <?php include 'template/favicon.php'; ?>
  <link rel="stylesheet" href="../css/app.css?update=<?php echo constant('UPDATE'); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
  <script type="text/javascript" src="https://pay.conekta.com/v1.0/js/conekta-checkout.min.js"></script>
</head>

<body>
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNR8MBT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <div class="grid-x" style="height: 100vh">
    <!-- <div id="pay-cash" class="alert display-none mb-3">Tu pago esta pendiente, el id de tu pedido es "<?php echo $_SESSION['id']; ?>" (guarda esta información muy bien o toma). Al realizar el pago, tu compra estará completa y recibirás tu pedido.</div> -->
    <div id="pay-cash" class="alert-conekta display-none">Capture or save the reference number to make the payment, you will be redirected in 30 seconds to receive your order ID.</div>
    <div id="pay-complete" class="alert-conekta display-none">Your payment has been made successfully, in a few seconds you will be redirected to receive your purchase ID.</div>
    <div id="conektaIframeContainer" class="view-conekta"></div>
  </div>
  <script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
  <script>
    window.ConektaCheckoutComponents.Integration({
      targetIFrame: "#conektaIframeContainer",
      checkoutRequestId: '<?= $id ?>', // checkout request id
      publicKey: '<?= $key_pub ?>',
      paymentMethods: ["Cash", "Card", "BankTransfer"],
      monthly_installments_options: [3, 6, 9, 12],
      redirection_time: 4,
      options: {
        styles: {
          background: {
            body: '#fff'
          },
          theme: 'green',
          buttonType: 'sharp', // 'basic' | 'rounded' | 'sharp'
          colors: {
            primary: "#4F2D83"
          },
          logo: {
            size: 'small', // small | medium | large
            typeImage: 'url', // url | base64
            source: 'https://avec.mx/img/works/img_chektahora_01_66_2000.jpg'
          }
        },
      },
      onFinalizePayment: function(event) {
        if (event.charge.status == 'paid') {
          $('#pay-complete').removeClass('display-none');
          $('body, html').animate({
            scrollTop: '0px'
          }, 300);
          setTimeout(function() {
            //$('#pay-complete').addClass('display-none');
            window.location.href = "orden-compras?c_ref=<?= base64_encode($_SESSION['id']) ?>";

          }, 10000);
        } else if (event.charge.status == 'pending_payment') {
          $('#pay-cash').removeClass('display-none');
          $('body, html').animate({
            scrollTop: '200px'
          }, 300);
          setTimeout(function() {
            $('body, html').animate({
              scrollTop: '0px'
            }, 300);
          }, 3000)
          setTimeout(function() {
            //$('#pay-cash').addClass('display-none');
            window.location.href = "orden-compra-efectivo?c_ref=<?= base64_encode($_SESSION['id']) ?>";
          }, 30000);
        }
      }
    })
  </script>
</body>

</html>