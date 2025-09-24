<?php
use App\Support\Config;

date_default_timezone_set('Europe/Madrid');

// configuración (debug, env, etc.)
$debug = Config::get('app.debug', true);
error_reporting(E_ALL);
ini_set('display_errors', $debug ? '1' : '0');

// sesión
if (session_status() === PHP_SESSION_NONE) session_start();

// paths de ayuda
define('VIEW_PATH', BASE_PATH . '/app/views');
define('STORAGE_PATH', BASE_PATH . '/storage');
require BASE_PATH . '/app/helpers/url.php';
require BASE_PATH . '/app/config/auth.php';

