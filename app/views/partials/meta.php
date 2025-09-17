<!-- META -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<base href="<?= htmlspecialchars(base_url(), ENT_QUOTES) ?>/" />

<!-- FAVICONS -->
<link rel="icon" type="image/x-icon" href="<?= asset('img/favicon.ico') ?>">
<link rel="apple-touch-icon" href="<?= asset('img/apple-touch-icon.png') ?>">

<!-- ICONS -->
<script src="https://kit.fontawesome.com/0030cf4aef.js" crossorigin="anonymous"></script>

<!-- BOOTSTRAP (misma versión en CSS y JS) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- THEME STYLES -->
<link rel="stylesheet" href="<?= asset('css/vendor/slick.css') ?>">
<!-- o 'js/vendor/slick/slick.css' si lo tienes ahí -->
<link rel="stylesheet" href="<?= asset('css/animate.css') ?>">
<link rel="stylesheet" href="<?= asset('css/themesuite.css') ?>">
<link rel="stylesheet" href="<?= asset('css/vendor/lity.min.css') ?>"><!-- o 'js/vendor/lity/lity.min.css' -->
<link rel="stylesheet" href="<?= asset('css/main.css') ?>">

<!-- Polyfills/legacy -->
<script defer src="<?= asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') ?>"></script>

<style>
    .cookie-banner {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: #1c1c1c;
        color: #fff;
        padding: 15px 20px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        font-size: .9rem;
        z-index: 9999
    }

    .cookie-banner a {
        color: #fff;
        text-decoration: underline
    }

    .cookie-actions {
        display: flex;
        gap: 10px;
        margin-top: 10px
    }

    .cookie-actions button {
        background: #007bff;
        color: #fff;
        border: 0;
        padding: 8px 12px;
        cursor: pointer;
        font-size: .85rem;
        border-radius: 4px
    }

    @media (min-width:576px) {
        .cookie-actions {
            margin-top: 0
        }
    }
</style>