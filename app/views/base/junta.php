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

    .aaedi-card {
        cursor: pointer;
    }

    /* Modal */
    .aaedi-modal__photo {
        width: 100%;
        max-height: 260px;
        object-fit: cover;
        border-radius: 8px;
    }

    .aaedi-modal__name {
        font-size: 1.25rem;
        font-weight: 700;
        margin: .75rem 0 .25rem;
    }

    .aaedi-modal__role {
        color: #7a7a7a;
        margin: 0 0 .5rem;
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

        <div class="aaedi-bio d-none">
            <p>Texto de la bio. Se pueden usar <strong>negritas</strong>, enlaces
                <a href="#">(opcionales)</a>, listas, etc.
            </p>
            <ul>
                <li>Áreas: Inmobiliario, Sucesiones…</li>
                <li>Idiomas: ES / EN / FR</li>
            </ul>
        </div>
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

    <!-- Modal Miembro -->
    <div class="modal fade" id="memberModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-2 p-sm-3">
                <button type="button" class="btn-close ms-auto me-1 mt-1" data-bs-dismiss="modal"
                    aria-label="Cerrar"></button>
                <div class="modal-body">
                    <img id="mm-photo" class="aaedi-modal__photo" src="" alt="">
                    <h3 id="mm-name" class="aaedi-modal__name"></h3>
                    <p id="mm-role" class="aaedi-modal__role"></p>
                    <div id="mm-desc"></div>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    (function () {
        var cards = document.querySelectorAll('.aaedi-card');
        var modalEl = document.getElementById('memberModal');
        var nameEl = document.getElementById('mm-name');
        var roleEl = document.getElementById('mm-role');
        var descEl = document.getElementById('mm-desc');
        var photoEl = document.getElementById('mm-photo');

        function openFrom(card) {
            var img = card.querySelector('.aaedi-avatar--xl, .aaedi-avatar');
            if (img) {
                photoEl.src = img.getAttribute('src');
                photoEl.alt = img.getAttribute('alt') || '';
            } else {
                photoEl.removeAttribute('src'); photoEl.alt = '';
            }
            var name = card.querySelector('.aaedi-name');
            var role = card.querySelector('.aaedi-role');
            var bio = card.querySelector('.aaedi-bio');

            nameEl.innerHTML = name ? name.innerHTML : '';
            roleEl.textContent = role ? role.textContent : '';
            descEl.innerHTML = bio ? bio.innerHTML : 'Próximamente ficha completa.';

            // Mostrar modal compatible BS5/BS4
            if (window.bootstrap && bootstrap.Modal) {
                bootstrap.Modal.getOrCreateInstance(modalEl).show();
            } else if (window.jQuery && typeof jQuery(modalEl).modal === 'function') {
                jQuery(modalEl).modal('show');
            } else {
                modalEl.style.display = 'block'; // fallback mínimo
            }
        }

        cards.forEach(function (card) {
            // Accesible: rol botón + teclado
            card.setAttribute('role', 'button');
            card.setAttribute('tabindex', '0');
            card.addEventListener('click', function () { openFrom(card); });
            card.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); openFrom(card); }
            });
        });
    })();
</script>