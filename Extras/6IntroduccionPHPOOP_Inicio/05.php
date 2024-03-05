<?php 
declare(strict_types = 1);
include 'includes/header.php';

// Herencia

abstract class Transporte{
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    public function getInfo(){
        return 'El transporte tiene '.$this -> ruedas. ' y una capacidad de ' . $this -> capacidad. ' personas';
    }

    public function getRuedas(){
        return $this -> ruedas;
    }
}

class Bicicleta extends Transporte{
    public function getInfo()
    {
        return 'El transporte tiene '.$this -> ruedas. ' y una capacidad de ' . $this -> capacidad. ' personas y NO gasta gasolina';
    }
}

class Automovil extends Transporte{
    public function __construct(protected int $ruedas,protected int $capacidad,protected string $transmision){
        
    }

    public function getTransmision() : string{
        return $this -> transmision;
    }
}
echo "<hr>";

$auto = new Automovil(4,4,'Manual');
echo $auto -> getInfo();
echo $auto -> getRuedas();
echo $auto -> getTransmision();
echo "<hr>";
$bicicleta = new Bicicleta(2,2);
echo $bicicleta -> getInfo();
include 'includes/footer.php';