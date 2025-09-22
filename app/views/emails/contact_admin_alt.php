Nuevo contacto #<?= (int) $id . PHP_EOL ?>
Nombre: <?= $name . PHP_EOL ?>
Email: <?= $email . PHP_EOL ?>
Teléfono: <?= $phone . PHP_EOL ?>
Motivo: <?= $reason . PHP_EOL ?>
Mensaje: <?= preg_replace('/\s+/', ' ', $message) . PHP_EOL ?>