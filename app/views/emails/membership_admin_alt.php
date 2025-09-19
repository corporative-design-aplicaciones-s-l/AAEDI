Nueva solicitud #<?= (int)$id . PHP_EOL ?>
Nombre: <?= $full_name . PHP_EOL ?>
Email: <?= $email . PHP_EOL ?>
Teléfono: <?= $phone . PHP_EOL ?>
Despacho: <?= $firm . PHP_EOL ?>
Colegiado: <?= $bar_number . PHP_EOL ?>
Ciudad: <?= $city . PHP_EOL ?>
Mensaje: <?= preg_replace('/\s+/', ' ', $message) . PHP_EOL ?>
