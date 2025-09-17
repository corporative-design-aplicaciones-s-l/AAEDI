<?php
namespace App\Core;

final class Router {
  private static array $r = ['GET'=>[],'POST'=>[]];
  public static function get($p,$a){ self::$r['GET'][$p]=$a; }
  public static function post($p,$a){ self::$r['POST'][$p]=$a; }

  public static function dispatch($m,$u){
    $a = self::$r[$m][$u] ?? null;
    if(!$a){ http_response_code(404); echo '404 Not Found'; return; }
    is_array($a) ? (new $a[0])->{$a[1]}() : $a();
  }
}
