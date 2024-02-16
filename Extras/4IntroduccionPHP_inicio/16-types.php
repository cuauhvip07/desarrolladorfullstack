<?php 
declare(strict_types=1); // Activa el modo estricto;
include 'includes/header.php';

// Void significa que no retorna nada -> Imprime algo
function usuarioAutenticado(bool $autenticado): string|int{ // El string es el type que esperas que retorne
    if($autenticado){
        return 'El usuario ha sido autenticado' ;
    }
    return 20;
    
    
}

$usuario = usuarioAutenticado(true);
echo $usuario;



include 'includes/footer.php';