<?php
require_once('vendor/autoload.php');

ini_set('display_errors',1);
error_reporting(E_ALL);
\Stripe\Stripe::setApiKey('pk_test_51LGvASAm2AQidZUiG94eyCwWX6hWesMoDYQnkKIxPsHoHPUqh0HXw508vWXfkLjDYjg8CL0lL3nikCNBJnCgyMNM0099NWrSQZ');


// This is a public sample test API key.
// Don’t submit any personally identifiable information in requests made with this key.
// Sign in to see your own test API key embedded in code samples.

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost:4242/public';

$checkout_session = \Stripe\Checkout\Session::create([
    'line_items' => [[
        # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
        'price' => '{{PRICE_ID}}',
        'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => $YOUR_DOMAIN . '/success.html',
    'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);





$checkout_session = \Stripe\Checkout\Session::create([
    'shipping_options' => [
        [
            'shipping_rate_data' => [
                'type' => 'fixed_amount',
                'fixed_amount' => [
                    'amount' => 30.00,
                    'currency' => 'mxn',
                ],
                'display_name' => 'Free shipping',
            ]
        ]
    ],
    'customer_email' => 'customer@example.com',
    //card, acss_debit, affirm, afterpay_clearpay, alipay, au_becs_debit, bacs_debit, bancontact, blik, boleto, customer_balance, eps, fpx, giropay, grabpay, ideal, klarna, konbini, oxxo, p24, paynow, promptpay, sepa_debit, sofort, us_bank_account, or wechat_pay
//    'payment_method_types' => ['card', 'oxxo'],
    'line_items' => [[
        'price_data' => [
            'currency' => 'mxn',
            'product_data' => [
                'name' => 'T-shirt',
            ],
            'unit_amount' => 2000,
        ],
        'quantity' => 1,
    ]],
    'allow_promotion_codes' => true,
    'mode' => 'payment',
    'success_url' => $YOUR_DOMAIN . '/success.html',
    'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);


echo $checkout_session->url;
