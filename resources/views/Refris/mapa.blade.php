<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <title>Mapa</title>
    <link rel="stylesheet" href="{{ asset('css/stylemapa.css') }}">
</head>
<body>
    <header class="">
        <nav class="navbar login-navbar">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" style="color: #6a6f8c" href="{{route('RefrisMenu')}}">MENÚ</a>
              </div>
            </div>
        </nav>
    </header>
    <!-- -------------------------- -->
    <div class="group">
        <label class="text-label"  for="coordenadas">Coordenadas:</label>
        <input class="find-text" type="text" id="coordenadas" placeholder="coordenadas:" value="{{ $refris->ubicacion }}">
    </div>

    <!-- El contenedor del mapa -->
    <div id="map" style="height: 400px;"></div>

    <!-- Incluye la biblioteca Leaflet -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <!-- Tu script personalizado para crear el mapa -->
    <script>
        function initMap() {
            // Obtener las coordenadas del textbox
            var coordenadas = document.getElementById('coordenadas').value;

            // Dividir las coordenadas en latitud y longitud
            var coordenadasArray = coordenadas.split(',');
            var latitud = parseFloat(coordenadasArray[0]);
            var longitud = parseFloat(coordenadasArray[1]);

            // Verificar si las coordenadas son válidas
            if (isNaN(latitud) || isNaN(longitud)) {
                alert('Coordenadas inválidas. Ingrese valores válidos.');
                return;
            }

            // Inicializa el mapa
            var mymap = L.map('map').setView([latitud, longitud], 80);

            // Añade un mosaico (tile layer) de OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(mymap);

            // Añade un marcador en el mapa
            var marker = L.marker([latitud, longitud]).addTo(mymap);

            // Añade un popup al marcador
            marker.bindPopup("<b>Tu refrigerador se encuentra aquí</b>").openPopup();
        }

        // Llamar a la función initMap cuando la página se cargue
        document.addEventListener('DOMContentLoaded', initMap);
    </script>

    <div>
        <label class="text-label" for="coordenadas">Coordenadas2:</label>
        <input class="find-text" type="text" id="coordenadas2" placeholder="Ingrese las coordenadas" value="0,0">
    </div>
    <a class="botona btn btn-primary mb-2 w-25" style="float: rigth" href="{{route('TablaRefrisAdmins')}}">Regresar</a>
    <!-- 51.505, -0.09
    40.7128, -74.0060
    48.8566, 2.3522
    -33.8688, 151.2093
    35.6895, 139.6917
    -33.9249, 18.4241 -->
</body>

</html>