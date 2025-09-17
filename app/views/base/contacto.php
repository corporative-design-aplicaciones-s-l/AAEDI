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
</div>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 11,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(40.6700, -73.9400), // New York

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{ "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#e9e9e9" }, { "lightness": 17 }] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 20 }] }, { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{ "color": "#ffffff" }, { "lightness": 17 }] }, { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{ "color": "#ffffff" }, { "lightness": 29 }, { "weight": 0.2 }] }, { "featureType": "road.arterial", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 18 }] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 16 }] }, { "featureType": "poi", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 21 }] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [{ "color": "#dedede" }, { "lightness": 21 }] }, { "elementType": "labels.text.stroke", "stylers": [{ "visibility": "on" }, { "color": "#ffffff" }, { "lightness": 16 }] }, { "elementType": "labels.text.fill", "stylers": [{ "saturation": 36 }, { "color": "#333333" }, { "lightness": 40 }] }, { "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "transit", "elementType": "geometry", "stylers": [{ "color": "#f2f2f2" }, { "lightness": 19 }] }, { "featureType": "administrative", "elementType": "geometry.fill", "stylers": [{ "color": "#fefefe" }, { "lightness": 20 }] }, { "featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{ "color": "#fefefe" }, { "lightness": 17 }, { "weight": 1.2 }] }]
        };

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(40.6700, -73.9400),
            map: map,
            title: 'Map',
            // icon: "img/marker.png"
        });
    }
</script>