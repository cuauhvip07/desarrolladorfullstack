<?php 

require_once __DIR__.'/../includes/app.php';

use MVC\Router;
use Controllers\PropiedadController;


$router = new Router;
// PropiedadController::class -> nos trae el Controllers\PropiedadController;
$router->get('/admin',[PropiedadController::class,'index']);
$router->get('/propiedades/crear',[PropiedadController::class,'crear']);
$router->get('/propiedades/actualizar',[PropiedadController::class,'actualizar']);
$router->comprobarRutas();