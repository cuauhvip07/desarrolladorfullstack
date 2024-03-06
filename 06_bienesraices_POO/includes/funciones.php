<?php 


define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL',__DIR__ . 'funcions.php');

function incluirTemplate(string $nombre, bool $inicio = false){
    include TEMPLATES_URL."/{$nombre}.php";
}

function estadoAutenticado() : bool{
    session_start();
    $auth = $_SESSION['loging'];

    if($auth){
        return true;
    }

    return false;
}