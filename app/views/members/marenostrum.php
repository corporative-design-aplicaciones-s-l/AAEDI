<div class="page_header text-center" data-stellar-background-ratio="0.5">
    <div class="container">
        <h3>Mare Nostrum Law & Tax</h3>
        <p>ASESORÍA LEGAL Y FISCAL INTERNACIONAL</p>
    </div>
</div>

<div class="main-content padding-top-100 padding-bottom-70">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8 wow fadeInUp" data-wow-delay=".2s">
                <div class="text-center">
                    <img src="img/members/marenostrum.png" alt="Mare Nostrum Law & Tax" class="img-responsive mb-4"
                        width="50%">
                </div>

                <h3 class="heading-title2">MARE NOSTRUM LAW & TAX</h3>
                <p>Mare Nostrum Law & Tax es un despacho joven y dinámico, con sede en Los Alcázares (Murcia),
                    especializado en asesoría legal, fiscal y contable tanto para residentes como no residentes.
                    Su enfoque está dirigido principalmente a clientes internacionales, a quienes ofrecen un
                    servicio cercano, profesional y multilingüe.</p>

                <div class="margin-bottom-30"></div>
                <h4>Servicios principales</h4>
                <div class="list-simple">
                    <p><strong>Compra y venta de inmuebles:</strong> due diligence, contratos, gestión de
                        impuestos y acompañamiento completo durante el proceso.</p>
                    <p><strong>Fiscalidad (residentes y no residentes):</strong> asesoría en impuestos anuales,
                        IBI, declaraciones y representación fiscal.</p>
                    <p><strong>Testamentos y herencias:</strong> planificación sucesoria, redacción y
                        tramitación de testamentos.</p>
                    <p><strong>Contabilidad y derecho mercantil:</strong> constitución de sociedades, asesoría
                        contable y tributaria.</p>
                    <p><strong>Litigios:</strong> resolución de conflictos legales mediante soluciones amistosas
                        o defensa procesal.</p>
                    <p><strong>Residencia y seguridad social:</strong> obtención de permisos de residencia,
                        tramitación de seguridad social, etc.</p>
                </div>

                <div class="margin-bottom-30"></div>
                <h4>¿Por qué elegirnos?</h4>
                <div class="list-simple">
                    <p>Atención personalizada, basada en la cercanía, la confianza y el uso de tecnologías
                        modernas.</p>
                    <p>Equipo con formación continua y total compromiso con el cliente.</p>
                    <p>Reconocidos por el Consulado Británico de Alicante como despacho recomendado.</p>
                    <p>Certificados por el Ilustre Colegio de Abogados de Murcia y colaboradores oficiales de la
                        administración nacional.</p>
                </div>
            </div>

            <!-- ASIDE -->
            <aside class="col-md-3 col-sm-4 wow fadeInUp" data-wow-delay=".4s">

                <div class="widget margin-bottom-20">
                    <h5>Áreas de trabajo</h5>
                    <ul class="side-practise">
                        <li><a href="#">Derecho Inmobiliario</a></li>
                        <li><a href="#">Fiscalidad Internacional</a></li>
                        <li><a href="#">Herencias y Sucesiones</a></li>
                        <li><a href="#">Residencia y Seguridad Social</a></li>
                        <li><a href="#">Contabilidad y Sociedades</a></li>
                        <li><a href="#">Litigios Civiles</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</div>

<div class="bg-gray padding-vertical-100 attorney-content wow fadeInUpBig" data-wow-delay=".2s">
    <div class="container">
        <div class="text-center mb-4">
            <h5>Contactar con Mare Nostrum Law & Tax</h5>
        </div>

        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-12">
                <div class="d-flex flex-wrap justify-content-center gap-5 text-start mb-4">

                    <p><i class="fa fa-map-marker"></i> <strong>Los Alcázares:</strong>Av. Río Nalón, s/n, 30710
                        Murcia</p>
                    <p><i class="fa fa-phone"></i> (+34) 968 583 237</p>

                    <p><i class="fa fa-envelope"></i> <a href="mailto:info@mnostrumlaw.com">info@mnostrumlaw.com</a></p>
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