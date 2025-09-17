<style>
    .aaedi-accordion {
        max-width: 980px;
        margin: 0 auto;
    }

    .acc-item {
        margin-bottom: 14px;
    }

    .acc-head {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #0b5ab8;
        color: #fff;
        border: 0;
        cursor: pointer;
        border-radius: 28px;
        padding: 12px 18px;
        text-align: left;
        font-weight: 600;
        box-shadow: 0 8px 20px rgba(0, 0, 0, .10);
    }

    .acc-head .toggle {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        border: 3px solid #fff;
        line-height: 1;
        font-size: 18px;
    }

    .acc-body {
        background: #f5f8fc;
        border-radius: 10px;
        padding: 16px 18px;
        margin-top: 8px;
        box-shadow: 0 4px 14px rgba(0, 0, 0, .06);
    }
</style>

<div class="page_header text-center" data-stellar-background-ratio="0.5">
    <div class="container">
        <h3>Servicios AAEDI</h3>
        <p>Modelos de contratos, asesoramiento y convenio CCVV – colaboradores sociales.</p>
    </div>
</div>

<div class="bg-gray padding-top-70 padding-bottom-70">
    <div class="container">

        <div class="aaedi-accordion">

            <!-- Modelos de contratos -->
            <div class="acc-item">
                <button class="acc-head" type="button" aria-expanded="false">
                    <span>Modelos de contratos</span>
                    <span class="toggle">+</span>
                </button>
                <div class="acc-body" hidden>
                    <p>Plantillas actualizadas para alquiler de temporada, arras, compraventa, encargo de gestión y
                        anexos habituales. Uso exclusivo de miembros AAEDI.</p>
                    <a href="/area-miembros.php#modelos" class="btn btn-outline-primary btn-sm">Acceder a modelos</a>
                </div>
            </div>

            <!-- Asesoramiento -->
            <div class="acc-item">
                <button class="acc-head" type="button" aria-expanded="false">
                    <span>Asesoramiento</span>
                    <span class="toggle">+</span>
                </button>
                <div class="acc-body" hidden>
                    <p>Consultoría entre pares, dudas normativas y criterios técnicos. Canal para cuestiones de
                        urbanismo, fiscalidad inmobiliaria, propiedad horizontal y notaría/registro.</p>
                    <a href="/contacto.php?tipo=asesoramiento" class="btn btn-outline-primary btn-sm">Solicitar
                        asesoramiento</a>
                </div>
            </div>

            <!-- Convenio CCVV – Colaboradores sociales -->
            <div class="acc-item">
                <button class="acc-head" type="button" aria-expanded="false">
                    <span>Convenio CCVV – Colaboradores sociales</span>
                    <span class="toggle">+</span>
                </button>
                <div class="acc-body" hidden>
                    <p>Información y requisitos del convenio con la Generalitat (CCVV) y alta como colaborador social
                        ante la AEAT para trámites fiscales vinculados a operaciones inmobiliarias.</p>
                    <a href="/docs/convenio-ccvv.pdf" class="btn btn-outline-primary btn-sm">Ver condiciones</a>
                </div>
            </div>

        </div>

    </div>
</div>

<script>
    // acordeón accesible
    document.addEventListener('click', (e) => {
        const head = e.target.closest('.acc-head'); if (!head) return;
        const open = head.getAttribute('aria-expanded') === 'true';
        head.setAttribute('aria-expanded', String(!open));
        const body = head.parentElement.querySelector('.acc-body');
        if (body) { body.hidden = open; const t = head.querySelector('.toggle'); if (t) t.textContent = open ? '+' : '–'; }
    });
    // estado inicial
    document.querySelectorAll('.acc-head').forEach(h => { h.setAttribute('aria-expanded', 'false'); const t = h.querySelector('.toggle'); if (t) t.textContent = '+'; });
</script>