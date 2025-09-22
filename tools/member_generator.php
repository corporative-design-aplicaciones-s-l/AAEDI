<?php
define('VIEW_PATH', __DIR__ . '/../app/views');

$dirs = [
  VIEW_PATH . '/partials/members',
  VIEW_PATH . '/Partials/members',
  VIEW_PATH . '/partials/index_members',
  VIEW_PATH . '/Partials/index_members',
];
$membersConfPath = __DIR__ . '/../app/config/members.php';
$cfg = is_file($membersConfPath) ? include $membersConfPath : [];

$have = [];
foreach ($cfg as $slug => $m) {
  $view = $m['view'] ?? $slug;
  $have[$view] = $slug;
}

$files = [];
foreach ($dirs as $d) {
  if (is_dir($d)) {
    $php  = glob("$d/*.php")  ?: [];
    $html = glob("$d/*.html") ?: [];
    $files = array_merge($php, $html);
    if ($files) break;
  }
}

function slugify($s) {
  if (class_exists('Transliterator')) {
    $s = \Transliterator::create('Any-Latin; Latin-ASCII; [:Nonspacing Mark:] Remove; Lower()')->transliterate($s);
  } else {
    $s = iconv('UTF-8','ASCII//TRANSLIT',$s);
    $s = strtolower($s);
  }
  $s = preg_replace('~&~',' y ', $s);       // & → y
  $s = preg_replace('~[^a-z0-9]+~','-', $s);
  $s = trim($s,'-');
  return $s ?: 'miembro';
}

$out = [];
foreach ($files as $f) {
  $view = pathinfo($f, PATHINFO_FILENAME); // p.ej. fernandez&monfort
  if (isset($have[$view])) continue;       // ya está en config
  $slug = slugify($view);
  $titleGuess = ucwords(str_replace('-', ' ', $slug));
  $photo = '/img/members/'.$view.'.png';   // ajusta extensión si usas .jpg
  $out[] = "  '$slug' => [ 'name' => '$titleGuess', 'email' => 'CONTACTO@EJEMPLO.COM', 'view' => '$view', 'photo' => '$photo', 'title' => '$titleGuess' ],";
}

echo "Pega esto en app/config/members.php dentro del return [ ... ]:\n\n";
echo implode("\n", $out) . "\n";
