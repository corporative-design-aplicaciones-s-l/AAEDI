


<div class="page_header text-center" data-stellar-background-ratio="0.5">
    <div class="container">
        <h3>Miembros</h3>
        <p>explora nuestros miembros</p>
    </div>
</div>

<div class="main-content padding-top-100 padding-bottom-70 practice-area1">
    <div class="container">

        <?php
        $membersConfPath = __DIR__ . '/../../config/members.php';
        $members = is_file($membersConfPath) ? include $membersConfPath : [];

        if (!$members) {
            echo '<div class="alert alert-warning">No hay miembros para mostrar.</div>';
        } else {
            // Orden alfabético por título visible (o name)
            uasort($members, function ($a, $b) {
                $ta = $a['title'] ?? $a['name'] ?? '';
                $tb = $b['title'] ?? $b['name'] ?? '';
                return strcasecmp($ta, $tb);
            });

            echo '<div class="row">';
            $i = 0;
            foreach ($members as $slug => $m) {
                if ($i && $i % 4 === 0)
                    echo '</div><div class="row">'; // 4 por fila
                $i++;

                $title = $m['title'] ?? $m['name'] ?? ucfirst(str_replace('-', ' ', $slug));
                $photo = $m['photo'] ?? "/img/members/$slug.png";
                $href = '/miembros/' . rawurlencode($slug);
                $delay = number_format(0.3 * (($i - 1) % 4), 1) . 's';
                ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="practice-item margin-bottom-30 wow fadeInUp " data-wow-delay="<?= htmlspecialchars($delay) ?>">
                        <img src="<?= htmlspecialchars(ltrim($photo, '/')) ?>" class="img-responsive"
                            alt="<?= htmlspecialchars($title) ?>" />
                        <a href="<?= htmlspecialchars($href) ?>">
                            <h4><?= htmlspecialchars($title) ?> <i class="fa fa-angle-double-right"></i></h4>
                        </a>
                    </div>
                </div>
                <?php
            }
            echo '</div>';
        }
        ?>



    </div>
</div>