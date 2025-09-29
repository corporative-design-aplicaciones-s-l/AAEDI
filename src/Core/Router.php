<?php
namespace App\Core;

final class Router
{
  private static array $routes = ['GET' => [], 'POST' => []];

  public static function get(string $pattern, $handler): void
  {
    self::add('GET', $pattern, $handler);
  }
  public static function post(string $pattern, $handler): void
  {
    self::add('POST', $pattern, $handler);
  }

  private static function add(string $method, string $pattern, $handler): void
  {
    [$regex, $params] = self::compile($pattern);
    self::$routes[$method][] = ['pattern' => $pattern, 'regex' => $regex, 'params' => $params, 'handler' => $handler];
  }

  // '/miembros/{slug}' -> '#^/miembros/(?P<slug>[^/]+)/?$#'
  private static function compile(string $pattern): array
  {
    $params = [];
    $regex = preg_replace_callback('/\{(\w+)(?::([^}]+))?\}/', function ($m) use (&$params) {
      $name = $m[1];
      $re = $m[2] ?? '[^/]+';
      $params[] = $name;
      return '(?P_' . $name . ')' . $re . '(?P>' . $name . ')'; // placeholder, reemplazamos abajo
    }, $pattern);

    // Convertimos el placeholder anterior a grupos con nombre (sin escapar barras)
    $regex = preg_replace('/\(\?P_(\w+)\)([^)]+)\(\?P>\1\)/', '(?P<$1>$2)', $regex);

    $regex = '#^' . rtrim('/' . ltrim($regex, '/'), '/') . '/?$#';
    return [$regex, $params];
  }

  public static function dispatch(string $method, string $uri): void
  {
    $path = parse_url($uri, PHP_URL_PATH) ?? '/';
    $path = '/' . ltrim($path, '/');

    foreach (self::$routes[$method] ?? [] as $r) {
      if (preg_match($r['regex'], $path, $m)) {
        // params nombrados
        $params = [];
        foreach ($r['params'] as $p) {
          $params[$p] = $m[$p] ?? null;
        }

        $h = $r['handler'];
        if (is_array($h)) {
          $obj = new $h[0];
          // Llama con array de params SOLO si el método lo acepta; si no, sin argumentos.
          $ref = new \ReflectionMethod($obj, $h[1]);
          if ($ref->getNumberOfParameters() >= 1) {
            $obj->{$h[1]}($params);
          } else {
            $obj->{$h[1]}();
          }
        } else {
          // closures/func — idem
          $ref = new \ReflectionFunction($h);
          if ($ref->getNumberOfParameters() >= 1) {
            $h($params);
          } else {
            $h();
          }
        }
        return;
      }
    }
    http_response_code(404);
    echo '404 Not Found';
  }
}
