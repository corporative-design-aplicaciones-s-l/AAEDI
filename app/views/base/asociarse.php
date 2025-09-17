<style>
    /* ——— Botones estilo “píldora” ——— */
    .btn-pill {
        border-radius: 999px;
        padding: 14px 24px;
        font-weight: 600;
        border: 3px solid #0b5ab8;
    }

    .btn-pill.btn-primary {
        background: #0b5ab8;
        border-color: #0b5ab8;
    }

    .btn-pill.btn-outline-primary {
        background: #fff;
        color: #0b5ab8;
    }

    /* ——— Tarjetas ——— */
    .sheet {
        background: #fff;
        border-radius: 12px;
        padding: 26px 30px;
        box-shadow: 0 10px 28px rgba(0, 0, 0, .08);
    }

    .icon-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .icon-list li {
        position: relative;
        padding-left: 28px;
        margin: 8px 0;
    }

    .icon-list li i {
        position: absolute;
        left: 0;
        top: .3rem;
        color: #0b5ab8;
    }

    /* ——— Formularios rellenables ——— */
    .form-sheet {
        background: #fff;
        border-radius: 12px;
        padding: 28px 32px;
        box-shadow: 0 10px 28px rgba(0, 0, 0, .06);
        max-width: 900px;
        margin: 0 auto 32px;
    }

    .form-sheet h3 {
        margin-bottom: 10px;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px 20px;
    }

    .form-grid .full {
        grid-column: 1 / -1;
    }

    .form-line {
        border-bottom: 1px solid #ddd;
        height: 34px;
    }

    .form-help {
        font-size: .9rem;
        color: #6c757d;
    }

    .btn-print {
        margin-top: 14px;
    }

    .print-input {
        width: 100%;
        height: 34px;
        background: transparent;
        border: 0;
        border-bottom: 1px solid #ddd;
        padding: 0 2px;
    }

    .print-area {
        width: 100%;
        min-height: 70px;
        background: transparent;
        border: 1px solid #ddd;
        padding: 6px 8px;
        resize: vertical;
    }

    @media (max-width: 767.98px) {
        .form-grid {
            grid-template-columns: 1fr;
        }
    }

    /* Impresión general (para cuando se use Ctrl+P en toda la página) */
    @media print {

        .site-header,
        .site-footer,
        .btn,
        .btn-print,
        .btn-pill,
        .page_header {
            display: none !important;
        }

        .bg-gray {
            background: #fff !important;
        }

        .form-sheet {
            box-shadow: none;
            border-radius: 0;
            margin: 0 0 12mm 0;
            padding: 0;
        }

        .print-input {
            border-bottom: 1px solid #555;
        }

        .print-area {
            border: 1px solid #555;
        }
    }

    /* ✅ Alineación perfecta de ticks y texto */
    .icon-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .icon-list li {
        display: flex;
        align-items: flex-start;
        /* alinea con la 1ª línea del texto */
        gap: 10px;
        margin: 8px 0;
        padding-left: 0;
        /* quitamos el hueco del absoluto anterior */
    }

    .icon-list li i {
        position: static !important;
        /* anula el absolute antiguo */
        flex: 0 0 auto;
        font-size: 1rem;
        /* ajusta si quieres más/menos grande */
        line-height: 1;
        /* evita saltos raros */
        transform: translateY(-5px);
        /* microajuste; pon 0–3px según tipografía */
        color: #0b5ab8;
    }
</style>

<div class="page_header text-center" data-stellar-background-ratio="0.5">
    <div class="container">
        <h3>Cómo asociarse</h3>
        <p>Únete a AAEDI y forma parte de la red de abogados especializados en Derecho Inmobiliario.</p>
    </div>
</div>

<!-- CONTENIDO -->
<div class="bg-gray padding-top-70 padding-bottom-70">
    <div class="container">

        <!-- Requisitos + Documentación -->
        <div class="row g-4">
            <div class="col-lg-7">
                <div class="sheet h-100">
                    <h2 class="h4 mb-3">Requisitos de admisión</h2>
                    <p class="mb-2">Podrán ser miembros de la Asociación las personas que voluntariamente lo
                        soliciten y, además, cumplan el siguiente requisito:</p>
                    <ul class="icon-list mb-3">
                        <li><i class="fa fa-check-circle"></i> <strong>Ser abogado/a colegiado/a en
                                ejercicio</strong> (no basta con la licenciatura o el grado).</li>
                    </ul>
                    <h3 class="h5 mt-3">Cuotas</h3>
                    <p class="mb-0"><strong>Cuota de ingreso:</strong> 500&nbsp;€ &nbsp;·&nbsp; <strong>Cuota
                            periódica:</strong> 60&nbsp;€ por trimestre.</p>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="sheet h-100">
                    <h2 class="h4 mb-3">Documentación para el alta</h2>
                    <ul class="icon-list">
                        <li><i class="fa fa-check-circle"></i> Solicitud de ingreso firmada.</li>
                        <li><i class="fa fa-check-circle"></i> Orden de domiciliación bancaria (SEPA).</li>
                        <li><i class="fa fa-check-circle"></i> Documento RGPD cumplimentado.</li>
                        <li><i class="fa fa-check-circle"></i> Fotocopia compulsada del título universitario en
                            Derecho.</li>
                        <li><i class="fa fa-check-circle"></i> Certificado de colegiación como ejerciente.</li>
                        <li><i class="fa fa-check-circle"></i> Fotocopia del DNI.</li>
                        <li><i class="fa fa-check-circle"></i> 1 fotografía tamaño carnet.</li>
                        <li><i class="fa fa-check-circle"></i> Alta en el I.A.E. (si procede).</li>
                        <li><i class="fa fa-check-circle"></i> Copia del Seguro de Responsabilidad Civil
                            profesional.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Botones de impresión de cada formulario -->
        <div class="text-center mt-4">
            <a href="#form-solicitud" onclick="printForm('form-solicitud');return false;"
                class="btn btn-pill btn-primary me-2">Solicitud de Ingreso</a>
            <a href="#form-domiciliacion" onclick="printForm('form-domiciliacion');return false;"
                class="btn btn-pill btn-outline-primary me-2">Domiciliación Bancaria</a>
            <a href="#form-rgpd" onclick="printForm('form-rgpd');return false;"
                class="btn btn-pill btn-outline-primary">Reglamento RGPD</a>
        </div>

        <!-- Formularios rellenables -->
        <div id="form-solicitud" class="form-sheet mt-5">
            <h3>Solicitud de ingreso</h3>
            <p class="form-help">Rellene en mayúsculas. Esta solicitud implica la aceptación de los Estatutos de
                AAEDI.</p>
            <div class="form-grid">
                <div><strong>Nombre y apellidos</strong><input name="nombre" class="print-input" type="text" />
                </div>
                <div><strong>DNI/NIE</strong><input name="dni" class="print-input" type="text" /></div>
                <div><strong>Domicilio</strong><input name="domicilio" class="print-input" type="text" /></div>
                <div><strong>CP / Población / Provincia</strong><input name="cp_poblacion_provincia" class="print-input"
                        type="text" /></div>
                <div><strong>Teléfono</strong><input name="telefono" class="print-input" type="tel" /></div>
                <div><strong>Email</strong><input name="email" class="print-input" type="email" /></div>
                <div class="full"><strong>Colegio de Abogados</strong><input name="colegio" class="print-input"
                        type="text" /></div>
                <div><strong>Nº colegiado/a</strong><input name="num_colegiado" class="print-input" type="text" /></div>
                <div><strong>Condición</strong><input name="condicion" class="print-input" type="text"
                        value="Ejerciente" /></div>
                <div class="full"><strong>Modalidad de ejercicio</strong><input name="modalidad" class="print-input"
                        type="text" placeholder="Por cuenta propia / Por cuenta ajena" />
                </div>
                <div class="full"><strong>IBAN para cuotas</strong><input name="iban" class="print-input" type="text" />
                </div>
            </div>
            <p class="mt-3">Declaro que los datos son ciertos y solicito mi alta como miembro de AAEDI. Autorizo
                el tratamiento de mis datos conforme al documento RGPD adjunto.</p>
            <div class="form-grid">
                <div><strong>En</strong><input name="lugar" class="print-input" type="text" /></div>
                <div><strong>Fecha</strong><input name="fecha" class="print-input" type="date" /></div>
                <div class="full"><strong>Firma</strong>
                    <div class="form-line"></div>
                </div>
            </div>
            <button class="btn btn-outline-primary btn-print" onclick="printForm('form-solicitud')">Imprimir</button>
        </div>

        <div id="form-domiciliacion" class="form-sheet">
            <h3>Orden de domiciliación bancaria (SEPA)</h3>
            <p class="form-help">Autorización para el cobro de cuotas (500 € de ingreso y 60 €/trimestre).</p>
            <div class="form-grid">
                <div class="full"><strong>Titular de la cuenta</strong><input name="titular" class="print-input"
                        type="text" /></div>
                <div><strong>DNI/NIE</strong><input name="dni_titular" class="print-input" type="text" /></div>
                <div><strong>Teléfono</strong><input name="tel_titular" class="print-input" type="tel" /></div>
                <div class="full"><strong>IBAN</strong><input name="iban_titular" class="print-input" type="text" />
                </div>
                <div class="full"><strong>Dirección</strong><input name="dir_titular" class="print-input" type="text" />
                </div>
            </div>
            <p class="mt-3">Mediante la firma de esta orden, el deudor autoriza a AAEDI a enviar instrucciones a
                su entidad para adeudar su cuenta y a su entidad a efectuar los adeudos siguiendo dichas
                instrucciones. Como parte de sus derechos, el deudor está legitimado al reembolso por su entidad
                en los términos del contrato con la misma.</p>
            <div class="form-grid">
                <div><strong>En</strong><input name="lugar_sepa" class="print-input" type="text" /></div>
                <div><strong>Fecha</strong><input name="fecha_sepa" class="print-input" type="date" /></div>
                <div class="full"><strong>Firma del titular</strong>
                    <div class="form-line"></div>
                </div>
            </div>
            <button class="btn btn-outline-primary btn-print"
                onclick="printForm('form-domiciliacion')">Imprimir</button>
        </div>

        <div id="form-rgpd" class="form-sheet">
            <h3>RGPD · Información y consentimiento</h3>
            <p class="form-help">Documento de información básica y consentimiento para comunicaciones.</p>
            <p><strong>Responsable:</strong> AAEDI – Asociación de Abogados Expertos en Derecho Inmobiliario.
                <strong>Finalidad:</strong> Gestión de miembros, cobro de cuotas y comunicaciones internas.
                <strong>Legitimación:</strong> Relación asociativa y consentimiento.
                <strong>Destinatarios:</strong> No se cederán datos a terceros salvo obligación legal.
                <strong>Derechos:</strong> Acceso, rectificación, supresión, oposición, limitación y
                portabilidad en la dirección de contacto de AAEDI.
            </p>
            <div class="form-grid">
                <div class="full"><strong>Nombre y apellidos</strong><input name="rgpd_nombre" class="print-input"
                        type="text" /></div>
                <div><strong>DNI/NIE</strong><input name="rgpd_dni" class="print-input" type="text" /></div>
                <div><strong>Email</strong><input name="rgpd_email" class="print-input" type="email" /></div>
            </div>
            <p class="mt-2"><strong>Consiento</strong> recibir comunicaciones informativas de AAEDI relacionadas
                con la actividad de la asociación.</p>
            <div class="form-grid">
                <div><strong>En</strong><input name="rgpd_lugar" class="print-input" type="text" /></div>
                <div><strong>Fecha</strong><input name="rgpd_fecha" class="print-input" type="date" /></div>
                <div class="full"><strong>Firma</strong>
                    <div class="form-line"></div>
                </div>
            </div>
            <button class="btn btn-outline-primary btn-print" onclick="printForm('form-rgpd')">Imprimir</button>
        </div>

    </div>
</div>