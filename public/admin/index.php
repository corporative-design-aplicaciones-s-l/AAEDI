<?php

// root del proyecto (dos niveles arriba de /public/admin)
$APP = dirname(__DIR__, 2);

// Logs defensivos (puedes quitar luego)
error_log('__DIR__ = ' . __DIR__);
error_log('APP = ' . $APP);

 session_start();
// require $APP . '/src/Support/Config.php';
// require $APP . '/src/Core/DB.php';
require $APP . '/app/config/auth.php';
require $APP . '/app/controllers/AuthController.php';
require $APP . '/app/controllers/MemberController.php';

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$uri = preg_replace('#^admin/?#', '', $uri); // quitar prefijo admin

// rutas
if ($uri === '' || $uri === 'members')                return \App\Controllers\MemberController::index();
if ($uri === 'members/create')                        return \App\Controllers\MemberController::create();
if ($uri === 'members/store' && $_SERVER['REQUEST_METHOD']==='POST') return \App\Controllers\MemberController::store();
if (preg_match('#^members/(\d+)/edit$#', $uri, $m))   return \App\Controllers\MemberController::edit((int)$m[1]);
if (preg_match('#^members/(\d+)/update$#', $uri, $m) && $_SERVER['REQUEST_METHOD']==='POST') return \App\Controllers\MemberController::update((int)$m[1]);
if (preg_match('#^members/(\d+)/toggle$#', $uri, $m)) return \App\Controllers\MemberController::toggle((int)$m[1]);
if (preg_match('#^members/(\d+)/delete$#', $uri, $m)) return \App\Controllers\MemberController::delete((int)$m[1]);

if ($uri === 'login')                                  return \App\Controllers\AuthController::login();
if ($uri === 'logout')                                 return \App\Controllers\AuthController::logout();
http_response_code(404); echo '404';
