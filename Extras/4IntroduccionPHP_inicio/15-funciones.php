<?php include 'includes/header.php';

// Puede pasrle int, float, array, bool
function sumar(int $numero1 = 0,int $numero2 = 0){
    echo $numero1 + $numero2;
}

sumar(10,20);
echo "<br>";
sumar(10);



include 'includes/footer.php';