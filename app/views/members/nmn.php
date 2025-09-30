<div class="page_header text-center" data-stellar-background-ratio="0.5">
    <div class="container">
        <h3>NMN Abogados</h3>
        <p>Bufete Español-Neerlandés – Mutxamel (Alicante)</p>
    </div>
</div>

<div class="main-content padding-top-100 padding-bottom-70">
    <div class="container">
        <div class="row">
            <!-- CONTENIDO PRINCIPAL -->
            <div class="col-md-9 col-sm-8 wow fadeInUp" data-wow-delay=".2s">
                <div class="text-center">
                    <img src="img/members/nmn.png" alt="NMN Abogados" class="img-responsive mb-4" width="60%">
                </div>

                <h3 class="heading-title2">NMN Abogados</h3>
                <p>Despacho de identidad español-neerlandesa con sede en Mutxamel (Alicante), con un equipo
                    bilingüe que ofrece asesoramiento legal, fiscal, migratorio y administrativo adaptado a
                    clientes internacionales.</p>

                <div class="margin-bottom-30"></div>
                <h4 class="mb-2">Servicios principales</h4>
                <div class="list-simple">
                    <p><strong>Abogacía general:</strong> asistencia legal directa con una abogada que habla
                        neerlandés.</p>
                    <p><strong>Emigración y NIE:</strong> trámites de NIE, empadronamiento, apertura de cuenta
                        bancaria.</p>
                    <p><strong>Compra de vivienda:</strong> asesoramiento fiscal, due diligence y protocolo de
                        oferta.</p>
                    <p><strong>Hipoteca en España:</strong> acompañamiento completo durante la financiación.</p>
                    <p><strong>Auto y carnet:</strong> homologación, ITV, permisos y exenciones fiscales.</p>
                    <p><strong>Traducción e interpretación:</strong> en consultas médicas, administrativas o
                        vecinales.</p>
                    <p><strong>Gestión de alquileres:</strong> programa para propietarios no residentes.</p>
                    <p><strong>Acceso al sistema sanitario:</strong> obtención de tarjeta sanitaria y cobertura
                        europea.</p>
                    <p><strong>Fiscalidad:</strong> asesoramiento para residentes y no residentes.</p>
                </div>

                <div class="margin-bottom-30"></div>
                <h4 class="mb-2">Método de trabajo</h4>
                <ol class="list-simple">
                    <p>Explica tu caso y entrega la documentación.</p>
                    <p>Te enviamos una oferta gratuita y sin compromiso.</p>
                    <p>Iniciamos el trabajo tras tu aprobación.</p>
                    <p>Si procede, se pide un anticipo.</p>
                    <p>Te entregamos la documentación original al cerrar el caso.</p>
                    <p>Emitimos la factura final y devolvemos los sobrantes.</p>
                </ol>
            </div>

            <!-- ASIDE con equipo -->
            <aside class="col-md-3 col-sm-4 wow fadeInUp" data-wow-delay=".4s">
                <div class="widget margin-bottom-40">
                    <h5 class="mb-3">Equipo</h5>
                    <h6 class="mb-2 text-uppercase fw-bold">Abogados/as</h6>
                    <ul class="side-attorneys mb-3">
                        <li><a href="#">Naomi Martínez Navarro</a></li>
                        <li><a href="#">Geert van der Weijst</a></li>
                        <li><a href="#">Hector Bominaar</a></li>
                        <li><a href="#">María Esther Jurado Giner</a></li>
                    </ul>
                </div>

                <div class="widget margin-bottom-20">
                    <h5>Áreas de trabajo</h5>
                    <ul class="side-practise">
                        <li><a href="#">Abogacía general</a></li>
                        <li><a href="#">Emigración y NIE</a></li>
                        <li><a href="#">Compra de vivienda</a></li>
                        <li><a href="#">Hipotecas</a></li>
                        <li><a href="#">Auto y carnet</a></li>
                        <li><a href="#">Traducción / Interpretación</a></li>
                        <li><a href="#">Alquileres</a></li>
                        <li><a href="#">Salud pública</a></li>
                        <li><a href="#">Fiscalidad</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</div>

<!-- BLOQUE DE CONTACTO -->
<div class="bg-gray padding-vertical-100 attorney-content wow fadeInUpBig" data-wow-delay=".2s">
    <div class="container">
        <div class="text-center mb-4">
            <h5>Contactar con NMN Abogados</h5>
        </div>

        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-12">
                <div class="d-flex flex-wrap justify-content-center gap-5 text-start mb-4">

                    <p><i class="fa fa-map-marker"></i> <strong>Mutxamel:</strong>Calle de la Nit 1,
                        bloque 9, local 1 – 03110 Alicante</p>
                    <p><i class="fa fa-phone"></i> +34 643 122 515</p>

                    <p><i class="fa fa-envelope"></i> <a href="mailto:info@nmnabogados.com">info@nmnabogados.com</a></p>
                </div>
            </div>
        </div>

        <?php
        if (session_status() === PHP_SESSION_NONE)
            session_start();
        $_SESSION['csrf_token'] = $_SESSION['csrf_token'] ?? bin2hex(random_bytes(16));
        ?>
        <form action="/member/<?= htmlspecialchars($slug) ?>/submit" method="post" class="ajax-form form-main"
            id="member-contact-form" novalidate>
            <div class="row">
                <div class="col-sm-3">
                    <input placeholder="Nombre *" type="text" name="name" required>
                </div>
                <div class="col-sm-3">
                    <input placeholder="Teléfono" type="tel" name="phone" inputmode="tel" autocomplete="tel">
                </div>
                <div class="col-sm-3">
                    <input placeholder="E-mail *" type="email" name="email" required inputmode="email"
                        autocomplete="email">
                </div>
                <div class="col-sm-3">
                    <div class="custom-select">
                        <i class="fa fa-angle-down"></i>
                        <select name="reason_for_contact" required>
                            <option value="">Tema a tratar *</option>
                            <option value="Pedir Cita">Pedir Cita</option>
                            <option value="Información">Información</option>
                            <option value="Hablar con un abogado">Hablar con un abogado</option>
                        </select>
                    </div>
                </div>
            </div>

            <textarea name="message" placeholder="Mensaje" rows="6"></textarea>

            <!-- Honeypot -->
            <input type="text" name="website" autocomplete="off" tabindex="-1"
                style="position:absolute;left:-9999px;height:0;width:0;opacity:0">

            <!-- CSRF -->
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

            <div class="text-center"><button type="submit">Enviar</button></div>
            <div id="member-contact-status" class="text-center mt-2" role="status" aria-live="polite"></div>
        </form>

        <script>
            document.getElementById('member-contact-form').addEventListener('submit', async (e) => {
                e.preventDefault();
                const form = e.currentTarget;
                const status = document.getElementById('member-contact-status');
                status.textContent = 'Enviando...';
                try {
                    const res = await fetch(form.action, {
                        method: 'POST',
                        body: new FormData(form),
                        credentials: 'same-origin',
                        headers: { 'Accept': 'application/json' } // opcional pero útil
                    }); const data = await res.json();
                    if (data.ok) { status.textContent = '¡Mensaje enviado! El despacho te contactará pronto.'; form.reset(); }
                    else { status.textContent = 'Error: ' + (data.error || 'No se pudo enviar'); }
                } catch { status.textContent = 'Error de red. Inténtalo de nuevo.'; }
            });
        </script>

    </div>
</div>