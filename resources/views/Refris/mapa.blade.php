<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa con Leaflet</title>
    <!-- Incluye Leaflet CSS y JavaScript desde CDN -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <!-- Estilos para el contenedor del mapa -->
    <style>
        #map {
            height: 400px;
        }
    </style>
</head>

<body>
    <form class="form-login" action="{{ route('UpdateRefris', $refris->ubicacion) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="group">
            <span class="label">Ubicacion:</span>
            <input name="ubicacion" type="text" class="input" value="{{ $refris->ubicacion }}">
        </div>

        <!-- Contenedor del mapa -->
        <div id="map"></div>

        <script>
            // Función para inicializar el mapa
            function initMap() {
                // Coordenadas del centro del mapa (latitud, longitud)
                var mapCenter = [40.7128, -74.0060]; // Ejemplo: Nueva York

                // Obtén las coordenadas del campo de texto
                var ubicacionInput = document.getElementById('ubicacion').value;
                var coordenadas = ubicacionInput.split(',').map(function(coord) {
                    return parseFloat(coord.trim());
                });

                // Crea el mapa y establece la vista inicial
                var map = L.map('map').setView(coordenadas, 13);

                // Añade una capa de mapa base (Mapbox Streets en este caso)
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap contributors'
                }).addTo(map);

                // Añade un marcador en el centro del mapa
                L.marker(coordenadas).addTo(map)
                    .bindPopup('¡Hola! Este es un marcador de ejemplo.');
            }
            // Llama a la función de inicialización del mapa cuando la página se carga
            window.onload = initMap;
        </script>
    </form>
</body>

</html>