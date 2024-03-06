<?php include 'includes/header.php';

// Conectar a la bd con PDO
$db = new PDO('mysql:host=localhost; dbname=bienesraices_crud','root','');
$query = "SELECT titulo,imagen FROM propiedades;";

// //Consular la bd -> Sin sentencias preparadas
// $propiedades = $db -> query($query) -> fetch();
// var_dump($propiedades);

// Sentencias preparadas
$stmt = $db->prepare($query);
$stmt->execute();
$resultado = $stmt->fetchAll( PDO::FETCH_ASSOC);

foreach($resultado as $propiedad):
    echo $propiedad['titulo'];
    echo "<br>";
    echo $propiedad['imagen'];
endforeach;
include 'includes/footer.php';