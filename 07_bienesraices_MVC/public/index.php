<?php 

require_once __DIR__.'/../includes/app.php';

use Controllers\PaginasController;
use MVC\Router;
use Controllers\PropiedadController;
use Controllers\VendedoresController;

$router = new Router;
// Propiedades
// PropiedadController::class -> nos trae el Controllers\PropiedadController;
$router->get('/admin',[PropiedadController::class,'index']);
$router->get('/propiedades/crear',[PropiedadController::class,'crear']);
$router->post('/propiedades/crear',[PropiedadController::class,'crear']);
$router->get('/propiedades/actualizar',[PropiedadController::class,'actualizar']);
$router->post('/propiedades/actualizar',[PropiedadController::class,'actualizar']);
$router->post('/propiedades/eliminar',[PropiedadController::class,'eliminar']);

// Vendedores
$router->get('/vendedores/crear',[VendedoresController::class,'crear']);
$router->post('/vendedores/crear',[VendedoresController::class,'crear']);
$router->get('/vendedores/actualizar',[VendedoresController::class,'actualizar']);
$router->post('/vendedores/actualizar',[VendedoresController::class,'actualizar']);
$router->post('/vendedores/eliminar',[VendedoresController::class,'eliminar']);

// Paginas -> Zona publica
$router->get('/',[PaginasController::class,'index']);
$router->get('/propiedades',[PaginasController::class,'propiedades']);
$router->get('/nosotros',[PaginasController::class,'nosotros']);
$router->get('/propiedad',[PaginasController::class,'propiedad']);
$router->get('/blog',[PaginasController::class,'blog']);
$router->get('/entrada',[PaginasController::class,'entrada']);
$router->get('/contacto',[PaginasController::class,'contacto']);
$router->post('/contacto',[PaginasController::class,'contacto']);

$router->comprobarRutas();

