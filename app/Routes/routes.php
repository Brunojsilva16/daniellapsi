<?php

use App\Controllers\PageController;
use App\Controllers\LeadController;

$router->get('', [PageController::class, 'index']);
$router->get('home', [PageController::class, 'index']);

// Endpoint do formulário. As duas opções funcionam:
// /lead-enviar     -> via .htaccess para lead-enviar.php
// /lead/enviar     -> via router MVC
$router->get('lead-enviar', [LeadController::class, 'enviar']);
$router->post('lead-enviar', [LeadController::class, 'enviar']);
$router->get('lead-enviar.php', [LeadController::class, 'enviar']);
$router->post('lead-enviar.php', [LeadController::class, 'enviar']);
$router->get('lead/enviar', [LeadController::class, 'enviar']);
$router->post('lead/enviar', [LeadController::class, 'enviar']);

// Rota 404 sempre por último
$router->get('{any}', [PageController::class, 'notFound']);
