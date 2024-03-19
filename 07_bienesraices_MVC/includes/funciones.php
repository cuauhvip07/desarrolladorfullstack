<?php 


define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL',__DIR__ . 'funcions.php');
define('CARPETA_IMAGENES',$_SERVER['DOCUMENT_ROOT'].'/imagenes/');

function incluirTemplate(string $nombre, bool $inicio = false){
    include TEMPLATES_URL."/{$nombre}.php";
}

function estadoAutenticado(){
    session_start();

    if( !$_SESSION['loging']){
        header('Location: /');
    }

   
}

function debuggear($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / sanitizar el HTML
function s($html) : string{
    $s = htmlspecialchars($html);
    return $s;
}

// Validar tipo de contenido 
function validarTipoContenido($tipo){
    $tipos = ['vendedor','propiedad'];

    return in_array($tipo,$tipos);
}

// Muestra los mensajes

function mostrarNotificacion($codigo){
    $mensaje = '';

    switch($codigo){
        case 1: 
            $mensaje = 'Creado correctamente';
            break;
        case 2:
            $mensaje = 'Actualizado correctamente';
            break;
        case 3:
            $mensaje = 'Creado correctamente';
            break;
        default:
            $mensaje = false;
       
    }
    return $mensaje;
}