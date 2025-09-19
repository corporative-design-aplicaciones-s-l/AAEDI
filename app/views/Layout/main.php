<!doctype html>
<html lang="es">

<head>
    <?php include VIEW_PATH . '/partials/meta.php'; ?>
    <base href="<?= base_url() ?>/" />
    <meta charset="utf-8">
    <title><?= $title ?? 'AAEDI' ?></title>

    <!-- CSS globales -->
    <link rel="stylesheet" href="<?= asset('js/vendor/slick/slick.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/animate.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/themesuite.css') ?>">
    <link rel="stylesheet" href="<?= asset('js/vendor/lity/lity.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/main.css') ?>">
    

    <!-- Slot opcional de estilos por-vista -->
    <?= $styles ?? '' ?>
</head>

<body class="<?= $bodyClass ?? '' ?>">
    <div class="wrapper">
        <?php include VIEW_PATH . '/partials/header.html'; ?>

        <!-- Aquí entra el HTML de la vista -->
        <?= $content ?>

        <?php include VIEW_PATH . '/partials/footer.html'; ?>
    </div>

    <!-- JS globales -->
    <script src="<?= asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') ?>"></script>
    <script src="<?= asset('js/vendor/slick/slick.min.js') ?>"></script>
    <script src="<?= asset('js/vendor/lity/lity.min.js') ?>"></script>
    <script src="<?= asset('js/main.js') ?>"></script>

    <!-- Slot opcional de scripts por-vista -->
    <?= $scripts ?? '' ?>
</body>

</html>