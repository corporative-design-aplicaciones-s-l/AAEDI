<?php
namespace App\Controllers\Admin;

use App\Core\DB;

class DataController
{
    /* ---------- Auth ---------- */
    private static function requireLogin()
    {
        if (session_status() !== PHP_SESSION_ACTIVE)
            session_start();
        if (empty($_SESSION['uid'])) {
            header('Location: /admin/login');
            exit;
        }
    }

    /* ---------- Helpers ---------- */
    private static function h($v)
    {
        return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8');
    }

    private static function labelMap(): array
    {
        return [
            'id' => 'ID',
            'created_at' => 'Creado',
            'full_name' => 'Nombre completo',
            'name' => 'Nombre',
            'email' => 'Email',
            'phone' => 'Teléfono',
            'firm' => 'Despacho',
            'bar_number' => 'Colegiado',
            'city' => 'Ciudad',
            'reason_for_contact' => 'Motivo',
            'message' => 'Mensaje',
            'member_slug' => 'Miembro',
            'ip' => 'IP',
            'ua' => 'User-Agent',
            'status' => 'Estado',
            'consent_tos' => 'Términos',
            'consent_privacy' => 'Privacidad'
        ];
    }
    private static function maskEmail(string $e): string
    {
        if (!str_contains($e, '@'))
            return $e;
        [$u, $d] = explode('@', $e, 2);
        $keep = min(2, max(0, strlen($u) - 1));
        return substr($u, 0, $keep) . str_repeat('•', max(1, strlen($u) - $keep)) . '@' . $d;
    }
    private static function maskPhone(string $p): string
    {
        $digits = preg_replace('/\D+/', '', $p);
        if ($digits === '')
            return $p;
        return '•••' . substr($digits, -3);
    }
    private static function maskIP(string $ip): string
    {
        if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
            $parts = explode('.', $ip);
            $parts[3] = '*';
            return implode('.', $parts);
        }
        return $ip;
    }
    private static function formatVal(string $col, $val, bool $masked): string
    {
        if ($val === null)
            return '';
        if ($col === 'created_at')
            return date('d/m/Y H:i', strtotime((string) $val));
        if ($masked) {
            if ($col === 'email')
                return self::maskEmail((string) $val);
            if ($col === 'phone')
                return self::maskPhone((string) $val);
            if ($col === 'ip')
                return self::maskIP((string) $val);
        }
        if ($col === 'message')
            return mb_strimwidth((string) $val, 0, 80, '…', 'UTF-8');
        return (string) $val;
    }

    private static function layout(string $title, string $bodyHtml)
    {
        echo '<!doctype html><meta charset="utf-8"><title>' . self::h($title) . '</title>';
        echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">';
        echo '<div class="container my-4">';
        echo '<nav class="mb-3 d-flex gap-2">
                <a class="btn btn-sm btn-outline-primary" href="/admin">Dashboard</a>
                <a class="btn btn-sm btn-outline-primary" href="/admin/contacts">Contactos</a>
                <a class="btn btn-sm btn-outline-primary" href="/admin/memberships">Solicitudes</a>
                <a class="btn btn-sm btn-outline-primary" href="/admin/member-contacts">Contactos a miembros</a>
                <a class="btn btn-sm btn-outline-secondary ms-auto" href="/admin/logout">Salir</a>
              </nav>';
        echo $bodyHtml, '</div>';
    }

    /* ---------- Dashboard ---------- */
    public static function dashboard()
    {
        self::requireLogin();
        $pdo = DB::conn();
        $counts = [
            'contacts' => (int) $pdo->query('SELECT COUNT(*) FROM aaedi_contacts')->fetchColumn(),
            'memberships' => (int) $pdo->query('SELECT COUNT(*) FROM aaedi_membership_requests')->fetchColumn(),
            'member_contacts' => (int) $pdo->query('SELECT COUNT(*) FROM aaedi_member_contacts')->fetchColumn(),
        ];
        $html = '<h3>Panel</h3>
                 <div class="row g-3">
                   <div class="col-md-4"><a class="text-reset text-decoration-none" href="/admin/contacts">
                     <div class="card"><div class="card-body"><b>Contactos</b><div class="display-6">' . $counts['contacts'] . '</div></div></div></a></div>
                   <div class="col-md-4"><a class="text-reset text-decoration-none" href="/admin/memberships">
                     <div class="card"><div class="card-body"><b>Solicitudes de asociación</b><div class="display-6">' . $counts['memberships'] . '</div></div></div></a></div>
                   <div class="col-md-4"><a class="text-reset text-decoration-none" href="/admin/member-contacts">
                     <div class="card"><div class="card-body"><b>Contactos a miembros</b><div class="display-6">' . $counts['member_contacts'] . '</div></div></div></a></div>
                 </div>';
        self::layout('Admin · Panel', $html);
    }

    /* ---------- Listados (solo lectura) ---------- */
    public static function contacts()
    {
        self::requireLogin();
        self::listTable(
            title: 'Contactos (página de contacto)',
            table: 'aaedi_contacts',
            // columnas visibles en LISTA (sin ip/ua/status)
            cols: ['id', 'created_at', 'name', 'email', 'phone', 'reason_for_contact', 'message'],
            searchCols: ['name', 'email', 'phone', 'reason_for_contact', 'message'],
            viewRoute: '/admin/contacts/',
            exportRoute: '/admin/contacts/export',
            masked: true
        );
    }

    public static function memberships()
    {
        self::requireLogin();
        self::listTable(
            title: 'Solicitudes de asociación',
            table: 'aaedi_membership_requests',
            cols: ['id', 'created_at', 'full_name', 'email', 'phone', 'firm', 'bar_number', 'city', 'message'],
            searchCols: ['full_name', 'email', 'phone', 'firm', 'bar_number', 'city', 'message'],
            viewRoute: '/admin/memberships/',
            exportRoute: '/admin/memberships/export',
            masked: true
        );
    }

    public static function memberContacts()
    {
        self::requireLogin();
        self::listTable(
            title: 'Contactos a miembros',
            table: 'aaedi_member_contacts',
            cols: ['id', 'created_at', 'member_slug', 'name', 'email', 'phone', 'message'],
            searchCols: ['member_slug', 'name', 'email', 'phone', 'message'],
            viewRoute: '/admin/member-contacts/',
            exportRoute: '/admin/member-contacts/export',
            masked: true
        );
    }

    private static function listTable(string $title, string $table, array $cols, array $searchCols, string $viewRoute, string $exportRoute, bool $masked = false)
    {
        $pdo = DB::conn();
        $q = trim($_GET['q'] ?? '');
        $page = max(1, (int) ($_GET['page'] ?? 1));
        $per = min(100, max(10, (int) ($_GET['per'] ?? 25)));
        $off = ($page - 1) * $per;

        $where = '';
        $params = [];
        if ($q !== '') {
            $like = '%' . $q . '%';
            $parts = [];
            foreach ($searchCols as $c) {
                $parts[] = "$c LIKE ?";
                $params[] = $like;
            }
            $where = 'WHERE ' . implode(' OR ', $parts);
        }

        $count = $pdo->prepare("SELECT COUNT(*) FROM $table $where");
        $count->execute($params);
        $total = (int) $count->fetchColumn();

        $sql = "SELECT " . implode(',', $cols) . " FROM $table $where ORDER BY id DESC LIMIT $per OFFSET $off";
        $st = $pdo->prepare($sql);
        $st->execute($params);
        $rows = $st->fetchAll();

        $labels = self::labelMap();

        ob_start();
        echo '<div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="m-0">' . self::h($title) . '</h3>
                <a class="btn btn-sm btn-success" href="' . $exportRoute . ($q !== '' ? ('?q=' . urlencode($q)) : '') . '">Exportar CSV</a>
              </div>';
        echo '<form class="mb-3" method="get"><div class="input-group">
                <input class="form-control" name="q" value="' . self::h($q) . '" placeholder="Buscar...">
                <button class="btn btn-outline-secondary">Buscar</button>
              </div></form>';

        echo '<div class="table-responsive"><table class="table table-sm table-striped align-middle">';
        echo '<thead><tr>';
        foreach ($cols as $c)
            echo '<th>' . self::h($labels[$c] ?? $c) . '</th>';
        echo '<th></th></tr></thead><tbody>';

        foreach ($rows as $r) {
            echo '<tr>';
            foreach ($cols as $c) {
                $val = self::formatVal($c, $r[$c] ?? null, $masked);
                echo '<td>' . self::h($val) . '</td>';
            }
            echo '<td class="text-end"><a class="btn btn-sm btn-outline-primary" href="' . $viewRoute . (int) $r['id'] . '">Ver</a></td>';
            echo '</tr>';
        }
        if (!$rows)
            echo '<tr><td colspan="' . (count($cols) + 1) . '" class="text-center text-muted">Sin resultados</td></tr>';
        echo '</tbody></table></div>';

        $pages = max(1, (int) ceil($total / $per));
        if ($pages > 1) {
            echo '<nav><ul class="pagination pagination-sm">';
            for ($p = 1; $p <= $pages; $p++) {
                $active = $p === $page ? ' active' : '';
                $qs = http_build_query(array_filter(['q' => $q, 'page' => $p, 'per' => $per]));
                echo '<li class="page-item' . $active . '"><a class="page-link" href="?' . $qs . '">' . $p . '</a></li>';
            }
            echo '</ul></nav>';
        }

        $html = ob_get_clean();
        self::layout('Admin · ' . $title, $html);
    }

    /* ---------- Detalle (muestra TODO, sin máscara) ---------- */
    public static function contact(int $id)
    {
        self::requireLogin();
        self::showRecord('aaedi_contacts', $id, 'Contacto');
    }
    public static function membership(int $id)
    {
        self::requireLogin();
        self::showRecord('aaedi_membership_requests', $id, 'Solicitud de asociación');
    }
    public static function memberContact(int $id)
    {
        self::requireLogin();
        self::showRecord('aaedi_member_contacts', $id, 'Contacto a miembro');
    }

    private static function showRecord(string $table, int $id, string $title)
    {
        $pdo = DB::conn();
        $st = $pdo->prepare("SELECT * FROM $table WHERE id = ?");
        $st->execute([$id]);
        $row = $st->fetch();
        if (!$row) {
            http_response_code(404);
            self::layout($title, '<div class="alert alert-warning">No encontrado</div>');
            return;
        }

        ob_start();
        echo '<h3>' . self::h($title) . ' #' . (int) $row['id'] . '</h3>';
        echo '<table class="table table-sm">';
        foreach ($row as $k => $v) {
            $v = is_null($v) ? '<span class="text-muted">NULL</span>' : self::h((string) $v);
            echo '<tr><th style="width:220px">' . self::h($k) . '</th><td>' . $v . '</td></tr>';
        }
        echo '</table>';
        echo '<a class="btn btn-secondary" href="javascript:history.back()">Volver</a>';
        $html = ob_get_clean();
        self::layout('Admin · ' . $title, $html);
    }

    /* ---------- Export CSV (completo) ---------- */
    public static function exportContacts()
    {
        self::requireLogin();
        self::export('aaedi_contacts');
    }
    public static function exportMemberships()
    {
        self::requireLogin();
        self::export('aaedi_membership_requests');
    }
    public static function exportMemberContacts()
    {
        self::requireLogin();
        self::export('aaedi_member_contacts');
    }

    private static function export(string $table)
    {
        $pdo = DB::conn();
        $q = trim($_GET['q'] ?? '');
        $where = '';
        $params = [];
        if ($q !== '') {
            $cols = $pdo->query("SHOW COLUMNS FROM $table")->fetchAll();
            $txtCols = [];
            foreach ($cols as $c) {
                $txtCols[] = $c['Field'];
            }
            $like = '%' . $q . '%';
            $parts = [];
            foreach ($txtCols as $c) {
                $parts[] = "$c LIKE ?";
                $params[] = $like;
            }
            $where = 'WHERE ' . implode(' OR ', $parts);
        }
        $st = $pdo->prepare("SELECT * FROM $table $where ORDER BY id DESC");
        $st->execute($params);

        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename="' . $table . '-' . date('Ymd-His') . '.csv"');

        $out = fopen('php://output', 'w');
        $first = true;
        while ($row = $st->fetch(\PDO::FETCH_ASSOC)) {
            if ($first) {
                fputcsv($out, array_keys($row));
                $first = false;
            }
            foreach ($row as &$v) {
                if (is_string($v))
                    $v = str_replace(["\r\n", "\r"], "\n", $v);
            }
            fputcsv($out, $row);
        }
        fclose($out);
        exit;
    }
}
