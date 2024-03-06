<?php include 'includes/header.php';

use App\Clientes;
use App\Detalles;

// // Incluir las otras clases
// require 'clases/Clientes.php';
// require 'clases/Detalles.php';

function mi_autoload($clase){
    $partes = explode('\\',$clase);
    require  __DIR__.'/clases/'.$partes[1].'.php';
}
// Traer las clases que vayamos requiriendo
spl_autoload_register('mi_autoload');

// class Clientes{
//     public function __construct()
//     {
//         echo "Desde 08.php y la clase cliente";
//     }
// }

$detalles = new Detalles();
$clientes = new Clientes();
$clientes2 = new Clientes();

include 'includes/footer.php';