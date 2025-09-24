<?php
define('BASE_PATH', dirname(__DIR__) . '/..');   // raíz del proyecto

session_start();
require BASE_PATH . '/src/Support/Config.php';
require BASE_PATH . '/src/Core/DB.php';
require BASE_PATH . '/app/config/auth.php';
require BASE_PATH . '/app/Controllers/AuthController.php';
require BASE_PATH . '/app/Controllers/MemberController.php';
require BASE_PATH . '/app/Controllers/Admin/DataController.php';

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$uri = preg_replace('#^admin/?#', '', $uri); // quitar prefijo admin

// rutas
if ($uri === '' || $uri === 'dashboard')
    return \App\Controllers\Admin\DataController::dashboard();

// CONTACTOS (página de contacto)
if ($uri === 'contacts')
    return \App\Controllers\Admin\DataController::contacts();
if (preg_match('#^contacts/(\d+)$#', $uri, $m))
    return \App\Controllers\Admin\DataController::contact((int) $m[1]);
if ($uri === 'contacts/export')
    return \App\Controllers\Admin\DataController::exportContacts();

// SOLICITUDES DE ASOCIACIÓN
if ($uri === 'memberships')
    return \App\Controllers\Admin\DataController::memberships();
if (preg_match('#^memberships/(\d+)$#', $uri, $m))
    return \App\Controllers\Admin\DataController::membership((int) $m[1]);
if ($uri === 'memberships/export')
    return \App\Controllers\Admin\DataController::exportMemberships();

// CONTACTOS A MIEMBROS (desde fichas)
if ($uri === 'member-contacts')
    return \App\Controllers\Admin\DataController::memberContacts();
if (preg_match('#^member-contacts/(\d+)$#', $uri, $m))
    return \App\Controllers\Admin\DataController::memberContact((int) $m[1]);
if ($uri === 'member-contacts/export')
    return \App\Controllers\Admin\DataController::exportMemberContacts();

// LOGIN
if ($uri === 'login')
    return \App\Controllers\AuthController::login();
if ($uri === 'logout')
    return \App\Controllers\AuthController::logout();
http_response_code(404);
echo '404';
