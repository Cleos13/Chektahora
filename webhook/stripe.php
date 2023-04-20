<?php
include '../lib/config.php';
date_default_timezone_set("America/Mexico_City");

// webhook.php
//
// Use this sample code to handle webhook events in your integration.
//
// 1) Paste this code into a new file (webhook.php)
//
// 2) Install dependencies
//   composer require stripe/stripe-php
//
// 3) Run the server on http://localhost:4242
//   php -S localhost:4242

require '../vendor/autoload.php';

// This is your Stripe CLI webhook secret for testing your endpoint locally.
$endpoint_secret = 'whsec_9RO33dsjTw2NI8zD3Uuo3QMUBs02QjnB';
//$endpoint_secret = 'whsec_tljqIFRRg5nJLvv5g1EhZMgKxg8QljDF';

$payload = @file_get_contents('php://input');
$sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
$event = null;

try {
    $event = \Stripe\Webhook::constructEvent(
        $payload, $sig_header, $endpoint_secret
    );
} catch (\UnexpectedValueException $e) {
    // Invalid payload
    http_response_code(400);
    exit();
} catch (\Stripe\Exception\SignatureVerificationException $e) {
    // Invalid signature
    http_response_code(400);
    exit();
}
global $conn;
if($event->type === 'payment_intent.succeeded' || $event->type === 'charge.succeeded'){
    $paymentIntent = $event->data->object->metadata->order_id;
    //$conn->query("INSERT INTO prueba (prueba) VALUE ('$paymentIntent')");
    $get = $conn->query("SELECT * FROM its WHERE estatus_pay = 1");
    $id_order = $get->num_rows + 1;
    $fecha = date('d/m/Y');
    $fecha_ = date('d-m-Y');
    $time = strtotime($fecha_);
    $hora = date('H:i A');

    $conn->query("UPDATE its SET estatus_pay = 1, type_pay='Stripe', fecha_pago='$fecha', hora_pago='$hora', time_pago='$time', orden='$id_order' WHERE ID_compra ='$paymentIntent'");
    http_response_code(200);
}









?>