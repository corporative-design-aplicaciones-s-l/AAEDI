<?php
use App\Controllers\BasicRoutesController;
use App\Controllers\MembershipController;
use App\Core\Router;

Router::get('/', [BasicRoutesController::class, 'home']);
Router::get('/filosofia', [BasicRoutesController::class, 'filosofia']);
Router::get('/miembros', [BasicRoutesController::class, 'miembros']);
Router::get('/junta-de-gobierno', [BasicRoutesController::class, 'junta']);
Router::get('/asociarse', [BasicRoutesController::class, 'asociarse']);
Router::get('/formaciones', [BasicRoutesController::class, 'formaciones']);
Router::get('/servicios', [BasicRoutesController::class, 'servicios']);
Router::get('/contacto', [BasicRoutesController::class, 'contacto']);

Router::post('/contacto', [BasicRoutesController::class, 'sendContactForm']);
Router::post('/asociarse/enviar', [MembershipController::class, 'submit']);