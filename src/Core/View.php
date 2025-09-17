<?php
namespace App\Core;

final class View
{
    public static function render(string $view, array $data = [], ?string $layout = 'main'): void
    {
        $viewFile = VIEW_PATH . '/' . ltrim($view, '/');
        if (!str_ends_with($viewFile, '.php')) $viewFile .= '.php';

        if (!is_file($viewFile)) {
            http_response_code(500);
            echo "❌ View not found: $viewFile";
            return;
        }

        // variables para la vista
        extract($data, EXTR_SKIP);

        // 1) Render vista -> $content
        ob_start();
        require $viewFile;
        $content = ob_get_clean();

        // 2) Sin layout
        if ($layout === null) {
            echo $content;
            return;
        }

        // 3) Render layout
        $layoutFile = VIEW_PATH . '/Layout/' . $layout . '.php'; // respeta tu carpeta "Layout"
        if (!is_file($layoutFile)) {
            trigger_error("⚠️ Layout not found: $layoutFile (rendering view without layout)", E_USER_WARNING);
            echo $content;
            return;
        }

        require $layoutFile;
    }
}
