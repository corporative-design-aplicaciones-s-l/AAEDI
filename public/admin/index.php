<?php
define('BASE_PATH', dirname(__DIR__));   // raíz del proyecto

session_start();
require BASE_PATH . '/../src/Support/Config.php';
require BASE_PATH . '/../src/Core/DB.php';
require BASE_PATH . '/../app/config/auth.php';
require BASE_PATH . '/../app/Controllers/AuthController.php';
require BASE_PATH . '/../app/Controllers/MemberController.php';

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$uri = preg_replace('#^admin/?#', '', $uri); // quitar prefijo admin

// rutas
if ($uri === '' || $uri === 'members')
    return \App\Controllers\MemberController::index();
if ($uri === 'members/create')
    return \App\Controllers\MemberController::create();
if ($uri === 'members/store' && $_SERVER['REQUEST_METHOD'] === 'POST')
    return \App\Controllers\MemberController::store();
if (preg_match('#^members/(\d+)/edit$#', $uri, $m))
    return \App\Controllers\MemberController::edit((int) $m[1]);
if (preg_match('#^members/(\d+)/update$#', $uri, $m) && $_SERVER['REQUEST_METHOD'] === 'POST')
    return \App\Controllers\MemberController::update((int) $m[1]);
if (preg_match('#^members/(\d+)/toggle$#', $uri, $m))
    return \App\Controllers\MemberController::toggle((int) $m[1]);
if (preg_match('#^members/(\d+)/delete$#', $uri, $m))
    return \App\Controllers\MemberController::delete((int) $m[1]);

if ($uri === 'login')
    return \App\Controllers\AuthController::login();
if ($uri === 'logout')
    return \App\Controllers\AuthController::logout();
http_response_code(404);
echo '404';
