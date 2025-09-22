<?php
use App\Controllers\BasicRoutesController;
use App\Controllers\ContactController;
use App\Controllers\MemberController;
use App\Controllers\MembershipController;
use App\Core\Router;

// Rutas Básicas
Router::get('/', [BasicRoutesController::class, 'home']);
Router::get('/filosofia', [BasicRoutesController::class, 'filosofia']);
Router::get('/miembros', [BasicRoutesController::class, 'miembros']);
Router::get('/junta-de-gobierno', [BasicRoutesController::class, 'junta']);
Router::get('/asociarse', [BasicRoutesController::class, 'asociarse']);
Router::get('/formaciones', [BasicRoutesController::class, 'formaciones']);
Router::get('/servicios', [BasicRoutesController::class, 'servicios']);
Router::get('/contacto', [BasicRoutesController::class, 'contacto']);

// Rutas de formulario
Router::post('/contacto', [BasicRoutesController::class, 'sendContactForm']);
Router::post('/asociarse/enviar', [MembershipController::class, 'submit']);
Router::post('/home/submit', [ContactController::class, 'submit']);
Router::post('/contact/submit', [ContactController::class, 'submitPage']);
Router::post('/member/{slug}/submit', [ContactController::class, 'memberContact']);

// Rutas páginas de miembros:
Router::get('/miembros/{slug}', [MemberController::class, 'show']);
