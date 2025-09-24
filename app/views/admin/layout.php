<?php
if (session_status() !== PHP_SESSION_ACTIVE)
    session_start();
$logged = !empty($_SESSION['uid']);
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>AAEDI - Backoffice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/admin">AAEDI</a>

            <?php if ($logged): ?>
                <div class="d-flex gap-2">
                    <a class="btn btn-outline-light btn-sm" href="/admin/contacts">Contactos</a>
                    <a class="btn btn-outline-light btn-sm" href="/admin/memberships">Solicitudes</a>
                    <a class="btn btn-outline-light btn-sm" href="/admin/member-contacts">Contactos a miembros</a>
                    <a class="btn btn-light btn-sm" href="/admin/logout">Salir</a>
                </div>
            <?php else: ?>
                <a class="btn btn-light btn-sm ms-auto" href="/admin/login">Entrar</a>
            <?php endif; ?>
        </div>
    </nav>

    <div class="container"><?= $content ?? '' ?></div>
</body>

</html>