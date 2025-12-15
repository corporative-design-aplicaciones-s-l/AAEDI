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
                    personalizado, ofreciendo asesoramiento jurídico adaptado a las necesidades concretas
                    de cada cliente, tanto a nivel nacional como internacional.
                </p>

                <div class="margin-bottom-25"></div>

                <!-- EQUIPO -->
                <h4 class="text-start">Nuestro equipo</h4>

                <p class="text-start">
                    <b>Nuria Cámara Hernández</b><br>
                    Abogada.<br><br>
                    Licenciada en Derecho por la Universidad de Murcia. Miembro ejerciente del Ilustre
                    Colegio de Abogados de Orihuela. Cuenta con un Máster en Asesoría Jurídica de Empresas
                    por la Universidad Internacional de La Rioja y el título de Formador de Formadores por
                    la Universidad Nebrija de Madrid.
                </p>

                <p class="text-start">
                    Su continua formación y amplia experiencia profesional, tanto legal como judicial,
                    aseguran a los clientes un asesoramiento jurídico integral y plenamente garantizado.
                    <br><br>
                    <b>Idiomas:</b> Español e inglés.
                </p>

                <div class="margin-bottom-25"></div>

                <p class="text-start">
                    <b>Michelle Copmans</b><br>
                    Asistente legal.<br><br>
                    Licenciada en Ciencias Políticas por la Universidad Católica de Mons (Bélgica).
                    Actualmente cursa el Grado en Derecho en la UNED y realiza un Curso Universitario en
                    Mediación Civil, Mercantil y Familiar en CEDECO, en colaboración con la Universidad
                    Rey Juan Carlos I de Madrid.
                </p>

                <p class="text-start">
                    Cuenta con experiencia en el ámbito jurídico tanto en Bélgica como en España, donde
                    desde 2012 ha trabajado como traductora e intérprete para clientes francófonos y ha
                    asesorado a clientes del sector inmobiliario.
                    <br><br>
                    <b>Idiomas:</b> Francés, inglés, holandés y castellano.
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
                        <li><a href="#">Nuria Cámara Hernández</a></li>
                        <li><a href="#">Michelle Copmans</a></li>
                    </ul>
                </div>

                <!-- SERVICIOS -->
                <div class="widget margin-bottom-20">
                    <h5>Servicios</h5>
                    <ul class="side-practise">
                        <li><a href="#">Derecho Inmobiliario</a></li>
                        <li><a href="#">Urbanismo</a></li>
                        <li><a href="#">Derecho Civil &amp; de Familia</a></li>
                        <li><a href="#">Derecho Bancario</a></li>
                        <li><a href="#">Herencias y Testamentarias</a></li>
                        <li><a href="#">Derecho Fiscal</a></li>
                        <li><a href="#">Residir en España</a></li>
                        <li><a href="#">Derecho Mercantil</a></li>
                    </ul>
                </div>

            </aside>

        </div>
    </div>
</div>

<!-- CONTACTO -->
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
        if (session_status() === PHP_SESSION_NONE) session_start();
        $_SESSION['csrf_token'] = $_SESSION['csrf_token'] ?? bin2hex(random_bytes(16));
        ?>

        <form action="/member/<?= htmlspecialchars($slug) ?>/submit"
              method="post"
              class="ajax-form form-main"
              id="member-contact-form"
              novalidate>

            <div class="row">
                <div class="col-sm-3">
                    <input placeholder="Nombre *" type="text" name="name" required>
                </div>
                <div class="col-sm-3">
                    <input placeholder="Teléfono" type="tel" name="phone" inputmode="tel">
                </div>
                <div class="col-sm-3">
                    <input placeholder="E-mail *" type="email" name="email" required inputmode="email">
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

            <div id="member-contact-status" class="text-center mt-2" role="status" aria-live="polite"></div>
        </form>

    </div>
</div>
