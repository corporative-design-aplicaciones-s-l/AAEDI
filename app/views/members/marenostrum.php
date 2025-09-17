<!doctype html>
<html lang="es">

<head>
    <?php include './partials/meta.html'; ?>
    <title>Mare Nostrum Law & Tax | AAEDI</title>
</head>

<body>
    <div class="wrapper">
        <?php include './partials/header.html'; ?>

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
                            <img src="img/members/marenostrum.png" alt="Mare Nostrum Law & Tax"
                                class="img-responsive mb-4" width="50%">
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

                            <p><i class="fa fa-envelope"></i> <a
                                    href="mailto:info@mnostrumlaw.com">info@mnostrumlaw.com</a></p>
                        </div>
                    </div>
                </div>

                <form action="php/contact.php" class="ajax-form form-main">
                    <input type="hidden" name="member_name" value="Mare Nostrum Law & Tax">
                    <input type="hidden" name="member_email" value="info@mnostrumlaw.com">
                    <div class="row">
                        <div class="col-sm-3"><input type="text" name="name" placeholder="Nombre"></div>
                        <div class="col-sm-3"><input type="text" name="phone" placeholder="Teléfono"></div>
                        <div class="col-sm-3"><input type="email" name="email" placeholder="E‑mail"></div>
                        <div class="col-sm-3">
                            <div class="custom-select">
                                <i class="fa fa-angle-down"></i>
                                <select name="Subject">
                                    <option>Tema a tratar</option>
                                    <option>Asesoría Fiscal</option>
                                    <option>Compra/Venta de Propiedades</option>
                                    <option>Herencias y Testamentos</option>
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