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
      <img src="<?= asset('img/home/01/1.jpg') ?>" class="img-responsive about-hero-img" alt="AAEDI">
    </div>

    <div class="about-prose card-plain">
      <!-- (tu texto intacto) -->
      <p>La Asociación de Abogados Expertos en Derecho Inmobiliario (AAEDI) nace...</p>
      <p>El mercado inmobiliario español es uno de los más dinámicos de Europa...</p>
      <p>La AAEDI surge como respuesta a esta necesidad, con el propósito de:</p>

      <ul class="icon-list">
        <li><i class="fa fa-check-circle"></i> Unificar criterios y buenas prácticas...</li>
        <li><i class="fa fa-check-circle"></i> Proteger los derechos de los compradores...</li>
        <li><i class="fa fa-check-circle"></i> Promover la excelencia profesional...</li>
        <li><i class="fa fa-check-circle"></i> Servir de punto de encuentro...</li>
      </ul>

      <p class="margin-top-15">Comprar, vender o alquilar un inmueble implica riesgos legales...</p>
      <p class="margin-top-15">Nuestro objetivo no es solo defender los intereses...</p>

      <div class="text-center">
        <a href="<?= url('/filosofia') ?>" class="btn btn-primary">Nuestra Filosofía</a>
      </div>
    </div>
  </div>
</div>

<!-- ::: MIEMBROS ::: -->
<div class="padding-top-100 home-lawyers padding-bottom-100 wow fadeInUp" data-wow-delay=".1s">
  <div class="container" style="overflow:hidden;">
    <div class="faq-head text-center margin-bottom-100">
      <div class="heading-title">Miembros</div>
    </div>
    <div class="lawyer-carousel-wrap">
      <div class="prev3"><i class="fa fa-angle-left"></i></div>
      <div class="next3"><i class="fa fa-angle-right"></i></div>
      <div class="lawyer-carousel">
        <?php include VIEW_PATH . '/partials/index_members/miembros-a.html' ?>
        <?php include VIEW_PATH . '/partials/index_members/miembros-b.html' ?>
        <?php include VIEW_PATH . '/partials/index_members/miembros-e.html' ?>
        <?php include VIEW_PATH . '/partials/index_members/miembros-f.html' ?>
        <?php include VIEW_PATH . '/partials/index_members/miembros-i.html' ?>
        <?php include VIEW_PATH . '/partials/index_members/miembros-m.html' ?>
        <?php include VIEW_PATH . '/partials/index_members/miembros-n.html' ?>
        <?php include VIEW_PATH . '/partials/index_members/miembros-s.html' ?>
      </div>
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

    <!-- Ajusta la acción a tu ruta real del backend -->
    <form action="<?= url('/contacto') ?>" method="post" class="ajax-form form-main">
      <div class="row">
        <div class="col-sm-4"><input name="name" placeholder="Nombre" class="wow fadeInLeft" type="text"></div>
        <div class="col-sm-4"><input name="phone" placeholder="Tel&eacute;fono" class="wow fadeInDown" type="text">
        </div>
        <div class="col-sm-4">
          <div class="custom-select wow fadeInRight">
            <i class="fa fa-angle-down"></i>
            <select name="reason_for_contact">
              <option value="">Tema a tratar</option>
              <option>Pedir Cita</option>
              <option>Información</option>
              <option>Hablar con un abogado</option>
            </select>
          </div>
        </div>
      </div>
      <textarea name="message" class="wow fadeInUp" placeholder="Comentarios"></textarea>
      <div class="text-center"><button type="submit">Enviar</button></div>
    </form>
  </div>
</div>