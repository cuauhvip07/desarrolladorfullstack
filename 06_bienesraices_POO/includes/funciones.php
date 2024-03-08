<?php 


define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL',__DIR__ . 'funcions.php');
define('CARPETA_IMAGENES',__DIR__.'/../imagenes/');

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