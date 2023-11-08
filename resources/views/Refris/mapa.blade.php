<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página con Mapa</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        /* Estilo básico para el contenedor del mapa */
        #map {
            height: 400px; /* Ajusta la altura como desees */
        }
    </style>
</head>
<body>
    <h1>Mi Página con Mapa</h1>
    <!-- Agrega un contenedor para el mapa -->
    <div id="map"></div>

    <!-- Incluye la biblioteca Leaflet y define el mapa -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        // Inicializa un mapa Leaflet en el contenedor con ID "map"
        var map = L.map('map').setView([51.505, -0.09], 13); // Por ejemplo, Nueva York

        // Agrega una capa de mapa de OpenStreetMap
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
    </script>
</body>
</html>
