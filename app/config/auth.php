<?php
if (session_status() !== PHP_SESSION_ACTIVE) session_start();

function csrf_token(): string {
    if (empty($_SESSION['csrf'])) {
        $_SESSION['csrf'] = bin2hex(random_bytes(16));
    }
    return $_SESSION['csrf'];
}

/**
 * Valida CSRF SOLO cuando el request es POST/PUT/PATCH/DELETE.
 * En GET debe devolver true (no se valida CSRF en GET).
 */
function csrf_ok(): bool {
    $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
    if (!in_array($method, ['POST','PUT','PATCH','DELETE'], true)) {
        return true; // <-- clave para que /admin (GET) no rompa
    }
    $a = $_POST['_csrf'] ?? $_SERVER['HTTP_X_CSRF_TOKEN'] ?? '';
    $b = $_SESSION['csrf'] ?? '';
    return $a && $b && hash_equals($b, $a);
}
