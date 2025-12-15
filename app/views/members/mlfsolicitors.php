<div class="page_header text-center" data-stellar-background-ratio="0.5">
    <div class="container">
        <h3>MLF SOLICITORS</h3>
    </div>
</div>

<div class="main-content padding-top-100 padding-bottom-70">
    <div class="container">
        <div class="row">

            <!-- CONTENIDO PRINCIPAL -->
            <div class="col-md-9 col-sm-8 wow fadeInUp text-center" data-wow-delay=".2s">

                <img src="/img/members/mlfsolicitors.png" class="img-responsive" alt="MLF Solicitors" width="60%" />
                <div class="margin-bottom-30"></div>

                <h3 class="heading-title2 text-start">MLF Solicitors</h3>
                <div class="clearfix"></div>

                <p class="text-start">
                    MLF Solicitors es un despacho jurídico con un equipo de abogados y asistentes legales
                    comprometidos, enfocados en ofrecer un servicio cercano y orientado al cliente.
                </p>

                <div class="margin-bottom-25"></div>

                <p class="text-start lead">
                    <b>Nuestros clientes son el corazón de nuestra organización</b>
                </p>

                <div class="margin-bottom-25"></div>

                <p class="text-start">
                    El despacho basa su trabajo en la confianza, la comunicación directa y el trato
                    personalizado, ofreciendo asesoramiento jurídico adaptado a cada situación concreta.
                </p>

                <div class="clearfix"></div>
                <div class="padding-bottom-15"></div>

            </div>

            <!-- ASIDE -->
            <aside class="col-md-3 col-sm-4 wow fadeInUp" data-wow-delay=".4s">

                <!-- EQUIPO -->
                <div class="widget margin-bottom-40">
                    <h5 class="mb-3">Equipo</h5>
                    <ul class="side-attorneys mb-3">
                        <!-- Añadir aquí exactamente los nombres tal y como aparecen en mlfsolicitors.com -->
                        <!--
                        <li><a href="#">Nombre Apellido</a></li>
                        <li><a href="#">Nombre Apellido</a></li>
                        -->
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
            <h5>Contactar con MLF Solicitors</h5>
        </div>

        <!-- Información de contacto -->
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-6">
                <div class="d-flex flex-wrap justify-content-center gap-4 text-center">
                    <p class="mb-0"><i class="fa fa-phone"></i> +34 966 723 620</p>
                    <p class="mb-0">
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:scfabogado@gmail.com">scfabogado@gmail.com</a>
                    </p>
                    <p class="mb-0">
                        <i class="fa fa-globe"></i>
                        <a href="https://mlfsolicitors.com" target="_blank">mlfsolicitors.com</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Formulario -->
        <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['csrf_token'] = $_SESSION['csrf_token'] ?? bin2hex(random_bytes(16));
        ?>

        <form action="/member/<?= htmlspecialchars($slug) ?>/submit" method="post" class="ajax-form form-main"
            id="member-contact-form" novalidate>

            <div class="row">
                <div class="col-sm-3">
                    <input placeholder="Nombre *" type="text" name="name" required>
                </div>
                <div class="col-sm-3">
                    <input placeholder="Teléfono" type="tel" name="phone">
                </div>
                <div class="col-sm-3">
                    <input placeholder="E-mail *" type="email" name="email" required>
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
            <input type="text" name="website" tabindex="-1"
                style="position:absolute;left:-9999px;height:0;width:0;opacity:0">

            <!-- CSRF -->
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

            <div class="text-center">
                <button type="submit">Enviar</button>
            </div>

            <div id="member-contact-status" class="text-center mt-2"></div>
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
                        headers: { 'Accept': 'application/json' }
                    });
                    const data = await res.json();

                    if (data.ok) {
                        status.textContent = '¡Mensaje enviado! El despacho te contactará pronto.';
                        form.reset();
                    } else {
                        status.textContent = 'Error: ' + (data.error || 'No se pudo enviar');
                    }
                } catch {
                    status.textContent = 'Error de red. Inténtalo de nuevo.';
                }
            });
        </script>

    </div>
</div>