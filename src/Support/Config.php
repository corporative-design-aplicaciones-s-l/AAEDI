<?php
namespace App\Support;

final class Config
{
    private static $cache = [];

    public static function get(string $key, $default = null)
    {
        $parts = explode('.', $key);
        $file  = array_shift($parts); 
        $path  = $parts; 

        if (!isset(self::$cache[$file])) {
            $fn = BASE_PATH . "/app/config/{$file}.php";
            self::$cache[$file] = file_exists($fn) ? require $fn : [];
        }

        $val = self::$cache[$file];
        foreach ($path as $segment) {
            if (is_array($val) && array_key_exists($segment, $val)) {
                $val = $val[$segment];
            } else {
                return $default;
            }
        }
        return $val;
    }
}
