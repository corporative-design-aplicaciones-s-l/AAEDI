<?php
if (!function_exists('base_url')) {
  function base_url(): string
  {
    $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (($_SERVER['SERVER_PORT'] ?? '') == 443);
    $scheme = $https ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $script = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
    $base = rtrim(str_replace('/index.php', '', $script), '/'); // ej: /miapp/public
    return "{$scheme}://{$host}{$base}";
  }
}
if (!function_exists('asset')) {
  function asset(string $path): string
  {
    return base_url() . '/' . ltrim($path, '/');
  }
}
function url(string $path = ''): string
{
  return rtrim(base_url(), '/') . '/' . ltrim($path, '/');
}

function member_url(string $slug): string
{
  return '/public/miembros/' . rawurlencode($slug);
}