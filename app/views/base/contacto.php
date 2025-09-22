<div class="page_header text-center" data-stellar-background-ratio="0.5">
  <div class="container">
    <h3>Contacta con nosotros</h3>
    <p></p>
  </div>
</div>
<div class="main-content padding-top-100 padding-bottom-70">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-7 margin-bottom-30 wow fadeInUp" data-wow-delay=".1s">
        <div class="heading-title">Formulario de contacto</div>
        <?php
        if (session_status() === PHP_SESSION_NONE)
          session_start();
        $_SESSION['csrf_token'] = bin2hex(random_bytes(16));
        ?>
        <form id="contact-page-form" action="/contacto/submit" method="post" class="ajax-form form-main contact-form2"
          novalidate>

          <div class="row">
            <div class="col-md-6">
              <label for="c_name">Nombre*</label>
              <input id="c_name" name="name" type="text" placeholder="Tu nombre" required>

              <label for="c_email">Email*</label>
              <input id="c_email" name="email" type="email" placeholder="Tu Email" required inputmode="email"
                autocomplete="email">

              <label for="c_phone">Teléfono</label>
              <input id="c_phone" name="phone" type="tel" placeholder="Teléfono de contacto" inputmode="tel"
                autocomplete="tel">

              <label for="c_reason">Motivo de contacto*</label>
              <div class="custom-select">
                <i class="fa fa-angle-down"></i>
                <select id="c_reason" name="reason_for_contact" required>
                  <option value="">Selecciona un motivo</option>
                  <option value="Solicitud comercial">Solicitud comercial</option>
                  <option value="Concertar una cita">Concertar una cita</option>
                  <option value="Solicitar información">Solicitar información</option>
                  <option value="Asesoramiento legal">Asesoramiento legal</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <label for="c_message">Tu mensaje</label>
              <textarea id="c_message" name="message" placeholder="Mensaje" rows="7"></textarea>
            </div>
          </div>

          <!-- Honeypot -->
          <input type="text" name="website" autocomplete="off" tabindex="-1"
            style="position:absolute;left:-9999px;height:0;width:0;opacity:0">

          <!-- CSRF -->
          <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

          <button type="submit">Enviar</button>
          <div id="contact-page-status" class="mt-2" role="status" aria-live="polite"></div>
        </form>

      </div>
      <div class="col-md-3 col-sm-5 margin-bottom-30 wow fadeInUp" data-wow-delay=".3s">
        <div class="heading-title">Información</div>
        <p>Puede dejarnos un mensaje, llamarnos o enviarnos un correo electrónico. Elija la opción que
          le resulte más conveniente.</p>
        <div class="margin-bottom-30"></div>
        <div class="cinfo">
          <p><i class="fa fa-phone"></i> (+34) - 965 72 48 71</p>
          <hr>
          <p><i class="fa fa-map-marker"></i> Av. Federico Garc&iacute;a Lorca 90</p>
          <p> 03178, Benijofar, Alicante</p>
          <hr>
          <p><i class="fa fa-envelope"></i> correo@aaedi.com</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="wow fadeInUp" data-wow-delay=".1s">
  <div id="map"></div>
  <p class="mt-2" id="map-fallback" style="display:none;">
    ¿No ves el mapa?
    <a id="directions-link" href="#" target="_blank" rel="noopener">Abrir en Google Maps</a>
  </p>
</div>

<?php
// API: AIzaSyDmAJXl4gDIzeYXQR7-RTpujfIRfhu9ug4
?>



<!-- 2) ESTILOS MÍNIMOS (asegura altura visible) -->
<style>
  #map {
    width: 100%;
    min-height: 380px;
    border-radius: 8px;
  }

  @media (max-width: 576px) {
    #map {
      min-height: 300px;
    }
  }

  .gm-style-iw {
    font-size: 14px;
    line-height: 1.4;
  }

  .map-cta {
    display: inline-block;
    margin-top: 6px;
    padding: 6px 10px;
    border: 1px solid #0b5ab8;
    border-radius: 6px;
    text-decoration: none;
  }
</style>

<!-- 3) SCRIPT COMPLETO -->
<script>
  // Dirección oficial AAEDI
  const AAEDI_ADDRESS = "Av. Federico García Lorca 90, 03178 Benijófar, Alicante, España";

  // Si quieres un icono propio para el marcador, pon aquí la ruta (o deja null)
  const MARKER_ICON = null; // p.ej. "img/marker.png"

  // Estilo suave (tipo Snazzy)
  const MAP_STYLE = [
    { "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#e9e9e9" }, { "lightness": 17 }] },
    { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 20 }] },
    { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{ "color": "#ffffff" }, { "lightness": 17 }] },
    { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{ "color": "#ffffff" }, { "lightness": 29 }, { "weight": 0.2 }] },
    { "featureType": "road.arterial", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 18 }] },
    { "featureType": "road.local", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 16 }] },
    { "featureType": "poi", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 21 }] },
    { "featureType": "poi.park", "elementType": "geometry", "stylers": [{ "color": "#dedede" }, { "lightness": 21 }] },
    { "elementType": "labels.text.stroke", "stylers": [{ "visibility": "on" }, { "color": "#ffffff" }, { "lightness": 16 }] },
    { "elementType": "labels.text.fill", "stylers": [{ "saturation": 36 }, { "color": "#333333" }, { "lightness": 40 }] },
    { "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] },
    { "featureType": "transit", "elementType": "geometry", "stylers": [{ "color": "#f2f2f2" }, { "lightness": 19 }] },
    { "featureType": "administrative", "elementType": "geometry.fill", "stylers": [{ "color": "#fefefe" }, { "lightness": 20 }] },
    { "featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{ "color": "#fefefe" }, { "lightness": 17 }, { "weight": 1.2 }] }
  ];

  // Construye enlace "Cómo llegar" para fallback y para el botón del InfoWindow
  function buildDirectionsUrl(address) {
    return "https://www.google.com/maps/search/?api=1&query=" + encodeURIComponent(address);
  }

  // Callback de carga de la API
  function initMap() {
    const mapEl = document.getElementById("map");
    const directionsLinkEl = document.getElementById("directions-link");
    if (directionsLinkEl) directionsLinkEl.href = buildDirectionsUrl(AAEDI_ADDRESS);

    // Centro provisional (se actualizará tras geocodificar)
    const map = new google.maps.Map(mapEl, {
      zoom: 16,
      center: { lat: 38.0, lng: -0.7 },
      styles: MAP_STYLE,
      mapTypeControl: false,
      streetViewControl: false,
      fullscreenControl: true,
      gestureHandling: "cooperative"
    });

    const geocoder = new google.maps.Geocoder();
    geocoder.geocode({ address: AAEDI_ADDRESS, region: "ES" }, (results, status) => {
      if (status === "OK" && results[0]) {
        const pos = results[0].geometry.location;
        map.setCenter(pos);

        const marker = new google.maps.Marker({
          position: pos,
          map,
          title: "AAEDI",
          icon: MARKER_ICON || undefined
        });

        const infoHtml = `
          <div>
            <strong>AAEDI</strong><br>
            ${AAEDI_ADDRESS}<br>
            Tel: (+34) 965 72 48 71<br>
            <a class="map-cta" href="${buildDirectionsUrl(AAEDI_ADDRESS)}" target="_blank" rel="noopener">
              Cómo llegar
            </a>
          </div>
        `;
        const infowindow = new google.maps.InfoWindow({ content: infoHtml });
        infowindow.open({ anchor: marker, map });
        marker.addListener("click", () => infowindow.open({ anchor: marker, map }));

      } else {
        console.warn("Geocoding falló:", status);
        // Fallback: si el geocoder falla, muestra el enlace directo y centra Alicante aprox.
        map.setCenter({ lat: 38.3452, lng: -0.4810 }); // Alicante aprox.
        const fb = document.getElementById("map-fallback");
        if (fb) fb.style.display = "block";
      }
    });
  }
</script>

<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmAJXl4gDIzeYXQR7-RTpujfIRfhu9ug4&callback=initMap&language=es&region=ES&v=weekly"
  async defer>
</script>

<script>
  document.getElementById('contact-page-form').addEventListener('submit', async (e) => {
    e.preventDefault();
    const form = e.currentTarget;
    const status = document.getElementById('contact-page-status');
    status.textContent = 'Enviando...';

    try {
      const res = await fetch(form.action, {
        method: 'POST',
        body: new FormData(form),
        credentials: 'same-origin'
      });
      const data = await res.json();
      if (data.ok) { status.textContent = '¡Mensaje enviado! Te hemos enviado un acuse de recibo.'; form.reset(); }
      else { status.textContent = 'Error: ' + (data.error || 'No se pudo enviar'); }
    } catch {
      status.textContent = 'Error de red. Inténtalo de nuevo.';
    }
  });
</script>