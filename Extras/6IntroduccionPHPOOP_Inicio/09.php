<?php include 'includes/header.php';

// Conectar a la bd
$db = new mysqli('localhost','root','','bienesraices_crud');

// Creacion del query
$query = "SELECT titulo,imagen FROM propiedades;";

// Lo preparamos
$stmt = $db -> prepare($query);

// Ejecutamos
$stmt -> execute();

// Le pones la variable que quieras
$stmt -> bind_result($titulo,$imagen);

// Asignamos el resultado 
// $stmt->fetch();

// Imprimomos el resultado
// var_dump($titulo);
// var_dump($imagen);

// Imprimir todos los resultados
while($stmt -> fetch()):
    var_dump($titulo,$imagen);
endwhile;
include 'includes/footer.php';