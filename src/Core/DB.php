<?php
namespace App\Core;

use App\Support\Config;
use PDO;

final class DB {
  private static array $pool = [];

  public static function conn(?string $name=null): PDO {
    $name = $name ?: Config::get('app.env','dev');

    if (isset(self::$pool[$name])) return self::$pool[$name];

    $c = Config::get("database.connections.$name")
      ?: Config::get("database.connections." . Config::get('database.default','dev'));

    $dsn = sprintf('%s:host=%s;port=%d;dbname=%s;charset=%s',
      $c['driver'] ?? 'mysql', $c['host'], $c['port'] ?? 3306, $c['database'], $c['charset'] ?? 'utf8mb4');

    return self::$pool[$name] = new PDO($dsn, $c['username'], $c['password'], [
      PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES=>false,
    ]);
  }
}
