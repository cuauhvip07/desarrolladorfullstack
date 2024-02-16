<?php include 'includes/header.php';


$i = 0;
while ($i < 10){
    echo $i. "<br>";
    $i++;
};

echo "<br>";
// do while
$i = 0;
do{
    echo $i. "<br>";
    $i ++;
}while($i < 10);

// for loop
echo "<br>";
for($i=0; $i < 10; $i++){
    echo $i. "<br>";
}

/* Ejercicio Fizz Buzz 
Si se puede dividir entre 3 se pone FIZZ
Si se puede dividir entre 5 se pone BUZZ
Si se puede dividir entre 3 y 5 se pone FIZZ BUZZ
*/
echo "<br>";
$var = 1;
for($var = 1; $var <= 100; $var++){
    if($var % 3 === 0& $var % 5 === 0){
        echo $var.'- FIZZ BUZZ'. "<br>";
    } else if($var % 3 === 0){
        echo $var.'- FIZZ'."<br>";
    }else if($var % 5 === 0){
        echo $var.'- BUZZ'."<br>";
    }else{
        echo $var."<br>";
    }
};



// For each
$clientes = ['Juan','Pedro','Manuel'];
foreach($clientes as $cliente){
    echo $cliente."<br>";
}

// For each para arreglos asociativos

$cliente = [
    'nombre' => 'Pedro',
    'saldo' => 200,
    'tipo' => 'Premium'
];

echo 'Datos del cliente'."<br>";
foreach($cliente as $key => $valor){
    echo $key.': '.$valor."<br>";
}


include 'includes/footer.php';