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

        $member   = $members[$slug];
        $viewName = $member['view'] ?? $slug;
        $viewFile = __DIR__ . '/../views/members/' . $viewName . '.php';

        if (!is_file($viewFile)) {
            http_response_code(404);
            echo 'Vista del miembro no encontrada';
            return;
        }

        include $viewFile;
    }
}
