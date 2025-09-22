<?php $primary = '#0b5ab8';
$text = '#1f2937';
$muted = '#6b7280';
$bg = '#f6f7fb';
$card = '#ffffff'; ?>
<!doctype html>
<html lang="es">

<body style="margin:0;padding:0;background:<?= $bg ?>;font-family:Segoe UI,Roboto,Arial,sans-serif;color:<?= $text ?>;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0"
        style="padding:24px 0;background:<?= $bg ?>;">
        <tr>
            <td align="center">
                <table role="presentation" width="600" cellspacing="0" cellpadding="0"
                    style="width:600px;max-width:92%;background:<?= $card ?>;border-radius:12px;box-shadow:0 6px 18px rgba(0,0,0,.06);overflow:hidden;">
                    <tr>
                        <td style="padding:18px 24px;background:<?= $primary ?>;">
                            <img src="[[AAEDI_LOGO_CID]]" alt="AAEDI" height="36" style="display:block;border:0;">
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:22px 24px 10px;">
                            <h2 style="margin:0 0 8px 0;">Nuevo contacto (#<?= (int) $id ?>)</h2>
                            <p style="margin:0;color:<?= $muted ?>;font-size:14px;"><?= htmlspecialchars($reason) ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:8px 24px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                                style="border-collapse:collapse;">
                                <?php
                                $row = function ($l, $v) use ($muted, $text) { ?>
                                    <tr>
                                        <td
                                            style="padding:10px 12px;border-bottom:1px solid #eef1f6;width:38%;color:<?= $muted ?>;font-size:14px;">
                                            <strong><?= htmlspecialchars($l) ?></strong></td>
                                        <td
                                            style="padding:10px 12px;border-bottom:1px solid #eef1f6;color:<?= $text ?>;font-size:14px;">
                                            <?= $v ?></td>
                                    </tr><?php };
                                $row('Nombre', htmlspecialchars($name));
                                $row('Email', '<a href="mailto:' . htmlspecialchars($email) . '" style="color:#0b5ab8;text-decoration:none;">' . htmlspecialchars($email) . '</a>');
                                $row('Teléfono', htmlspecialchars($phone) ?: '<span style="color:#6b7280">—</span>');
                                $row('Motivo', htmlspecialchars($reason));
                                ?>
                            </table>
                        </td>
                    </tr>
                    <?php if (trim($message) !== ''): ?>
                        <tr>
                            <td style="padding:12px 24px;">
                                <div style="background:#fafbff;border:1px solid #eef1f6;border-radius:8px;padding:14px;">
                                    <div style="font-size:13px;color:#6b7280;margin-bottom:6px;">Mensaje:</div>
                                    <div style="font-size:15px;color:#1f2937;white-space:pre-wrap;">
                                        <?= nl2br(htmlspecialchars($message)) ?></div>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <tr>
                        <td style="padding:18px 24px 24px;">
                            <a href="mailto:<?= htmlspecialchars($email) ?>?subject=Respuesta%20AAEDI%20%23<?= (int) $id ?>"
                                style="display:inline-block;background:#0b5ab8;color:#fff;text-decoration:none;font-weight:600;border-radius:8px;padding:10px 16px;">Responder</a>
                            <span style="color:#6b7280;font-size:12px;margin-left:8px;">ID #<?= (int) $id ?></span>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>