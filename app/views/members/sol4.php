<!doctype html>
<html lang="es">

<head>
    <?php include './partials/meta.html'; ?>
    <title>SOL‑4 Gestión | AAEDI</title>
</head>

<body>
    <div class="wrapper">
        <?php include './partials/header.html'; ?>

        <div class="page_header text-center" data-stellar-background-ratio="0.5">
            <div class="container">
                <h3>SOL‑4 Gestión</h3>
                <p>Consultoría, Asesoría, Inmobiliaria y Construcción – Benijófar (Alicante)</p>
            </div>
        </div>

        <div class="main-content padding-top-100 padding-bottom-70">
            <div class="container">
                <div class="row">
                    <!-- CONTENIDO PRINCIPAL -->
                    <div class="col-md-9 col-sm-8 wow fadeInUp" data-wow-delay=".2s">
                        <div class="text-center">
                            <img src="img/members/sol4.png" alt="SOL‑4 Gestión" class="img-responsive mb-4" width="75%">
                        </div>

                        <h3 class="heading-title2">SOL‑4 Gestión Investment & Consulting SL</h3>
                        <p>Empresa local en Benijófar (Alicante) fundada en 2001, dedicada a consultoría, asesoría legal
                            y fiscal, gestión inmobiliaria, construcción y servicios, incluida gestiones post-venta.
                            Ofrece un servicio integral para propietarios e inversores.</p>

                        <div class="margin-bottom-30"></div>
                        <h4>Servicios principales</h4>
                        <div class="list-simple">
                            <p><strong>Consultoría y asesoría inmobiliaria:</strong> compraventa con garantías legales y
                                fiscales, cambio de suministros, documentación, herencias, donaciones, seguros de hogar,
                                NIE, modelo 210, tramitación de pólizas.</p>
                            <p><strong>Inmobiliaria:</strong> compra y venta de viviendas, apartamentos, parcelas y
                                locales comerciales.</p>
                            <p><strong>Construcción y servicios:</strong> reformas, piscinas, jardines, proyectos,
                                licencias, electricidad, fontanería, carpintería, pintura bajo control de calidad.</p>
                            <p><strong>Gestoría y administración:</strong> licencias de apertura, gestión laboral,
                                contemplación fiscal, seguros e impuestos.</p>
                        </div>

                        <div class="margin-bottom-30"></div>
                        <h4>¿Por qué elegirnos?</h4>
                        <div class="list-simple">
                            <p>Trayectoria desde 2001 con equipo multidisciplinar en inmobiliaria y construcción.</p>
                            <p>Atención personalizada y gestión integral bajo un mismo techo.</p>
                            <p>Amplia experiencia en fiscalidad y trámites administrativos para residentes y no
                                residentes.</p>
                        </div>
                    </div>

                    <!-- ASIDE con equipo -->
                    <aside class="col-md-3 col-sm-4 wow fadeInUp" data-wow-delay=".4s">
                        <div class="widget margin-bottom-40">
                            <h5 class="mb-3">Equipo</h5>
                            <h6 class="mb-2 text-uppercase fw-bold">Miembros clave</h6>
                            <ul class="side-attorneys mb-3">
                                <li><a href="#">Marina Martínez Noguera (Abogada)</a></li>
                                <li><a href="#">Mar Bascuñana Garcia (Gerente / Abogada y Asesor Fiscal)</a></li>
                            </ul>
                        </div>

                        <div class="widget margin-bottom-20">
                            <h5>Áreas de trabajo</h5>
                            <ul class="side-practise">
                                <li><a href="#">Consultoría y asesoría</a></li>
                                <li><a href="#">Inmobiliaria</a></li>
                                <li><a href="#">Construcción y servicios</a></li>
                                <li><a href="#">Gestoría y licencias</a></li>
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
                    <h5>Contactar con SOL‑4 Gestión</h5>
                </div>

                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-12">
                        <div class="d-flex flex-wrap justify-content-center gap-5 text-start mb-4">
                            
                                <p><i class="fa fa-map-marker"></i> <strong>Benijófar:</strong>C/ Aneto 1, Local 3 –
                                    BOX 52, Residencial Benimar I – 03178 Benijófar (Alicante)</p>
                                <p><i class="fa fa-phone"></i> +34 966 715 181</p>
                        
                            <p><i class="fa fa-envelope"></i> <a
                                    href="mailto:mar@sol-4gestion.com">mar@sol-4gestion.com</a></p>
                        </div>
                    </div>
                </div>

                <form action="php/contact.php" class="ajax-form form-main">
                    <input type="hidden" name="member_name" value="SOL-4 Gestión">
                    <input type="hidden" name="member_email" value="mar@sol-4gestion.com">
                    <div class="row">
                        <div class="col-sm-3"><input type="text" name="name" placeholder="Nombre"></div>
                        <div class="col-sm-3"><input type="text" name="phone" placeholder="Teléfono"></div>
                        <div class="col-sm-3"><input type="email" name="email" placeholder="E‑mail"></div>
                        <div class="col-sm-3">
                            <div class="custom-select">
                                <i class="fa fa-angle-down"></i>
                                <select name="Subject">
                                    <option>Tema a tratar</option>
                                    <option>Consultoría / Asesoría</option>
                                    <option>Inmobiliaria</option>
                                    <option>Construcción y servicios</option>
                                    <option>Gestoría / Licencias</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <textarea name="message" placeholder="Mensaje"></textarea>
                    <div class="text-center"><button type="submit">Enviar</button></div>
                </form>
            </div>
        </div>

        <?php include './partials/footer.html'; ?>
    </div>
</body>

</html>