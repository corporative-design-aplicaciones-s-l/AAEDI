<?php
namespace App\Controllers;

class MemberController
{
    public function show(array $params)
    {
        $slug = trim($params['slug'] ?? '');
        $cfgPath = __DIR__ . '/../config/members.php';
        $members = is_file($cfgPath) ? include $cfgPath : [];

        if (!isset($members[$slug])) {
            http_response_code(404);
            echo 'Miembro no encontrado';
            return;
        }

        $member = $members[$slug];
        $viewName = $member['view'] ?? $slug;
        $viewFile = __DIR__ . '/../views/members/' . $viewName . '.php';

        if (!is_file($viewFile)) {
            http_response_code(404);
            echo 'Vista del miembro no encontrada';
            return;
        }

        include $viewFile;
    }

    public static function index()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) session_start();
        if (empty($_SESSION['uid'])) { header('Location: /admin/login'); exit; }

        // vista mínima para probar
        echo '<!doctype html><meta charset="utf-8"><title>Admin</title>
              <div style="font:14px/1.4 system-ui;padding:24px">
                <h1>Backoffice AAEDI</h1>
                <p>¡Login OK! Esta es la portada del admin.</p>
                <p><a href="/admin/logout">Salir</a></p>
              </div>';
    }
    public static function create()
    {
        \require_login();
        return view('members_form', ['row' => null]);
    }
    public static function store()
    {
        \require_login();
        if (!\csrf_ok()) {
            http_response_code(419);
            exit('CSRF');
        }
        global $pdo;
        $st = $pdo->prepare("INSERT INTO members(slug,logo,claim,nombre,`desc`,tel,web,web_txt,mail,visible,sort)
      VALUES(?,?,?,?,?,?,?,?,?,?,?)");
        $st->execute([
            trim($_POST['slug']),
            trim($_POST['logo'] ?? ''),
            trim($_POST['claim'] ?? ''),
            trim($_POST['nombre']),
            trim($_POST['desc'] ?? ''),
            trim($_POST['tel'] ?? ''),
            trim($_POST['web'] ?? ''),
            trim($_POST['web_txt'] ?? ''),
            trim($_POST['mail'] ?? ''),
            isset($_POST['visible']) ? 1 : 0,
            (int) ($_POST['sort'] ?? 1000),
        ]);
        header('Location: /admin/members');
        exit;
    }
    public static function edit($id)
    {
        \require_login();
        global $pdo;
        $st = $pdo->prepare("SELECT * FROM members WHERE id=?");
        $st->execute([$id]);
        $row = $st->fetch();
        if (!$row) {
            http_response_code(404);
            exit('Not found');
        }
        return view('members_form', compact('row'));
    }
    public static function update($id)
    {
        \require_login();
        if (!\csrf_ok()) {
            http_response_code(419);
            exit('CSRF');
        }
        global $pdo;
        $st = $pdo->prepare("UPDATE members SET slug=?,logo=?,claim=?,nombre=?,`desc`=?,tel=?,web=?,web_txt=?,mail=?,visible=?,sort=? WHERE id=?");
        $st->execute([
            trim($_POST['slug']),
            trim($_POST['logo'] ?? ''),
            trim($_POST['claim'] ?? ''),
            trim($_POST['nombre']),
            trim($_POST['desc'] ?? ''),
            trim($_POST['tel'] ?? ''),
            trim($_POST['web'] ?? ''),
            trim($_POST['web_txt'] ?? ''),
            trim($_POST['mail'] ?? ''),
            isset($_POST['visible']) ? 1 : 0,
            (int) ($_POST['sort'] ?? 1000),
            $id
        ]);
        header('Location: /admin/members');
        exit;
    }
    public static function toggle($id)
    {
        \require_login();
        global $pdo;
        $pdo->prepare("UPDATE members SET visible=1-visible WHERE id=?")->execute([$id]);
        header('Location: /admin/members');
        exit;
    }
    public static function delete($id)
    {
        \require_login();
        global $pdo;
        $pdo->prepare("DELETE FROM members WHERE id=?")->execute([$id]);
        header('Location: /admin/members');
        exit;
    }
}
