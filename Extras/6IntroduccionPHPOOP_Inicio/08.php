<?php include 'includes/header.php';

require 'vendor/autoload.php';

use App\Clientes;
use App\Detalles;
use Firebase\JWT\JWT;


// // Incluir las otras clases
// require 'clases/Clientes.php';
// require 'clases/Detalles.php';

// function mi_autoload($clase){
//     $partes = explode('\\',$clase);
//     require  __DIR__.'/clases/'.$partes[1].'.php';
// }
// // Traer las clases que vayamos requiriendo
// spl_autoload_register('mi_autoload');

// class Clientes{
//     public function __construct()
//     {
//         echo "Desde 08.php y la clase cliente";
//     }
// }

$detalles = new Detalles();
$clientes = new Clientes();
$clientes2 = new Clientes();

$key = 'example_key';
$payload = [
    'iss' => 'http://example.org',
    'aud' => 'http://example.com',
    'iat' => 1356999524,
    'nbf' => 1357000000
];

$headers = [
    'x-forwarded-for' => 'www.google.com'
];

// Encode headers in the JWT string
$jwt = JWT::encode($payload, $key, 'HS256', null, $headers);

// Decode headers from the JWT string WITHOUT validation
// **IMPORTANT**: This operation is vulnerable to attacks, as the JWT has not yet been verified.
// These headers could be any value sent by an attacker.
list($headersB64, $payloadB64, $sig) = explode('.', $jwt);
$decoded = json_decode(base64_decode($headersB64), true);

print_r($decoded);

include 'includes/footer.php';