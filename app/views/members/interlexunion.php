<div class="page_header text-center" data-stellar-background-ratio="0.5">
    <div class="container">
        <h3>Inter Lex Union</h3>
        <p>Abogados | Derecho Inmobiliario & Fiscal</p>
    </div>
</div>

<div class="main-content padding-top-100 padding-bottom-70">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8 wow fadeInUp" data-wow-delay=".2s">
                <div class="text-center">
                    <img src="img/members/interlexunion.png" alt="Inter Lex Union" class="img-responsive mb-4"
                        width="35%">
                </div>

                <h3 class="heading-title2">INTER LEX UNION</h3>
                <p>Especialistas en compraventa, impuestos y derecho inmobiliario con más de 30 años de
                    experiencia ayudando a clientes internacionales a navegar el complejo sistema legal y fiscal
                    español .</p>

                <div class="margin-bottom-30"></div>
                <h4>Nuestra propuesta</h4>
                <p class="mb-3">Ofrecemos una consulta introductoria gratuita, confidencial y sin compromiso.</p>
                <img src="img/lawyers/interlexunion.jpg" class="img-responsive align-left mr-3 mb-3" width="45%"
                    alt="interlexunion">
                <div class="margin-bottom-30"></div>
                <h4>Áreas de especialización</h4>
                <div class="list-simple">
                    <p><b>Conveyancing Legal Representation:</b> due diligence, contratos, coordinación total de
                        la transacción, traducciones legales.</p>
                    <p><b>Fiscal Representation:</b> representación fiscal, modelo 210, comunicaciones
                        tributarias.</p>
                    <p><b>Herencias y Testamentos:</b> tramitación, planificación del impuesto, transferencia
                        registral.</p>
                    <p><b>NIE:</b> asesoramiento y gestión completa del proceso de obtención .</p>
                    <p><b>Ventas de inmuebles:</b> comercialización integral adaptada a clientes internacionales
                        .</p>
                </div>

                <div class="margin-bottom-30"></div>
                <h4>¿Por qué confiar en Inter Lex Union?</h4>
                <div class="list-simple">
                    <p>Más de 30 años de experiencia con clientes internacionales.</p>
                    <p>Equipo multilingüe y trato personalizado.</p>
                    <p>Precios competitivos y atención al cliente de primer nivel.</p>
                </div>

                <div class="padding-vertical-10"></div>
                <div class="margin-bottom-30"></div>
                <div class="margin-bottom-15"></div>
                <div class="panel-group faq-accordion" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading active">
                            <a class="panel-title" data-bs-toggle="collapse" href="#faqOne">
                                Preguntas frecuentes
                                <span><i class="fa fa-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                    <!-- Pregunta ejemplo -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="panel-title" data-bs-toggle="collapse" href="#faqOne">¿La consulta inicial
                                es gratuita?<span><i class="fa fa-angle-right"></i></span></a>
                        </div>
                        <div id="faqOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Sí, ofrecemos una evaluación inicial sin coste ni compromiso para asesorarle
                                    desde el inicio.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <aside class="col-md-3 col-sm-4 wow fadeInUp" data-wow-delay=".4s">
                <div class="widget margin-bottom-40">
                    <h5 class="mb-3">Oficina</h5>
                    <ul class="side-attorneys">
                        <p>Calle Torrevejenses Ausentes, 2 1º – 03181 Torrevieja (Alicante)</p>
                    </ul>
                    <h5 class="mt-4">Contacto</h5>
                    <ul class="side-attorneys">
                        <p><i class="fa fa-phone"></i> 966 706 986</p>
                        <p><i class="fa fa-fax"></i> 965 705 183</p>
                        <p><i class="fa fa-envelope"></i> <a
                                href="mailto:solicitors@lexunion.es">solicitors@lexunion.es</a></p>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</div>


<div class="bg-gray padding-vertical-100 attorney-content wow fadeInUpBig" data-wow-delay=".2s">
    <div class="container">
        <div class="text-center mb-4">
            <h5>Contactar con Inter Lex Union</h5>
        </div>

        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-12">
                <div class="text-center mb-4">
                    <p><i class="fa fa-map-marker"></i> Calle Torrevejenses Ausentes, 2 1º – 03181 Torrevieja
                        (Alicante)</p>
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
                    <div id="member-contact-status" class="text-center mt-2" role="status" aria-live="polite">
                    </div>
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
    </div>
</div>