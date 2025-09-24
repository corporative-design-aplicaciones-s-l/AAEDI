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
        $pdo = DB::conn();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!\csrf_ok()) {
                http_response_code(419);
                exit('CSRF');
            }
            $email = trim($_POST['email'] ?? '');
            $pass = $_POST['password'] ?? '';
            $st = $pdo->prepare('SELECT id,password FROM users WHERE email=?');
            $st->execute([$email]);
            $u = $st->fetch();
            if ($u && password_verify($pass, $u['password'])) {
                $_SESSION['uid'] = $u['id'];
                header('Location: /admin');
                exit;
            }
            $error = 'Credenciales inválidas';
            return view('login', compact('error'));
        }
        return view('login');
    }
    public static function logout()
    {
        session_destroy();
        header('Location: /admin/login');
        exit;
    }
}
