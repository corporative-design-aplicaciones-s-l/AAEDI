<?php
function csrf_token(): string
{
    if (empty($_SESSION['csrf']))
        $_SESSION['csrf'] = bin2hex(random_bytes(16));
    return $_SESSION['csrf'];
}
function csrf_ok(): bool
{
    return isset($_POST['_csrf']) && hash_equals($_SESSION['csrf'] ?? '', $_POST['_csrf']);
}
function require_login()
{
    if (empty($_SESSION['uid'])) {
        header('Location: /admin/login');
        exit;
    }
}
