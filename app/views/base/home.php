<style>
  /* Imagen centrada, un poco más grande */
  #nosotros .about-hero-img {
    max-width: 60%;
    /* ajusta si la quieres más/menos grande */
    width: 100%;
    margin: 0 auto 24px;
    /* border-radius: 10px; */
  }

  /* Prosa legible y con aire */
  #nosotros .about-prose {
    width: 100%;
    margin: 0 auto;
    /* centrado */
    padding: 26px 30px;
    /* aire interno */
    /* border-radius: 12px; */
    background: #fff;
  }

  #nosotros .about-prose p {
    line-height: 1.75;
    margin-bottom: 14px;
  }

  #nosotros .about-prose .icon-list {
    margin: 0 0 8px 0;
    padding: 0;
    list-style: none;
  }

  #nosotros .about-prose .icon-list li {
    position: relative;
    padding-left: 28px;
    margin-bottom: 8px;
  }

  #nosotros .about-prose .icon-list li i {
    position: absolute;
    left: 0;
    top: .2rem;
    color: #0b5ab8;
  }

  #nosotros .about-prose .btn {
    margin-top: 6px;
  }

  @media (max-width: 991.98px) {
    #nosotros .about-prose {
      padding: 20px;
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

  .members-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 28px;
  }

  .member-card {
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 28px 22px;
    border: 1px solid #eef0f4;
    border-radius: 18px;
    background: #fff;
    box-shadow: 0 6px 18px rgba(0, 0, 0, .04);
    transition: transform .2s ease, box-shadow .2s ease;
  }

  .member-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 24px rgba(0, 0, 0, .07);
  }

  .member-card__logo img {
    max-width: 68%;
    height: auto;
    object-fit: contain;
    filter: saturate(0.9);
    margin-bottom: 10px;
  }

  .member-card__claim {
    display: block;
    font-size: .85rem;
    letter-spacing: .20em;
    color: #7e3bd0;
    /* tu morado */
    text-transform: uppercase;
    margin-bottom: 8px;
  }

  .member-card__title {
    font-size: 1.25rem;
    font-weight: 700;
    letter-spacing: .03em;
    color: #412966;
    margin: 6px 0 12px;
  }

  .member-card__desc {
    color: #5b5e6a;
    line-height: 1.5;
    margin: 0 0 14px;
    min-height: 64px;
    /* estabiliza alturas */
  }

  .member-card__contact {
    list-style: none;
    padding: 0;
    margin-top: auto;
    /* empuja contactos al fondo: alturas iguales */
    width: 100%;
  }

  .member-card__contact li {
    margin: 6px 0;
    color: #364152;
    word-break: break-word;
  }

  .member-card__contact i {
    width: 18px;
    text-align: center;
    margin-right: 8px;
  }

  @media (max-width:480px) {
    .member-card__logo img {
      max-width: 72%;
    }
  }
</style>

<!-- WARP SECTION -->
<div class="slider-wrap">
  <div class="home-slider3">
    <!-- SLIDE -->
    <div class="item" style="background-image:url('<?= asset('img/slider/01/4.jpg') ?>');
                background-position:center; background-size:cover;">
      <div class="container">
        <div class="row center-content-ipad">
          <div class="col-md-7 slider-info wow fadeInDown">
            <h2><b>“Unimos la experiencia de los abogados expertos en derecho inmobiliario.”</b></h2>
            <p>
              Nuestra asociación defiende la práctica responsable del derecho inmobiliario,
              garantizando formación continua, ética profesional y seguridad para los compradores
              extranjeros.
            </p>
            <a href="<?= url('/contacto') ?>">Contacta con nosotros</a>
          </div>
          <div class="col-md-5 d-none d-lg-block">
            <img src="<?= asset('img/slider/01/3.png') ?>" class="img-fluid wow fadeInRight" alt="AAEDI"
              data-wow-delay=".1s">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container wow fadeInUp" data-wow-delay=".05s">
  <div class="home1-info row justify-content-between align-items-center">
    <!-- Card 1 -->
    <div class="col-12 col-md-auto mb-3">
      <a href="#nosotros" class="home1-link text-reset text-decoration-none">
        <i class="fa-solid fa-question"></i>
        <h5>¿Por qué <br>se crea <br><b>esta asociación?</b></h5>
      </a>
    </div>
    <!-- Card 2 -->
    <div class="col-12 col-md-auto mb-3">
      <a href="<?= url('/filosofia') ?>" class="home1-link text-reset text-decoration-none">
        <i class="fa-solid fa-feather"></i>
        <h5>Filosofía <br>de <br><b>AAEDI</b></h5>
      </a>
    </div>
    <!-- Card 3 -->
    <div class="col-12 col-md-auto mb-3">
      <a href="<?= url('/miembros') ?>" class="home1-link text-reset text-decoration-none">
        <i class="fa-solid fa-people-group"></i>
        <h5>Miembros</h5>
      </a>
    </div>
  </div>
</div>

<!-- ÁREAS EN LAS QUE TRABAJAMOS -->
<div class="padding-top-100 padding-bottom-70 wow fadeInUp" data-wow-delay=".1s">
  <div class="container">
    <div class="heading-title">&Aacute;reas <br><b>en las que trabajamos</b></div>

    <div class="row">
      <div class="col-md-4 margin-bottom-30 wow fadeInUp" data-wow-delay=".3s">
        <a href="#" class="service-card" data-service="conveyancing">
          <div class="practice-style2">
            <img src="<?= asset('img/practise/03/conveyancing.png') ?>" class="img-full" alt="Conveyancing">
            <h4>Conveyancing<br>compra y venta.</h4><span><i class="fa fa-plus"></i></span>
          </div>
        </a>
      </div>
      <div class="col-md-4 margin-bottom-30 wow fadeInUp" data-wow-delay=".5s">
        <a href="#" class="service-card" data-service="contratos">
          <div class="practice-style2">
            <img src="<?= asset('img/practise/03/contratos.png') ?>" class="img-full" alt="Contratos">
            <h4>Preparación de contratos<br>de compraventa.</h4><span><i class="fa fa-plus"></i></span>
          </div>
        </a>
      </div>
      <div class="col-md-4 margin-bottom-30 wow fadeInUp" data-wow-delay=".7s">
        <a href="#" class="service-card" data-service="testamentos">
          <div class="practice-style2">
            <img src="<?= asset('img/practise/03/testamento.jpg') ?>" class="img-full" alt="Testamentos">
            <h4>Testamentos</h4><span><i class="fa fa-plus"></i></span>
          </div>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 margin-bottom-30 wow fadeInUp" data-wow-delay=".1s">
        <a href="#" class="service-card" data-service="nie">
          <div class="practice-style2">
            <img src="<?= asset('img/practise/03/nie.png') ?>" class="img-full" alt="NIE/Residencia">
            <h4>Obtención de NIE<br>o Residencia.</h4><span><i class="fa fa-plus"></i></span>
          </div>
        </a>
      </div>
      <div class="col-md-4 margin-bottom-30 wow fadeInUp" data-wow-delay=".3s">
        <a href="#" class="service-card" data-service="hipoteca">
          <div class="practice-style2">
            <img src="<?= asset('img/practise/03/hipoteca.png') ?>" class="img-full" alt="Hipoteca">
            <h4>Solicitudes<br>de hipoteca.</h4><span><i class="fa fa-plus"></i></span>
          </div>
        </a>
      </div>
      <div class="col-md-4 margin-bottom-30 wow fadeInUp" data-wow-delay=".5s">
        <a href="#" class="service-card" data-service="donaciones">
          <div class="practice-style2">
            <img src="<?= asset('img/practise/03/donaciones.jpg') ?>" class="img-full" alt="Herencias y donaciones">
            <h4>Herencias <br>y donaciones</h4><span><i class="fa fa-plus"></i></span>
          </div>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 margin-bottom-30 wow fadeInUp" data-wow-delay=".1s">
        <a href="#" class="service-card" data-service="impuestos">
          <div class="practice-style2">
            <img src="<?= asset('img/practise/03/impuestos.jpg') ?>" class="img-full" alt="Impuestos">
            <h4>Preparación y pago<br>de impuestos.</h4><span><i class="fa fa-plus"></i></span>
          </div>
        </a>
      </div>
      <div class="col-md-4 margin-bottom-30 wow fadeInUp" data-wow-delay=".3s">
        <a href="#" class="service-card" data-service="licencia">
          <div class="practice-style2">
            <img src="<?= asset('img/practise/03/licenciaturistica.jpg') ?>" class="img-full" alt="Licencia turística">
            <h4>Solicitud<br>de licencia turística.</h4><span><i class="fa fa-plus"></i></span>
          </div>
        </a>
      </div>
      <div class="col-md-4 margin-bottom-30 wow fadeInUp" data-wow-delay=".5s">
        <a href="#" class="service-card" data-service="sl">
          <div class="practice-style2">
            <img src="<?= asset('img/practise/03/sl.jpg') ?>" class="img-full" alt="Creación de empresas">
            <h4>Creación de empresas <br>en España</h4><span><i class="fa fa-plus"></i></span>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Modal Servicios -->
<div id="serviceModal" class="svc-modal" aria-hidden="true">
  <div class="svc-modal__backdrop" data-close></div>
  <div class="svc-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="svcModalTitle">
    <button class="svc-modal__close" aria-label="Cerrar" data-close>&times;</button>
    <div class="svc-modal__media"><img id="svcModalImg" src="" alt=""></div>
    <div class="svc-modal__body">
      <h3 id="svcModalTitle" class="svc-modal__title"></h3>
      <p id="svcModalDesc" class="svc-modal__desc"></p>
      <button class="svc-modal__btn" data-close>Cerrar</button>
    </div>
  </div>
</div>

<!-- SOBRE NOSOTROS -->
<div class="bg-gray padding-top-100 padding-bottom-70" id="nosotros">
  <div class="container">
    <div class="faq-head text-center">
      <div class="heading-title">Nuestra razón de ser</div>
      <!-- <p>Ante el ruido y la confusión, la voz del profesional legal.</p> -->
    </div>

    <div class="about-hero text-center">
      <img src="<?= asset('img/home/01/02.jpg') ?>" class="img-responsive about-hero-img" alt="AAEDI">
    </div>

    <div class="about-prose card-plain">
      <p>
        La Asociación de Abogados Expertos en Derecho Inmobiliario (AAEDI) nace con la misión de
        aunar fuerzas entre los profesionales especializados en el ámbito inmobiliario y de garantizar
        a los compradores extranjeros en España un servicio integral, uniforme y con un mínimo de
        garantías y profesionalidad.
      </p>
      <p>
        El mercado inmobiliario español es uno de los más dinámicos de Europa y atrae cada año a miles
        de compradores de otros países. Sin embargo, esta realidad también ha puesto de manifiesto la
        necesidad de contar con profesionales altamente cualificados, capaces de ofrecer un
        asesoramiento legal sólido, especializado y adaptado a las particularidades de cada cliente
        extranjero.
      </p>
      <p>La AAEDI surge como respuesta a esta necesidad, con el propósito de:</p>

      <ul class="icon-list">
        <li><i class="fa fa-check-circle"></i> Unificar criterios y buenas prácticas entre los abogados
          expertos en derecho inmobiliario.</li>
        <li><i class="fa fa-check-circle"></i> Proteger los derechos de los compradores extranjeros,
          aportando seguridad y confianza en cada operación.</li>
        <li><i class="fa fa-check-circle"></i> Promover la excelencia profesional mediante formación
          continua, ética y calidad en el ejercicio.</li>
        <li><i class="fa fa-check-circle"></i> Servir de punto de encuentro entre abogados,
          instituciones públicas, notarías, registros y agentes del sector.</li>
      </ul>

      <p class="margin-top-15">
        Comprar, vender o alquilar un inmueble implica riesgos legales importantes. Solo un abogado
        especializado en Derecho inmobiliario puede asesorarte con garantías. Frente al intrusismo y la
        desinformación, protegemos tus decisiones con conocimiento jurídico, ética profesional y total
        independencia.
      </p>

      <p class="margin-top-15">
        Nuestro objetivo no es solo defender los intereses de los profesionales que forman parte de la
        Asociación, sino también contribuir a la seguridad jurídica del mercado inmobiliario español,
        fortaleciendo su reputación internacional y aportando valor a la sociedad.
      </p>

      <div class="text-center">
        <a href="<?= url('/filosofia') ?>" class="btn btn-primary">Nuestra Filosofía</a>
      </div>
    </div>
  </div>
</div>

<!-- ::: MIEMBROS (MOSAICO) ::: -->
<div class="padding-top-100 home-lawyers padding-bottom-100 wow fadeInUp" data-wow-delay=".1s">
  <div class="container">
    <div class="faq-head text-center margin-bottom-60">
      <div class="heading-title">Miembros</div>
    </div>

    <?php
    $items = require VIEW_PATH . '/data/miembros.php';
    // Orden aleatorio en cada carga (equidad)
    shuffle($items);
    ?>

    <div class="members-grid">
      <?php foreach ($items as $m): ?>
        <article class="member-card">
          <div class="member-card__logo">
            <img loading="lazy" src="<?= htmlspecialchars($m['logo']) ?>"
              alt="<?= htmlspecialchars(strtolower($m['nombre']) . ' logo') ?>">
          </div>

          <?php if (!empty($m['claim'])): ?>
            <cite class="member-card__claim"><?= $m['claim'] ?></cite>
          <?php endif; ?>

          <h3 class="member-card__title"><?= $m['nombre'] ?></h3>

          <?php if (!empty($m['desc'])): ?>
            <p class="member-card__desc"><?= $m['desc'] ?></p>
          <?php endif; ?>

          <ul class="member-card__contact">
            <?php if (!empty($m['tel'])): ?>
              <li><i class="fa fa-phone"></i> <a href="tel:<?= preg_replace('/\s+/', '', $m['tel']) ?>"><?= $m['tel'] ?></a>
              </li>
            <?php endif; ?>
            <?php if (!empty($m['web'])): ?>
              <li><i class="fa fa-globe"></i> <a href="<?= htmlspecialchars($m['web']) ?>" target="_blank"
                  rel="noopener"><?= $m['web_txt'] ?? $m['web'] ?></a></li>
            <?php endif; ?>
            <?php if (!empty($m['mail'])): ?>
              <li><i class="fa fa-envelope"></i> <a href="mailto:<?= htmlspecialchars($m['mail']) ?>"><?= $m['mail'] ?></a>
              </li>
            <?php endif; ?>
          </ul>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</div>


<!-- CONSULTA -->
<div class="bg-gray padding-vertical-100 attorney-content">
  <div class="container">
    <div class="text-center">
      <h5>¿Quiere hacernos alguna consulta?</h5>
      <div class="cta-call">
        <a href="tel:612345678">Rellene este formulario <br>O llame al 612 345 678</a>
      </div>
    </div>

    <!--  -->
    <?php
    if (session_status() === PHP_SESSION_NONE)
      session_start();
    $_SESSION['csrf_token'] = bin2hex(random_bytes(16));
    ?>
    <form action="<?= url('/home/submit') ?>" method="post" class="ajax-form form-main" id="home-contact-form"
      novalidate>
      <div class="row">
        <div class="col-sm-3">
          <input name="name" placeholder="Nombre *" class="wow fadeInLeft" type="text" required>
        </div>
        <div class="col-sm-3">
          <input name="email" placeholder="Email *" class="wow fadeInDown" type="email" required inputmode="email"
            autocomplete="email">
        </div>
        <div class="col-sm-3">
          <input name="phone" placeholder="Teléfono" class="wow fadeInDown" type="tel" inputmode="tel"
            autocomplete="tel">
        </div>
        <div class="col-sm-3">
          <div class="custom-select wow fadeInRight">
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

      <textarea name="message" class="wow fadeInUp" placeholder="Comentarios" rows="5"></textarea>

      <!-- Honeypot -->
      <input type="text" name="website" autocomplete="off" tabindex="-1"
        style="position:absolute;left:-9999px;height:0;width:0;opacity:0">

      <!-- CSRF -->
      <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

      <div class="text-center">
        <button type="submit">Enviar</button>
      </div>

      <div id="home-contact-status" class="text-center mt-2" role="status" aria-live="polite"></div>
    </form>
  </div>
</div>

<script>
  document.getElementById('home-contact-form').addEventListener('submit', async (e) => {
    e.preventDefault();
    const form = e.currentTarget;
    const status = document.getElementById('home-contact-status');
    status.textContent = 'Enviando...';

    try {
      const res = await fetch(form.action, {
        method: 'POST',
        body: new FormData(form),
        credentials: 'same-origin'
      });
      const data = await res.json();
      if (data.ok) {
        status.textContent = '¡Mensaje enviado! Te hemos enviado un acuse de recibo.';
        form.reset();
      } else {
        status.textContent = 'Error: ' + (data.error || 'No se pudo enviar');
      }
    } catch (err) {
      status.textContent = 'Error de red. Inténtalo de nuevo.';
    }
  });
</script>

<script>(function () {

    // Contenido de cada servicio
    const serviceData = {
      conveyancing: {
        title: "Conveyancing · Compra y venta",
        img: "img/practise/03/conveyancing.png",
        desc: "Acompañamiento integral en operaciones de compra y venta: due diligence, arras, coordinación con notaría y registro, cálculo de impuestos y cambio de suministros."
      }

      ,
      contratos: {
        title: "Preparación de contratos de compraventa",
        img: "img/practise/03/contratos.png",
        desc: "Redacción y revisión de contratos privados y opciones de compra, cláusulas de arras, condiciones suspensivas y garantías, adaptados a su caso."
      }

      ,
      testamentos: {
        title: "Testamentos",
        img: "img/practise/03/testamento.jpg",
        desc: "Redacción y actualización de testamentos, planificación sucesoria a medida y coordinación con notaría para firma y protocolización."
      }

      ,
      nie: {
        title: "Obtención de NIE o Residencia",
        img: "img/practise/03/nie.png",
        desc: "Tramitación de NIE para no residentes y asesoramiento en procedimientos de residencia (UE y no UE): citas, formularios, tasas y documentación."
      }

      ,
      hipoteca: {
        title: "Solicitudes de hipoteca",
        img: "img/practise/03/hipoteca.png",
        desc: "Asesoramiento en financiación: comparación de ofertas, revisión de FEIN y FIAE, coordinación con la entidad y la notaría hasta la firma."
      }

      ,
      donaciones: {
        title: "Herencias y donaciones",
        img: "img/practise/03/donaciones.jpg",
        desc: "Planificación y tramitación de herencias y donaciones, aceptación y partición de herencia, liquidación del ISD y plusvalía municipal, y coordinación notarial y registral ante la Administración."
      }

      ,
      impuestos: {
        title: "Preparación y pago de impuestos de residentes y no residentes",
        img: "img/practise/03/impuestos.jpg",
        desc: "Preparación y presentación de impuestos para residentes y no residentes (IRPF/IRNR, patrimonio o rentas de alquiler), representación ante la AEAT, cálculo, domiciliación y gestión de pagos."
      }

      ,
      licencia: {
        title: "Solicitud de licencia turística y preparación de contratos",
        img: "img/practise/03/licenciaturistica.jpg",
        desc: "Tramitación de licencia turística y alta en el registro correspondiente, coordinación con técnico colegiado y Ayuntamiento, y redacción de contratos de arrendamiento de temporada/vacacional."
      }

      ,
      sl: {
        title: "Creación de empresas SL en España",
        img: "img/practise/03/sl.jpg",
        desc: "Constitución de sociedades limitadas: reserva de denominación, estatutos y escritura, NIF provisional/definitivo, alta censal, y coordinación con notaría y Registro Mercantil hasta la inscripción."
      }

    }

      ;

    // Elementos del modal
    const modal = document.getElementById("serviceModal");
    const modalImg = document.getElementById("svcModalImg");
    const modalTitle = document.getElementById("svcModalTitle");
    const modalDesc = document.getElementById("svcModalDesc");

    function openModal(data) {
      // Rellena
      modalImg.src = data.img;
      modalImg.alt = data.title;
      modalTitle.textContent = data.title;
      modalDesc.textContent = data.desc;

      // Muestra
      modal.classList.add("is-visible");
      document.body.classList.add("svc-modal-open");

      // Enfocar el botón cerrar para accesibilidad
      const closeBtn = modal.querySelector(".svc-modal__close");
      if (closeBtn) closeBtn.focus();
    }

    function closeModal() {
      modal.classList.remove("is-visible");
      document.body.classList.remove("svc-modal-open");
      // Limpia la imagen para evitar flashes si cambias rápido
      modalImg.src = "";
      modalImg.alt = "";
    }

    // Listeners de las cards
    document.querySelectorAll(".service-card").forEach(a => {
      a.addEventListener("click", function (e) {
        e.preventDefault();
        const key = this.dataset.service;

        if (key && serviceData[key]) {
          openModal(serviceData[key]);
        }
      });
    });

    // Cerrar por overlay o botones con data-close
    modal.addEventListener("click", function (e) {
      if (e.target.hasAttribute("data-close")) closeModal();
    });

    // Cerrar con Escape
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && modal.classList.contains("is-visible")) {
        closeModal();
      }
    });
  })();

</script>