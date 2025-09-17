    <style>
        .aaedi-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 10px 28px rgba(0, 0, 0, .08);
            padding: 18px;
            text-align: center
        }

        .aaedi-card--xl {
            max-width: 560px;
            margin-left: auto;
            margin-right: auto;
            padding: 14px 14px 18px
        }

        .aaedi-avatar {
            width: 110px;
            height: 110px;
            object-fit: cover;
            object-position: center;
            border-radius: 4px;
            margin: 0 auto;
            display: block
        }

        .aaedi-avatar--xl {
            width: 360px;
            height: 220px;
            border-radius: 6px;
            object-fit: cover;
            object-position: center;
            display: block;
            margin: 0 auto
        }

        .aaedi-name {
            font-size: 1.05rem;
            font-weight: 600;
            line-height: 1.2
        }

        .aaedi-role {
            color: #7a7a7a;
            font-size: .95rem;
            margin-bottom: 0
        }

        .aaedi-card--sm {
            width: 320px;
        }

        /* ajusta a tu gusto: 280–360px va bien */
        @media (max-width:576px) {
            .aaedi-card--sm {
                width: 100%;
            }

            /* en móvil, a todo el ancho */
        }


        @media (max-width:576px) {
            .aaedi-avatar--xl {
                width: 100%;
                height: 200px
            }
        }
    </style>

<div class="page_header text-center" data-stellar-background-ratio="0.5">
    <div class="container">
        <h3>Junta de Gobierno</h3>
        <p></p>
    </div>
</div>

<!-- EQUIPO: presidenta destacada + grid -->
<section id="equipo" class="container my-5">
    <!-- Presidenta destacada -->
    <article class="aaedi-card aaedi-card--xl mb-4">
        <img class="aaedi-avatar--xl" src="img/other/01/silviagalve.jpg" alt="Silvia Galve Martí">
        <h3 class="aaedi-name mt-3 mb-1">Silvia Galve Martí</h3>
        <p class="aaedi-role">Presidenta</p>
    </article>

    <!-- Resto de miembros -->
    <div class="row g-4 justify-content-center">
        <div class="col-auto">
            <article class="aaedi-card aaedi-card--sm h-100">
                <img class="aaedi-avatar" src="img/other/01/1.png" alt="Isabel Montesinos">
                <h3 class="aaedi-name mt-3 mb-1">Isabel Montesinos</h3>
                <p class="aaedi-role">Vicepresidenta</p>
            </article>
        </div>

        <div class="col-auto">
            <article class="aaedi-card aaedi-card--sm h-100">
                <img class="aaedi-avatar" src="img/other/01/2.png" alt="Maria Del Mar Bascuñana García">
                <h3 class="aaedi-name mt-3 mb-1">Maria Del Mar Bascuñana García</h3>
                <p class="aaedi-role">Secretaria</p>
            </article>
        </div>

        <div class="col-auto">
            <article class="aaedi-card aaedi-card--sm h-100">
                <img class="aaedi-avatar" src="img/other/01/3.png" alt="Tomás Conejero Gómez">
                <h3 class="aaedi-name mt-3 mb-1">Tomás Conejero Gómez</h3>
                <p class="aaedi-role">Tesorero</p>
            </article>
        </div>

        <div class="col-auto">
            <article class="aaedi-card aaedi-card--sm h-100">
                <img class="aaedi-avatar" src="img/other/01/1.png" alt="Alfred Manchón">
                <h3 class="aaedi-name mt-3 mb-1">Alfred Manchón</h3>
                <p class="aaedi-role">Vocal</p>
            </article>
        </div>

        <div class="col-auto">
            <article class="aaedi-card aaedi-card--sm h-100">
                <img class="aaedi-avatar" src="img/other/01/2.png" alt="Jose Ramón Pastor">
                <h3 class="aaedi-name mt-3 mb-1">Jose Ramón Pastor</h3>
                <p class="aaedi-role">Vocal</p>
            </article>
        </div>

        <div class="col-auto">
            <article class="aaedi-card aaedi-card--sm h-100">
                <img class="aaedi-avatar" src="img/other/01/3.png" alt="Francisco Javier Pastor">
                <h3 class="aaedi-name mt-3 mb-1">Francisco Javier Pastor</h3>
                <p class="aaedi-role">Vocal</p>
            </article>
        </div>

        <div class="col-auto">
            <article class="aaedi-card aaedi-card--sm h-100">
                <img class="aaedi-avatar" src="img/other/01/1.png" alt="Pablo M. Gómez Ladrón de Guevara">
                <h3 class="aaedi-name mt-3 mb-1">Pablo M. Gómez<br>Ladrón de Guevara</h3>
                <p class="aaedi-role">Vocal</p>
            </article>
        </div>
    </div>
</section>