<?php
  // Login to save the token
  session_start();
  $reference_id = time();
  unset($_SESSION["rappi_token"]);
  unset($_SESSION["rappi_fg"]);
  unset($_SESSION["id"]);
  unset($_SESSION["checkout_conekta"]);



if($_SERVER['HTTP_HOST'] == 'dev.chektahora.com') {
  $url_rappi = 'https://microservices.dev.rappi.com';
  $client_id = '60f3c096-6836-4fd2-a81a-86f708b193cd';
  $client_secret = 'c9GDM08y9k3s9BJuFIRL5ySVspYMHgLKAHx333f4AP4=';
}else if($_SERVER['HTTP_HOST'] == 'localhost'){
  $url_rappi = 'https://microservices.dev.rappi.com';
  $client_id = '60f3c096-6836-4fd2-a81a-86f708b193cd';
  $client_secret = 'c9GDM08y9k3s9BJuFIRL5ySVspYMHgLKAHx333f4AP4=';
}else{
  $url_rappi = 'https://services.rappi.com';
  $client_id = 'be853750-acac-4f8a-8fd6-b2396a8a969c';
  $client_secret = '3zPeXVC8KlNZ9DvQCqx42MqIskowgwaTMLinuQ2Iih8=';
}
  // Check if the token does not exist or has expired
  if (!isset($_SESSION["rappi_token"]) || $_SESSION["rappi_token"]["expires_in"] <= strtotime("now")) {

    $url = $url_rappi . "/rms/merchant-services/api/v1/tokens";
    $data = ["grant_type" => "client_credentials", "client_id" => $client_id, "client_secret" => $client_secret]; 
    $ch = curl_init($url); 
    $headers = [];

    // Setup options for cURL
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded'] );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Do not forget to capture the headers during the response to keep the figerprint
    curl_setopt($ch, CURLOPT_HEADERFUNCTION,
      function($curl, $header) use (&$headers) {
        $len = strlen($header);
        $header = explode(':', $header, 2);

        // Ignore invalid headers
        if (count($header) < 2) {
          return $len;
        }

        $headers[strtolower(trim($header[0]))][] = trim($header[1]);

        return $len;
      }
    );

    // Send the request
    $result = curl_exec($ch); 
    curl_close($ch); // Don't forget to release the handler to avoid memory leaks later

    if ($result !== false) {
      // Use the session to keep the token until it expires
      $_SESSION["rappi_token"] = json_decode($result);
      // In turn, it preserves the fingerprint to sign each request with the
      $_SESSION["rappi_fg"] = $headers["set-cookie"];
      
      $_SESSION["status"] = 'nuevo';
      
      $_SESSION['descuento_secure'] = 0;

      $_SESSION['promotion'] = 0;

      $_SESSION["promotion_name"] = '';

      $_SESSION['envio'] = 0;
    }
  }
?>