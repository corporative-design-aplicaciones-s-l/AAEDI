<?php
// Colores corporativos (ajusta si quieres)
$primary = '#0b5ab8';
$text = '#1f2937';
$muted = '#6b7280';
$bg = '#f6f7fb';
$card = '#ffffff';
?>
<!doctype html>
<html lang="es">

<body
  style="margin:0;padding:0;background:<?= $bg ?>;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Arial,'Noto Sans',sans-serif;line-height:1.5;color:<?= $text ?>;">
  <!-- Wrapper -->
  <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:<?= $bg ?>;padding:24px 0;">
    <tr>
      <td align="center">
        <!-- Card -->
        <table role="presentation" width="600" cellspacing="0" cellpadding="0"
          style="width:600px;max-width:92%;background:<?= $card ?>;border-radius:12px;box-shadow:0 6px 18px rgba(0,0,0,.06);overflow:hidden;">
          <!-- Header -->
          <tr>
            <td style="padding:20px 24px;background:<?= $primary ?>;">
              <table role="presentation" width="100%">
                <tr>
                  <td style="vertical-align:middle">
                    <img src="cid:aaedi_logo" alt="AAEDI" height="40" style="display:block;border:0;outline:none;">
                  </td>
                  <td align="right" style="color:#fff;font-weight:600;font-size:16px;vertical-align:middle">
                    Nueva solicitud de alta
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Title -->
          <tr>
            <td style="padding:22px 24px 10px;">
              <h2 style="margin:0 0 8px 0;font-size:20px;color:<?= $text ?>;">Resumen de la solicitud #<?= (int) $id ?>
              </h2>
              <p style="margin:0;color:<?= $muted ?>;font-size:14px;">Recibida el <?= date('d/m/Y H:i') ?>.</p>
            </td>
          </tr>

          <!-- Key/Value Table -->
          <tr>
            <td style="padding:8px 24px 4px;">
              <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
                <?php
                // helper para fila rotulada
                $row = function (string $label, string $value) use ($text, $muted) { ?>
                  <tr>
                    <td
                      style="padding:10px 12px;border-bottom:1px solid #eef1f6;width:38%;color:<?= $muted ?>;font-size:14px;">
                      <strong><?= htmlspecialchars($label) ?></strong>
                    </td>
                    <td style="padding:10px 12px;border-bottom:1px solid #eef1f6;color:<?= $text ?>;font-size:14px;">
                      <?= $value ?>
                    </td>
                  </tr>
                <?php };

                $row('Nombre', htmlspecialchars($full_name));
                $row('Email', '<a href="mailto:' . htmlspecialchars($email) . '" style="color:' . $primary . ';text-decoration:none;">' . htmlspecialchars($email) . '</a>');
                $row('Teléfono', htmlspecialchars($phone) ?: '<span style="color:' . $muted . '">—</span>');
                $row('Despacho', htmlspecialchars($firm) ?: '<span style="color:' . $muted . '">—</span>');
                $row('Colegiado', htmlspecialchars($bar_number) ?: '<span style="color:' . $muted . '">—</span>');
                $row('Ciudad', htmlspecialchars($city) ?: '<span style="color:' . $muted . '">—</span>');
                ?>
              </table>
            </td>
          </tr>

          <!-- Mensaje -->
          <?php if (trim($message) !== ''): ?>
            <tr>
              <td style="padding:12px 24px 6px;">
                <div style="background:#fafbff;border:1px solid #eef1f6;border-radius:8px;padding:14px;">
                  <div style="font-size:13px;color:<?= $muted ?>;margin-bottom:6px;">Mensaje del solicitante:</div>
                  <div style="font-size:15px;color:<?= $text ?>;white-space:pre-wrap;">
                    <?= nl2br(htmlspecialchars($message)) ?>
                  </div>
                </div>
              </td>
            </tr>
          <?php endif; ?>

          <!-- CTA row -->
          <tr>
            <td style="padding:18px 24px 24px;">
              <a href="mailto:<?= htmlspecialchars($email) ?>?subject=Alta%20AAEDI%20%23<?= (int) $id ?>"
                style="display:inline-block;background:<?= $primary ?>;color:#fff;text-decoration:none;font-weight:600;border-radius:8px;padding:10px 16px;">
                Responder al solicitante
              </a>
              <span style="color:<?= $muted ?>;font-size:12px;margin-left:8px;">ID solicitud: #<?= (int) $id ?></span>
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="padding:14px 24px;border-top:1px solid #eef1f6;color:<?= $muted ?>;font-size:12px;">
              AAEDI — Asociación Abogados Expertos en Derecho Inmobiliario<br>
              Este mensaje se generó automáticamente desde el formulario de alta.
            </td>
          </tr>
        </table>
        <!-- /Card -->
      </td>
    </tr>
  </table>
</body>

</html>