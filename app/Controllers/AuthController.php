<?php
namespace App\Controllers;

use App\Core\DB;
function view($file, $vars = [])
{
    extract($vars);
    require dirname(__DIR__) . "/views/admin/$file.php";
}

class AuthController
{

    public static function loginForm()
    {

        require dirname(__DIR__) . '/views/admin/login.php';
    }
    public static function login()
    {
        if (session_status() !== PHP_SESSION_ACTIVE)
            session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // pinta form
            require __DIR__ . '/../views/admin/login.php';
            return;
        }

        // POST
        if (!isset($_POST['_csrf']) || !hash_equals($_SESSION['csrf'] ?? '', $_POST['_csrf'])) {
            http_response_code(419);
            exit('CSRF token inválido');
        }

        $email = strtolower(trim($_POST['email'] ?? ''));
        $pass = $_POST['password'] ?? '';

        if ($email === '' || $pass === '') {
            $error = 'Email y contraseña son obligatorios.';
            require __DIR__ . '/../views/admin/login.php';
            return;
        }

        // Conexión PDO
        require __DIR__ . '/../config/db.php'; // define $pdo (PDO)

        // Busca por email normalizado
        $st = $pdo->prepare('SELECT id, email, password FROM users WHERE LOWER(email) = ? LIMIT 1');
        $st->execute([$email]);
        $u = $st->fetch();

        if ($u && password_verify($pass, $u['password'])) {
            // (opcional) rehash si el coste cambió
            if (password_needs_rehash($u['password'], PASSWORD_BCRYPT, ['cost' => 10])) {
                $new = password_hash($pass, PASSWORD_BCRYPT, ['cost' => 10]);
                $pdo->prepare('UPDATE users SET password=? WHERE id=?')->execute([$new, $u['id']]);
            }
            $_SESSION['uid'] = (int) $u['id'];
            $_SESSION['email'] = $u['email'];
            header('Location: /admin');
            exit;
        }

        // Falla login
        $error = 'Credenciales inválidas';
        require __DIR__ . '/../views/admin/login.php';
    }

    public static function logout()
    {
        session_destroy();
        header('Location: /admin/login');
        exit;
    }
}
