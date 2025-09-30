<div class="page_header text-center" data-stellar-background-ratio="0.5">
    <div class="container">
        <h3>Sun Lawyers</h3>
        <p>Property Lawyers Spain – Costa Blanca &amp; Costa del Sol</p>
    </div>
</div>

<div class="main-content padding-top-100 padding-bottom-70">
    <div class="container">
        <div class="row">
            <!-- CONTENIDO PRINCIPAL -->
            <div class="col-md-9 col-sm-8 wow fadeInUp" data-wow-delay=".2s">
                <div class="text-center">
                    <img src="img/members/sunlawyers.png" alt="Sun Lawyers" class="img-responsive mb-4" width="55%">
                </div>

                <h3 class="heading-title2">Sun Lawyers</h3>
                <p>Bufete de habla inglesa fundado en 1985, con más de 30 años ayudando a expatriados a comprar
                    propiedad en España. Especialistas en conveyancing, fiscalidad, herencias, NIE, litigios y
                    seguros, con atención multilingüe.</p>

                <div class="margin-bottom-30"></div>
                <h4>Servicios principales</h4>
                <div class="list-simple">
                    <p><strong>Conveyancing (compra/venta):</strong> due diligence, revisiones registrales y
                        acompañamiento completo.</p>
                    <p><strong>Fiscalidad y representación:</strong> tributación para residentes y no
                        residentes, modelo 210, IBI, reclamaciones fiscales.</p>
                    <p><strong>Testamentos y herencias:</strong> planificación sucesoria nacional e
                        internacional.</p>
                    <p><strong>Seguros:</strong> asesoría en pólizas de hogar y vida.</p>
                    <p><strong>Visas y reubicación:</strong> digital nomad, golden visa, no lucrativa.</p>
                    <p><strong>Litigios civiles y penales:</strong> defensa legal y gestión de reclamaciones
                        hipotecarias.</p>
                    <p><strong>Representación fiscal y NIE:</strong> soporte total con Hacienda y
                        administración.</p>
                </div>

                <div class="margin-bottom-30"></div>
                <h4>¿Por qué elegirnos?</h4>
                <div class="list-simple">
                    <p>Bufete premiado como "Spanish Real Estate Law Firm of the Year" en 2025.</p>
                    <p>Más de 30 años de experiencia y trato especializado para clientes internacionales.</p>
                    <p>Atención en inglés, neerlandés, francés, ruso, alemán y español.</p>
                    <p>Amplia red de oficinas en Costa Blanca y Costa del Sol, con personal local y
                        especializado.</p>
                </div>
            </div>

            <!-- ASIDE con equipo completo -->
            <aside class="col-md-3 col-sm-4 wow fadeInUp" data-wow-delay=".4s">
                <div class="widget margin-bottom-40">
                    <h5 class="mb-3">Equipo clave</h5>
                    <h6 class="mb-2 text-uppercase fw-bold">Abogados/as y gestores</h6>
                    <ul class="side-attorneys mb-3">
                        <li><a href="#">José María Lomax</a></li>
                        <li><a href="#">Javier Pastor Martínez</a></li>
                        <li><a href="#">Victoria García Lomax</a></li>
                        <li><a href="#">Manuel Álvarez Henarejos</a></li>
                        <li><a href="#">Ana Mari Martin</a></li>
                        <li><a href="#">Golale Daneshvar</a></li>
                        <li><a href="#">Xiomara Cuadros</a></li>
                        <li><a href="#">Selime Myumyun</a></li>
                        <li><a href="#">Silvia Champagne</a></li>
                        <li><a href="#">Joanna Graham</a></li>
                    </ul>
                </div>

                <div class="widget margin-bottom-20">
                    <h5>Áreas de trabajo</h5>
                    <ul class="side-practise">
                        <li><a href="#">Conveyancing</a></li>
                        <li><a href="#">Fiscalidad</a></li>
                        <li><a href="#">Herencias y testamentos</a></li>
                        <li><a href="#">Visas y reubicación</a></li>
                        <li><a href="#">Litigios civiles y penales</a></li>
                        <li><a href="#">Seguros</a></li>
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
            <h5>Contactar con Sun Lawyers</h5>
        </div>

        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-12">
                <div class="d-flex flex-wrap justify-content-center gap-5 text-start mb-4">
                    <div>
                        <p><i class="fa fa-map-marker"></i> <strong>Pilar de la Horadada
                                (Alicante):</strong><br>Calle Mayor nº118 – 03190</p>
                        <p><i class="fa fa-phone"></i> +34 965 321 193</p>
                    </div>
                    <div>
                        <p><i class="fa fa-map-marker"></i> <strong>También en:</strong><br>Cabo Roig, La Zenia,
                            Los Dolses, Calpe, Jávea…</p>
                        <p><i class="fa fa-phone"></i> 0800‑1303669 (UK)</p>
                    </div>
                </div>
                <div class="text-center">
                    <p><i class="fa fa-envelope"></i> <a href="mailto:admin@sun-lawyers.com">admin@sun-lawyers.com</a>
                    </p>
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