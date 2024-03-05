<?php include 'includes/header.php';

interface TransporteInterfaz{
    public function getInfo() : string;
    public function getRuedas() : int;
}

abstract class Transporte implements TransporteInterfaz{
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    public function getInfo(): string{
        return 'El transporte tiene '.$this -> ruedas. ' y una capacidad de ' . $this -> capacidad. ' personas';
    }

    public function getRuedas(): int{
        return $this -> ruedas;
    }
}

class Automovil extends Transporte implements TransporteInterfaz{
    public function __construct(protected int $ruedas, protected int $capacidad,protected string $color){

    }
    public function getInfo(): string
    {
        return 'El transporte tiene '.$this -> ruedas. ' y una capacidad de ' . $this -> capacidad. ' personas y tiene el color '.$this->color;
    }

    public function getColor() : string{
        return 'Colo del carro: '.$this->color;
    }
}

echo "<pre>";
var_dump($auto = new Automovil(4,4,'Verde'));
echo "</pre>";

echo "<br>";
echo $auto->getColor();
echo "</br>";

include 'includes/footer.php';