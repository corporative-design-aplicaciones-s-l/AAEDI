<?php
namespace App\Controllers;

use App\Core\DB;

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
        $slug = $this->resolveSlug($slug, $members) ?? '';


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

    private function resolveSlug(string $seg, array $members): ?string
    {
        $seg = strtolower(urldecode($seg));
        if (isset($members[$seg]))
            return $seg;
        foreach ($members as $slug => $m) {
            if (strtolower($slug) === $seg)
                return $slug;
            $title = $m['title'] ?? $m['name'] ?? $slug;
            $tSlug = strtolower(preg_replace('~[^a-z0-9]+~', '-', iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $title)));
            if ($tSlug === $seg)
                return $slug;
        }
        return null;
    }
}
