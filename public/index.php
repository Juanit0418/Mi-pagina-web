<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PublicasController;

$router = new Router();


//Público
$router->get('/', [PublicasController::class, 'inicio']);
$router->post('/', [PublicasController::class, 'inicio']);
$router->get('/sobre_mi', [PublicasController::class, 'sobre_mi']);
$router->get('/portafolio', [PublicasController::class, 'portafolio']);
$router->get('/contacto', [PublicasController::class, 'contacto']);
$router->post('/contacto', [PublicasController::class, 'contacto']);
$router->get('/404', [PublicasController::class, 'error_404']);

$router->comprobarRutas();