<?php
namespace App\Helpers;

use PHPMailer\PHPMailer\PHPMailer;

class Mailer
{
    /** Crea y configura PHPMailer desde el array mail de app.php */
    public static function make(array $mc): PHPMailer
    {
        $m = new PHPMailer(true);
        $m->isSMTP();
        $m->Host = $mc['host'];
        $m->Port = $mc['port'];
        $m->SMTPAuth = true;
        $m->Username = $mc['user'];
        $m->Password = $mc['pass'];
        $m->SMTPSecure = ($mc['secure'] === 'ssl')
            ? PHPMailer::ENCRYPTION_SMTPS
            : PHPMailer::ENCRYPTION_STARTTLS;
        $m->CharSet = 'UTF-8';
        $m->setFrom($mc['from']['address'], $mc['from']['name']);
        return $m;
    }

    /** Render muy sencillo de vistas de email */
    public static function render(string $view, array $data = []): string
    {
        $file = __DIR__ . '/../views/emails/' . $view . '.php';
        if (!is_file($file))
            return '';
        extract($data, EXTR_OVERWRITE);
        ob_start();
        include $file;
        return ob_get_clean();
    }

    /** Notificación a secretaría */
    public static function membershipAdmin(array $mc, array $payload): void
    {
        $m = self::make($mc);
        $m->addAddress($mc['to']['address'], $mc['to']['name']);
        // si quieres que responder vaya al solicitante:
        if (!empty($payload['email']) && !empty($payload['full_name'])) {
            $m->addReplyTo($payload['email'], $payload['full_name']);
        }
        $m->isHTML(true);
        $m->Subject = "Nueva solicitud de alta (#{$payload['id']}) — {$payload['full_name']}";
        $m->Body = self::render('membership_admin', $payload);
        $m->AltBody = self::render('membership_admin_alt', $payload);
        $logoPath = __DIR__ . '/../../public/img/aaedi.png';
        // Embebe como imagen CID para que se vea en todos los clientes
        if (is_file($logoPath)) {
            $m->addEmbeddedImage($logoPath, 'aaedi_logo', 'aaedi.png');
        }
        $m->send();
    }

    /** Acuse al solicitante */
    public static function membershipAck(array $mc, array $payload): void
    {
        $m = self::make($mc);
        $m->addAddress($payload['email'], $payload['full_name']);
        $m->isHTML(true);
        $m->Subject = 'Hemos recibido tu solicitud de alta en AAEDI';
        $m->Body = self::render('membership_ack', $payload);
        $m->AltBody = self::render('membership_ack_alt', $payload);
        $logoPath = __DIR__ . '/../../public/img/aaedi.png';
        // Embebe como imagen CID para que se vea en todos los clientes
        if (is_file($logoPath)) {
            $m->addEmbeddedImage($logoPath, 'aaedi_logo', 'aaedi.png');
        }
        $m->send();
    }
}
