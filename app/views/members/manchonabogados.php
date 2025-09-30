<div class="page_header text-center" data-stellar-background-ratio="0.5">
    <div class="container">
        <h3>Manchón Abogados</h3>
        <p>Law Firm in Elche, Alicante</p>
    </div>
</div>

<div class="main-content padding-top-100 padding-bottom-70">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8 wow fadeInUp" data-wow-delay=".2s">
                <div class="text-center">
                    <img src="img/members/manchonabogados.png" alt="Manchón Abogados" class="img-responsive mb-4"
                        width="80%">
                </div>

                <h3 class="heading-title2">Manchón Abogados</h3>
                <p>Despacho de abogados en Elche (Alicante) con amplia experiencia en asesoramiento legal
                    nacional e internacional, con atención profesional en inglés, alemán y francés.</p>

                <div class="margin-bottom-30"></div>
                <h4>Áreas de especialización</h4>
                <div class="list-simple">
                    <p><b>Derecho penal:</b> responsabilidad civil, delitos corporativos y accidentes de
                        tráfico.</p>
                    <p><b>Derecho mercantil y societario:</b> constitución de empresas, compliance, quiebras,
                        contratos, fusiones, bancario.</p>
                    <p><b>Derecho administrativo:</b> recursos, procedimientos con la Administración y
                        expropiaciones.</p>
                    <p><b>Derecho extranjero e internacional:</b> NIE, nacionalidad, residencia, reagrupación
                        familiar.</p>
                    <p><b>Derecho inmobiliario:</b> compraventa, alquileres, gestión de NIEs, fiscalidad y
                        desahucios.</p>
                    <p><b>Derecho de familia:</b> divorcios, custodias, testamentos y herencias.</p>
                </div>

                <div class="margin-bottom-30"></div>
                <h4>Ventajas de nuestro despacho</h4>
                <div class="list-simple">
                    <p>Equipo altamente especializado y multilingüe.</p>
                    <p>Cooperación con agencias inmobiliarias nacionales e internacionales.</p>
                    <p>Asesoramiento fiscal integrado a través de nuestro departamento tributario.</p>
                </div>

                <div class="padding-vertical-10"></div>

                <p>Manchón Abogados lleva años ofreciendo un servicio integral y personalizado a particulares y
                    empresas en Elche, Alicante, con un fuerte enfoque internacional.</p>

                <div class="margin-bottom-15"></div>
                <div class="panel-group faq-accordion" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading active">
                            <a class="panel-title" data-bs-toggle="collapse" href="#faqOne">
                                ¿Ofrecen asesoramiento en varios idiomas?
                                <span><i class="fa fa-angle-right"></i></span>
                            </a>
                        </div>
                        <div id="faqOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Sí, ofrecemos atención en inglés, alemán y francés.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <aside class="col-md-3 col-sm-4 wow fadeInUp" data-wow-delay=".4s">
                <div class="widget margin-bottom-40">
                    <h5 class="mb-3">Equipo</h5>
                    <h6 class="mb-2 text-uppercase fw-bold">Abogados/as</h6>
                    <ul class="side-attorneys mb-3">
                        <li><a href="#">Alfred Manchón</a></li>
                        <!-- Puedes agregar más si están en su web -->
                    </ul>
                    <h6 class="mb-2 text-uppercase fw-bold">Otros cargos</h6>
                    <ul class="side-attorneys">
                        <li><a href="#">Departamento tributario</a></li>
                        <li><a href="#">Equipo administrativo</a></li>
                    </ul>
                </div>
                <div class="widget margin-bottom-20">
                    <h5>Áreas de trabajo</h5>
                    <ul class="side-practise">
                        <li><a href="#">Derecho penal</a></li>
                        <li><a href="#">Societario y mercantil</a></li>
                        <li><a href="#">Administrativo</a></li>
                        <li><a href="#">Inmobiliario</a></li>
                        <li><a href="#">Extranjería</a></li>
                        <li><a href="#">Familia</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</div>

<div class="bg-gray padding-vertical-100 attorney-content wow fadeInUpBig" data-wow-delay=".2s">
    <div class="container">
        <div class="text-center mb-4">
            <h5>Contactar con Manchón Abogados</h5>
        </div>

        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-12">
                <div class="d-flex flex-wrap justify-content-center gap-5 text-start mb-4">
                    <p><i class="fa fa-map-marker"></i> <strong>Elche (Alicante):</strong>Calle Orihuela, 2,
                        bajo – Elche</p>
                    <p><i class="fa fa-phone"></i> +34 625 11 00 50</p>
                    <p><i class="fa fa-envelope"></i> <a
                            href="mailto:manchon@manchonabogados.com">manchon@manchonabogados.com</a></p>
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