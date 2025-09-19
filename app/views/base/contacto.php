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
                <form action="php/contact.php" class="ajax-form form-main contact-form2">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Nombre:</label>
                            <input name="name" type="text" placeholder="Tu nombre">
                            <label>Email:</label>
                            <input name="email" type="email" placeholder="Tu Email">
                            <label>Teléfono:</label>
                            <input name="phone" type="text" placeholder="Tel&eacute;fono de contacto">
                            <label>Motivo de contacto:</label>
                            <div class="custom-select">
                                <i class="fa fa-angle-down"></i>
                                <select name="reason_for_contact">
                                    <option>Solicitud comercial</option>
                                    <option>Concertar una cita</option>
                                    <option>Solicitar información</option>
                                    <option>Asesoramiento legal</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Tu mensaje:</label>
                            <textarea name="message" placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                    <button type="submit">Enviar</button>
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
  #map { width:100%; min-height:380px; border-radius:8px; }
  @media (max-width: 576px){ #map { min-height:300px; } }
  .gm-style-iw { font-size:14px; line-height:1.4; }
  .map-cta {
    display:inline-block; margin-top:6px; padding:6px 10px; border:1px solid #0b5ab8;
    border-radius:6px; text-decoration:none;
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
    {"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},
    {"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},
    {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},
    {"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},
    {"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},
    {"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},
    {"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},
    {"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},
    {"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},
    {"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},
    {"elementType":"labels.icon","stylers":[{"visibility":"off"}]},
    {"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},
    {"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},
    {"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}
  ];

  // Construye enlace "Cómo llegar" para fallback y para el botón del InfoWindow
  function buildDirectionsUrl(address) {
    return "https://www.google.com/maps/search/?api=1&query=" + encodeURIComponent(address);
  }

  // Callback de carga de la API
  function initMap(){
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
  async defer></script>