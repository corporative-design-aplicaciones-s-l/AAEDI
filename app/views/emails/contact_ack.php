<?php $primary = '#0b5ab8';
$text = '#1f2937';
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
                        <td style="padding:24px;">
                            <h2 style="margin:0 0 8px 0;">Hemos recibido tu mensaje</h2>
                            <p style="margin:0 0 12px 0;">Hola, <strong><?= htmlspecialchars($name) ?></strong>:</p>
                            <p style="margin:0 0 12px 0;">Gracias por contactarnos sobre
                                “<?= htmlspecialchars($reason) ?>”. Tu referencia es <strong>#<?= (int) $id ?></strong>.
                                Te responderemos pronto.</p>
                            <p style="margin:0;">Un saludo,<br>AAEDI</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>