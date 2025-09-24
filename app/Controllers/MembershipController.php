<?php
namespace App\Controllers;

use App\Core\DB;
use App\Helpers\Mailer;

class MembershipController
{
    public function submit()
    {
        header('Content-Type: application/json; charset=utf-8');

        try {
            if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
                http_response_code(405);
                echo json_encode(['ok' => false, 'error' => 'Método no permitido']);
                return;
            }

            if (session_status() === PHP_SESSION_NONE)
                session_start();
            $csrfOk = isset($_POST['csrf_token'], $_SESSION['csrf_token'])
                && hash_equals($_SESSION['csrf_token'], $_POST['csrf_token']);
            if (!$csrfOk)
                throw new \RuntimeException('Token CSRF inválido');

            if (!empty($_POST['website']))
                throw new \RuntimeException('Bot detectado'); // honeypot

            // Campos
            $full = trim($_POST['full_name'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $phone = trim($_POST['phone'] ?? '');
            $firm = trim($_POST['firm'] ?? '');
            $bar = trim($_POST['bar_number'] ?? '');
            $city = trim($_POST['city'] ?? '');
            $msg = trim($_POST['message'] ?? '');
            $tos = isset($_POST['consent_tos']) ? 1 : 0;
            $priv = isset($_POST['consent_privacy']) ? 1 : 0;

            if ($full === '' || $email === '')
                throw new \InvalidArgumentException('Faltan campos obligatorios');
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                throw new \InvalidArgumentException('Email no válido');
            if (!$tos || !$priv)
                throw new \InvalidArgumentException('Debes aceptar términos y privacidad');

            // DB
            $pdo = DB::conn();
            $stmt = $pdo->prepare("
              INSERT INTO aaedi_membership_requests
              (full_name,email,phone,firm,bar_number,city,message,ip,ua,consent_tos,consent_privacy)
              VALUES (:full,:email,:phone,:firm,:bar,:city,:msg,:ip,:ua,:tos,:priv)
            ");
            $stmt->execute([
                ':full' => $full,
                ':email' => $email,
                ':phone' => $phone,
                ':firm' => $firm,
                ':bar' => $bar,
                ':city' => $city,
                ':msg' => $msg,
                ':ip' => $_SERVER['REMOTE_ADDR'] ?? null,
                ':ua' => substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 250),
                ':tos' => $tos,
                ':priv' => $priv
            ]);
            $id = (int) $pdo->lastInsertId();

            // Mail
            $app = include __DIR__ . '/../config/app.php';
            $mc = $app['mail'];

            $payload = [
                'id' => $id,
                'full_name' => $full,
                'email' => $email,
                'phone' => $phone,
                'firm' => $firm,
                'bar_number' => $bar,
                'city' => $city,
                'message' => $msg,
            ];

            // envíos
            Mailer::membershipAdmin($mc, $payload);
            Mailer::membershipAck($mc, $payload);

            echo json_encode(['ok' => true, 'id' => $id]);
        } catch (\Throwable $e) {
            http_response_code(400);
            echo json_encode(['ok' => false, 'error' => $e->getMessage()]);
        }
    }
}
