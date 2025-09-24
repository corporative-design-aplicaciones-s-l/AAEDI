<?php if (session_status() === PHP_SESSION_NONE)
    session_start();
$_SESSION['csrf_token'] = bin2hex(random_bytes(16));
?>

<style>
    /* ——— Botones estilo “píldora” ——— */
    .btn-pill {
        border-radius: 999px;
        padding: 14px 24px;
        font-weight: 600;
        border: 3px solid #0b5ab8;
    }

    .btn-pill.btn-primary {
        background: #0b5ab8;
        border-color: #0b5ab8;
    }

    .btn-pill.btn-outline-primary {
        background: #fff;
        color: #0b5ab8;
    }

    /* ——— Tarjetas ——— */
    .sheet {
        background: #fff;
        border-radius: 12px;
        padding: 26px 30px;
        box-shadow: 0 10px 28px rgba(0, 0, 0, .08);
    }

    .icon-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .icon-list li {
        position: relative;
        padding-left: 28px;
        margin: 8px 0;
    }

    .icon-list li i {
        position: absolute;
        left: 0;
        top: .3rem;
        color: #0b5ab8;
    }

    /* ——— Formularios rellenables ——— */
    .form-sheet {
        background: #fff;
        border-radius: 12px;
        padding: 28px 32px;
        box-shadow: 0 10px 28px rgba(0, 0, 0, .06);
        max-width: 900px;
        margin: 0 auto 32px;
    }

    .form-sheet h3 {
        margin-bottom: 10px;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px 20px;
    }

    .form-grid .full {
        grid-column: 1 / -1;
    }

    .form-line {
        border-bottom: 1px solid #ddd;
        height: 34px;
    }

    .form-help {
        font-size: .9rem;
        color: #6c757d;
    }

    .btn-print {
        margin-top: 14px;
    }

    .print-input {
        width: 100%;
        height: 34px;
        background: transparent;
        border: 0;
        border-bottom: 1px solid #ddd;
        padding: 0 2px;
    }

    .print-area {
        width: 100%;
        min-height: 70px;
        background: transparent;
        border: 1px solid #ddd;
        padding: 6px 8px;
        resize: vertical;
    }

    @media (max-width: 767.98px) {
        .form-grid {
            grid-template-columns: 1fr;
        }
    }

    /* Impresión general (para cuando se use Ctrl+P en toda la página) */
    @media print {

        .site-header,
        .site-footer,
        .btn,
        .btn-print,
        .btn-pill,
        .page_header {
            display: none !important;
        }

        .bg-gray {
            background: #fff !important;
        }

        .form-sheet {
            box-shadow: none;
            border-radius: 0;
            margin: 0 0 12mm 0;
            padding: 0;
        }

        .print-input {
            border-bottom: 1px solid #555;
        }

        .print-area {
            border: 1px solid #555;
        }
    }

    /* ✅ Alineación perfecta de ticks y texto */
    .icon-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .icon-list li {
        display: flex;
        align-items: flex-start;
        /* alinea con la 1ª línea del texto */
        gap: 10px;
        margin: 8px 0;
        padding-left: 0;
        /* quitamos el hueco del absoluto anterior */
    }

    .icon-list li i {
        position: static !important;
        /* anula el absolute antiguo */
        flex: 0 0 auto;
        font-size: 1rem;
        /* ajusta si quieres más/menos grande */
        line-height: 1;
        /* evita saltos raros */
        transform: translateY(-5px);
        /* microajuste; pon 0–3px según tipografía */
        color: #0b5ab8;
    }
</style>
</head>

<body class="asociarse">
    <div class="wrapper">
        <div class="page_header text-center" data-stellar-background-ratio="0.5">
            <div class="container">
                <h3>Cómo asociarse</h3>
                <p>Únete a AAEDI y forma parte de la red de abogados especializados en Derecho Inmobiliario.</p>
            </div>
        </div>

        <!-- CONTENIDO -->
        <div class="bg-gray padding-top-70 padding-bottom-70">
            <div class="container">

                <!-- Requisitos + Documentación -->
                <div class="row g-4">
                    <div class="col-lg-7">
                        <div class="sheet h-100">
                            <h2 class="h4 mb-3">Requisitos de admisión</h2>
                            <p class="mb-2">Podrán ser miembros de la Asociación las personas que voluntariamente lo
                                soliciten y, además, cumplan el siguiente requisito:</p>
                            <ul class="icon-list mb-3">
                                <li><i class="fa fa-check-circle"></i> <strong>Ser abogado/a colegiado/a en
                                        ejercicio</strong> (no basta con la licenciatura o el grado).</li>
                            </ul>
                            <h3 class="h5 mt-3">Cuotas</h3>
                            <p class="mb-0"><strong>Cuota de ingreso:</strong> 500&nbsp;€ &nbsp;·&nbsp; <strong>Cuota
                                    periódica:</strong> 60&nbsp;€ por trimestre.</p>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="sheet h-100">
                            <h2 class="h4 mb-3">Documentación para el alta</h2>
                            <ul class="icon-list">
                                <li><i class="fa fa-check-circle"></i> Solicitud de ingreso firmada.</li>
                                <li><i class="fa fa-check-circle"></i> Orden de domiciliación bancaria (SEPA).</li>
                                <li><i class="fa fa-check-circle"></i> Documento RGPD cumplimentado.</li>
                                <li><i class="fa fa-check-circle"></i> Fotocopia compulsada del título universitario en
                                    Derecho.</li>
                                <li><i class="fa fa-check-circle"></i> Certificado de colegiación como ejerciente.</li>
                                <li><i class="fa fa-check-circle"></i> Fotocopia del DNI.</li>
                                <li><i class="fa fa-check-circle"></i> 1 fotografía tamaño carnet.</li>
                                <li><i class="fa fa-check-circle"></i> Alta en el I.A.E. (si procede).</li>
                                <li><i class="fa fa-check-circle"></i> Copia del Seguro de Responsabilidad Civil
                                    profesional.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <form id="join-form" action="/asociarse/enviar" method="post" novalidate>
                <div class="row my-5 g-4">
                    <div class="col-md-6">
                        <label>Nombre y apellidos*</label>
                        <input name="full_name" type="text" class="form-control mt-2 mb-3" required>

                        <label>Email*</label>
                        <input name="email" type="email" class="form-control mt-2 mb-3" required>

                        <label>Teléfono</label>
                        <input name="phone" type="tel" class="form-control mt-2 mb-3">

                        <label>Despacho / Firma</label>
                        <input name="firm" type="text" class="form-control mt-2 mb-3">

                        <label>Nº de colegiado</label>
                        <input name="bar_number" type="text" class="form-control mt-2 mb-3">
                    </div>

                    <div class="col-md-6 ">
                        <label>Ciudad</label>
                        <input name="city" type="text" class="form-control mt-2 mb-3">

                        <label>Mensaje</label>
                        <textarea name="message" rows="6" class="form-control mt-2 mb-3"></textarea>

                        <div class="justify-content-center align-items-center text-center">
                            <div class="form-control border-0">
                                <input class="form-check-input" type="checkbox" id="consent_tos" name="consent_tos"
                                    class="form-control mt-2 mb-3" required>
                                <label class="form-check-label" for="consent_tos" class="form-control mt-2 mb-3">&nbsp;
                                    Acepto los
                                    Términos*</label>
                            </div>
                            <div class="form-control border-0">
                                <input class="form-check-input" type="checkbox" id="consent_privacy"
                                    name="consent_privacy" class="form-control mt-2 mb-3" required>
                                <label class="form-check-label" for="consent_privacy"
                                    class="form-control mt-2 mb-3">&nbsp;
                                    Acepto la
                                    Privacidad*</label>
                            </div>

                            <!-- Honeypot -->
                            <input type="text" name="website" tabindex="-1" autocomplete="off"
                                style="position:absolute;left:-9999px;opacity:0;height:0;width:0">

                            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                            <button type="submit" class="btn btn-primary mt-2">Solicitar alta</button>
                            <div id="join-status" class="mt-2" role="status" aria-live="polite"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        // AJAX
        document.getElementById('join-form').addEventListener('submit', async (e) => {
            e.preventDefault();
            const form = e.currentTarget;
            const status = document.getElementById('join-status');
            status.textContent = 'Enviando…';

            const res = await fetch(form.action, { method: 'POST', body: new FormData(form) });
            let data; try { data = await res.json(); } catch { data = { ok: false, error: 'Respuesta inválida' }; }

            if (data.ok) { status.textContent = '¡Solicitud enviada!'; form.reset(); }
            else { status.textContent = 'Error: ' + (data.error || 'No se pudo enviar'); }
        });
    </script>