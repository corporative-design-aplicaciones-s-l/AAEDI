<!doctype html>
<html lang="es">

<head>
    <?php include './partials/meta.html'; ?>
    <title>Manchón Abogados | AAEDI</title>
</head>

<body>
    <div class="wrapper">
        <?php include './partials/header.html'; ?>

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
                            <img src="img/members/manchonabogados.png" alt="Manchón Abogados"
                                class="img-responsive mb-4" width="80%">
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

                <form action="php/contact.php" class="ajax-form form-main">
                    <input type="hidden" name="member_name" value="Manchón Abogados">
                    <input type="hidden" name="member_email" value="manchon@manchonabogados.com">
                    <div class="row">
                        <div class="col-sm-3"><input type="text" name="name" placeholder="Nombre"></div>
                        <div class="col-sm-3"><input type="text" name="phone" placeholder="Teléfono"></div>
                        <div class="col-sm-3"><input type="email" name="email" placeholder="E‑mail"></div>
                        <div class="col-sm-3">
                            <div class="custom-select">
                                <i class="fa fa-angle-down"></i>
                                <select name="Subject">
                                    <option>Tema a tratar</option>
                                    <option>Derecho penal</option>
                                    <option>Mercantil / Societario</option>
                                    <option>Administrativo</option>
                                    <option>Inmobiliario / Extranjería</option>
                                    <option>Familia</option>
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