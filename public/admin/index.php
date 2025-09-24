<?php
// /public/admin/index.php
if (session_status() !== PHP_SESSION_ACTIVE)
    session_start();

// Sube 3 niveles: /public/admin → /public → /httpdocs
$APP = dirname(__DIR__, 3);

// Verificaciones defensivas (útil mientras pruebas):
if (!is_dir($APP . '/app/config')) {
    error_log('APP base wrong: ' . $APP);
}
if (!file_exists($APP . '/vendor/autoload.php')) {
    error_log('Missing autoload at: ' . $APP . '/vendor/autoload.php');
}

// Autoload + config + DB + helpers
require $APP . '/vendor/autoload.php';
require $APP . '/app/config/config.php';
require $APP . '/app/config/db.php';
require $APP . '/app/config/auth.php';

// ... el resto de tu bootstrap y router del admin

session_start();
$ROOT = dirname(__DIR__, 1);           // .../public
$APP = dirname($ROOT);                // raiz proyecto
require $APP . '/app/config/config.php';
require $APP . '/app/config/db.php';
require $APP . '/app/config/auth.php';
require $APP . '/app/controllers/AuthController.php';
require $APP . '/app/controllers/MemberController.php';

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
