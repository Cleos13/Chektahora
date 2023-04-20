<?php
session_start();
require '../../vendor/autoload.php';
//Prueba stripe pablo\Stripe\Stripe::setApiKey('sk_test_51LGvASAm2AQidZUi4eJWqHd7bNGWHvkM22ak2dfpE6iQaUPh66431BsZ2BEBSuE5kqdCGLoXwXbqPRoEM4jTHst000CFZPSLS0');
\Stripe\Stripe::setApiKey('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');
//Pueba stripe chektahora \Stripe\Stripe::setApiKey('sk_test_51LjnUqGv59R394mgCxkiQJ6LE4FjSVCcU834y8L7QJ7M84Ukqgz0wfNWkUagxhKtAYK4xyO2FNfPYVsiVZcck1S700f63Ul8AQ');
$YOUR_DOMAIN = 'https://www.chektahora.com/' . $_POST['lenguaje'] . '/';

/*$stripe = new \Stripe\StripeClient(
    'sk_test_51LGvASAm2AQidZUi4eJWqHd7bNGWHvkM22ak2dfpE6iQaUPh66431BsZ2BEBSuE5kqdCGLoXwXbqPRoEM4jTHst000CFZPSLS0'
);*/
$stripe = new \Stripe\StripeClient(
    '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'
);
/*$stripe = new \Stripe\StripeClient(
    'sk_test_51LjnUqGv59R394mgCxkiQJ6LE4FjSVCcU834y8L7QJ7M84Ukqgz0wfNWkUagxhKtAYK4xyO2FNfPYVsiVZcck1S700f63Ul8AQ'
);*/

$products = $_SESSION['products'];
$arrayProducts = [];

foreach ($products as $product) {
    $arrayProducts[] = [
        'price_data' => [
            'currency' => 'mxn',
            'product_data' => [
                'name' => $product->name,
            ],
            'unit_amount' => $product->price * 100,
        ],
        'quantity' => $product->cant
    ];
}
$discount = 0;

if($_SESSION['descuento_secure']){
    $discount = $_SESSION['descuento_secure'];
}
if($_SESSION['promotion']){
    $discount = $_SESSION['promotion'];
}


if($discount > 0){
    $counpon = $stripe->coupons->create([
        'amount_off' => (($discount) * 100),
        'duration' => 'repeating',
        'duration_in_months' => 3,
        'currency' => 'mxn'
    ]);
    $discount = $counpon->id;
}else{
    $discount = null;
}


$checkout_session = \Stripe\Checkout\Session::create([
    'shipping_options' => [
        [
            'shipping_rate_data' => [
                'type' => 'fixed_amount',
                'fixed_amount' => [
                    'amount' => $_SESSION['envio'] * 100,
                    'currency' => 'mxn',
                ],
                'display_name' => 'Envío',
            ]
        ]
    ],
    'customer_email' => $_SESSION['email'],
//    'payment_method_types' => ['card', 'oxxo'],
    'line_items' => [
        $arrayProducts
    ],
    'discounts' => [
        ['coupon' => $discount],
    ],
    'payment_intent_data' => ['metadata' => ['order_id' => $_SESSION['id']]],
    'mode' => 'payment',
    'metadata' => ['order_id' => $_SESSION['id']],
    'success_url' => $YOUR_DOMAIN . 'orden-compras?c_ref=' . base64_encode($_SESSION['id']),
    'cancel_url' => $YOUR_DOMAIN . 'checkouts',
]);

echo $checkout_session->url;