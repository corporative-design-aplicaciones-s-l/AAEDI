<?php
$ROOT = dirname(__DIR__);               // /var/www/.../aaedi.maxserratosa.es
require "$ROOT/vendor/autoload.php";

define('BASE_PATH', dirname(__DIR__));   // raíz del proyecto

// init app (timezone, errores, sesiones…)
require BASE_PATH . '/app/init.php';

// cargar rutas
require BASE_PATH . '/app/routes/web.php';

// resolver request
$base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = '/' . ltrim(str_replace($base, '', $uri), '/');
$path = $path === '//' ? '/' : $path;

\App\Core\Router::dispatch($_SERVER['REQUEST_METHOD'], $path);