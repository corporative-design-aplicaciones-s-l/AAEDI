<div class="page_header text-center" data-stellar-background-ratio="0.5">
    <div class="container">
        <h3>Miembros</h3>
        <p>explora nuestros miembros</p>
    </div>
</div>

<div class="main-content padding-top-100 padding-bottom-70 practice-area1">
    <div class="container">

        <?php
        // Directorios posibles (mayúsculas/minúsculas y nombres que usaste)
        $dirs = [
            VIEW_PATH . '/partials/members',
            VIEW_PATH . '/Partials/members',
            VIEW_PATH . '/partials/index_members',
            VIEW_PATH . '/Partials/index_members',
        ];

        $members = [];
        foreach ($dirs as $d) {
            if (is_dir($d)) {
                $members = glob($d . '/*.html') ?: [];
                if ($members)
                    break;
            }
        }

        if (!$members) {
            echo '<div class="alert alert-warning">No hay miembros para mostrar.</div>';
        } else {
            // Orden natural (A..Z, números bien)
            natcasesort($members);
            $members = array_values($members);

            echo '<div class="row">';
            $delayBase = 0.3;

            foreach ($members as $i => $file) {
                if ($i && $i % 4 === 0)
                    echo '</div><div class="row">'; // 4 por fila
        
                $delay = number_format($delayBase * ($i % 4), 1) . 's';
                $html = @file_get_contents($file) ?: '';

                // Asegurar clases 'wow fadeInUp' en el PRIMER class=""
                $html = preg_replace_callback('/class="([^"]*)"/', function ($m) {
                    $classes = ' ' . $m[1] . ' ';
                    foreach (['wow', 'fadeInUp'] as $c) {
                        if (strpos($classes, ' ' . $c . ' ') === false)
                            $classes .= ' ' . $c;
                    }
                    return 'class="' . trim($classes) . '"';
                }, $html, 1);

                // data-wow-delay en el primer <div ...>
                if (strpos($html, 'data-wow-delay=') !== false) {
                    $html = preg_replace('/data-wow-delay="[^"]*"/', 'data-wow-delay="' . $delay . '"', $html, 1);
                } else {
                    $html = preg_replace('/<div(\s+[^>]*)?>/', '<div$1 data-wow-delay="' . $delay . '">', $html, 1);
                }

                // Normalizar rutas relativas a absolutas (img/js/css) usando base_url()
                $base = rtrim(base_url(), '/') . '/';
                // src/href que empiezan por img|js|css
                $html = preg_replace('#\b(src|href)=["\'](img|js|css)/#i', '$1="' . $base . '$2/', $html);
                // url(img/...) en estilos inline
                $html = preg_replace('#url\((["\']?)(img/[^)\'"]+)\1\)#i', 'url($1' . $base . '$2$1)', $html);

                echo $html;
            }
            echo '</div>'; // cierra la última row
        }
        ?>

    </div>
</div>