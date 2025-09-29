<?php
namespace App\Controllers;

use App\Core\DB;
use App\Core\View;

class MemberController
{
    public function show(array $params)
    {
        $slug = trim($params['slug'] ?? '');

        $members = include BASE_PATH . '/app/config/members.php';

        if (!isset($members[$slug])) {
            http_response_code(404);
            // 404 con layout también:
            $pageTitle = '404 — No encontrado';
            $bodyClass = 'page-404';
            return View::render('errors/404', compact('pageTitle','bodyClass'), 'main');
        }

        $member   = $members[$slug];
        $viewName = $member['view'] ?? $slug; // p.ej. 'apls-legal'

        $pageTitle       = ($member['title'] ?? ucfirst($slug)) . ' — AAEDI';
        $metaDescription = $member['meta']  ?? 'Despacho miembro de AAEDI';
        $bodyClass       = 'page-member';

        // Renderiza la vista del despacho dentro del layout main
        View::render('members/' . $viewName, compact('member','slug','pageTitle','metaDescription','bodyClass'), 'main');
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
