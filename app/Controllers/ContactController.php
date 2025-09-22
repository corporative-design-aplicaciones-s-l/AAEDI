<?php
namespace App\Controllers;

use App\Core\DB;
use App\Helpers\Mailer;
use PDO;

class ContactController
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
        throw new \RuntimeException('Bot detectado');

      // Datos
      $name = trim($_POST['name'] ?? '');
      $email = trim($_POST['email'] ?? '');
      $phone = trim($_POST['phone'] ?? '');
      $reason = trim($_POST['reason_for_contact'] ?? '');
      $msg = trim($_POST['message'] ?? '');

      if ($name === '' || $email === '' || $reason === '') {
        throw new \InvalidArgumentException('Faltan campos obligatorios');
      }
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new \InvalidArgumentException('Email no válido');
      }

      // Guarda en BD
      $pdo = DB::conn();
      $stmt = $pdo->prepare("
              INSERT INTO aaedi_contacts (name,email,phone,reason_for_contact,message,ip,ua)
              VALUES (:name,:email,:phone,:reason,:message,:ip,:ua)
            ");
      $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':phone' => $phone,
        ':reason' => $reason,
        ':message' => $msg,
        ':ip' => $_SERVER['REMOTE_ADDR'] ?? null,
        ':ua' => substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 250),
      ]);
      $id = (int) $pdo->lastInsertId();

      // Email
      $app = include __DIR__ . '/../config/app.php';
      $mc = $app['mail'];

      $payload = [
        'id' => $id,
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'reason' => $reason,
        'message' => $msg,
      ];

      // a Secretaría
      Mailer::sendHtml(
        $mc,
        to: [$mc['to']['address'] => $mc['to']['name']],
        subject: "Nuevo contacto (#$id) — $reason",
        html: Mailer::render('contact_admin', $payload),
        alt: Mailer::render('contact_admin_alt', $payload),
        replyTo: [$email => $name],
        embedLogo: true
      );

      // acuse al usuario
      Mailer::sendHtml(
        $mc,
        to: [$email => $name],
        subject: 'Hemos recibido tu mensaje — AAEDI',
        html: Mailer::render('contact_ack', $payload),
        alt: Mailer::render('contact_ack_alt', $payload),
        replyTo: [$mc['to']['address'] => $mc['to']['name']],
        embedLogo: true
      );

      echo json_encode(['ok' => true, 'id' => $id]);

    } catch (\Throwable $e) {
      http_response_code(400);
      echo json_encode(['ok' => false, 'error' => $e->getMessage()]);
    }
  }

  public function submitPage()
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
        throw new \RuntimeException('Bot detectado');

      // Datos
      $name = trim($_POST['name'] ?? '');
      $email = trim($_POST['email'] ?? '');
      $phone = trim($_POST['phone'] ?? '');
      $reason = trim($_POST['reason_for_contact'] ?? '');
      $msg = trim($_POST['message'] ?? '');

      if ($name === '' || $email === '' || $reason === '') {
        throw new \InvalidArgumentException('Faltan campos obligatorios');
      }
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new \InvalidArgumentException('Email no válido');
      }

      // Guarda en BD (misma tabla aaedi_contacts)
      $pdo = DB::conn();
      $stmt = $pdo->prepare("
          INSERT INTO aaedi_contacts (name,email,phone,reason_for_contact,message,ip,ua)
          VALUES (:name,:email,:phone,:reason,:message,:ip,:ua)
        ");
      $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':phone' => $phone,
        ':reason' => $reason,
        ':message' => $msg,
        ':ip' => $_SERVER['REMOTE_ADDR'] ?? null,
        ':ua' => substr($_SERVER['HTTP_USER_AGENT'] ?? '', 250),
      ]);
      $id = (int) $pdo->lastInsertId();

      // Email
      $app = include __DIR__ . '/../config/app.php';
      $mc = $app['mail'];

      $payload = [
        'id' => $id,
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'reason' => $reason,
        'message' => $msg,
      ];

      // a Secretaría
      Mailer::sendHtml(
        $mc,
        to: [$mc['to']['address'] => $mc['to']['name']],
        subject: "Contacto (página Contacto) #$id — $reason",
        html: Mailer::render('contact_admin', $payload),
        alt: Mailer::render('contact_admin_alt', $payload),
        replyTo: [$email => $name],
        embedLogo: true
      );

      // acuse al usuario
      Mailer::sendHtml(
        $mc,
        to: [$email => $name],
        subject: 'Hemos recibido tu mensaje — AAEDI',
        html: Mailer::render('contact_ack', $payload),
        alt: Mailer::render('contact_ack_alt', $payload),
        replyTo: [$mc['to']['address'] => $mc['to']['name']],
        embedLogo: true
      );

      echo json_encode(['ok' => true, 'id' => $id]);

    } catch (\Throwable $e) {
      http_response_code(400);
      echo json_encode(['ok' => false, 'error' => $e->getMessage()]);
    }
  }

  public function memberContact(array $params)
  {
    header('Content-Type: application/json; charset=utf-8');

    try {
      if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
        http_response_code(405);
        echo json_encode(['ok' => false, 'error' => 'Método no permitido']);
        return;
      }

      // Slug de la ruta
      $slug = trim($params['slug'] ?? '');

      // Whitelist de despachos
      $members = include __DIR__ . '/../config/members.php';
      if (!isset($members[$slug])) {
        throw new \RuntimeException('Despacho no reconocido');
      }
      $memberName = $members[$slug]['name'];
      $memberEmail = $members[$slug]['email'];

      // CSRF + honeypot
      if (session_status() === PHP_SESSION_NONE)
        session_start();
      $csrfOk = isset($_POST['csrf_token'], $_SESSION['csrf_token'])
        && hash_equals($_SESSION['csrf_token'], $_POST['csrf_token']);
      if (!$csrfOk)
        throw new \RuntimeException('Token CSRF inválido');
      if (!empty($_POST['website']))
        throw new \RuntimeException('Bot detectado');

      // Datos del formulario
      $name = trim($_POST['name'] ?? '');
      $email = trim($_POST['email'] ?? '');
      $phone = trim($_POST['phone'] ?? '');
      $reason = trim($_POST['reason_for_contact'] ?? '');
      $msg = trim($_POST['message'] ?? '');

      if ($name === '' || $email === '' || $reason === '') {
        throw new \InvalidArgumentException('Faltan campos obligatorios');
      }
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new \InvalidArgumentException('Email no válido');
      }

      // Guarda en BD
      $pdo = DB::conn();
      $stmt = $pdo->prepare("
      INSERT INTO aaedi_member_contacts
        (member_slug,member_name,member_email,name,email,phone,reason_for_contact,message,ip,ua)
      VALUES
        (:slug,:mname,:memail,:name,:email,:phone,:reason,:message,:ip,:ua)
    ");
      $stmt->execute([
        ':slug' => $slug,
        ':mname' => $memberName,
        ':memail' => $memberEmail,
        ':name' => $name,
        ':email' => $email,
        ':phone' => $phone,
        ':reason' => $reason,
        ':message' => $msg,
        ':ip' => $_SERVER['REMOTE_ADDR'] ?? null,
        ':ua' => substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 250),
      ]);
      $id = (int) $pdo->lastInsertId();

      // SMTP + payload
      $app = include __DIR__ . '/../config/app.php';
      $mc = $app['mail'];
      $sec = $mc['to']['address'] ?? null; // BCC/duplicado opcional

      $payload = [
        'id' => $id,
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'reason' => $reason,
        'message' => $msg,
        'member' => ['slug' => $slug, 'name' => $memberName, 'email' => $memberEmail],
      ];

      // ---- Email al despacho ----
      $htmlAdmin = Mailer::render('member_contact_admin', $payload);
      $altAdmin = Mailer::render('member_contact_admin_alt', $payload);
      // Fallbacks (por si la plantilla no está aún)
      if ($htmlAdmin === '') {
        $htmlAdmin = Mailer::render('contact_admin', array_merge($payload, ['name' => $name]));
      }
      if ($altAdmin === '') {
        $altAdmin = Mailer::render('contact_admin_alt', array_merge($payload, ['name' => $name]));
      }

      Mailer::sendHtml(
        $mc,
        to: [$memberEmail => $memberName],
        subject: "Nuevo contacto para {$memberName} (#$id) — {$reason}",
        html: $htmlAdmin,
        alt: $altAdmin,
        replyTo: [$email => $name],
        embedLogo: true
      );

      // Copia a Secretaría (opcional)
      if ($sec && filter_var($sec, FILTER_VALIDATE_EMAIL)) {
        Mailer::sendHtml(
          $mc,
          to: [$sec => 'Secretaría AAEDI'],
          subject: "[Copia] {$memberName} — Nuevo contacto (#$id) — {$reason}",
          html: $htmlAdmin,
          alt: $altAdmin,
          replyTo: [$email => $name],
          embedLogo: true
        );
      }

      // ---- Acuse al usuario ----
      $htmlAck = Mailer::render('member_contact_ack', $payload);
      $altAck = Mailer::render('member_contact_ack_alt', $payload);
      if ($htmlAck === '') {
        $htmlAck = Mailer::render('contact_ack', ['name' => $name, 'id' => $id, 'reason' => $reason]);
      }
      if ($altAck === '') {
        $altAck = Mailer::render('contact_ack_alt', ['name' => $name, 'id' => $id, 'reason' => $reason]);
      }

      Mailer::sendHtml(
        $mc,
        to: [$email => $name],
        subject: "Hemos recibido tu mensaje — {$memberName}",
        html: $htmlAck,
        alt: $altAck,
        replyTo: [$memberEmail => $memberName],
        embedLogo: true
      );

      echo json_encode(['ok' => true, 'id' => $id]);

    } catch (\Throwable $e) {
      http_response_code(400);
      echo json_encode(['ok' => false, 'error' => $e->getMessage()]);
    }
  }

}
