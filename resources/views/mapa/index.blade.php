<!doctype html>
<html>
<head>
    <title>Geolocalizacion</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
<div class="container-xl contenedor">
        <div class="row buscador">
            <input id="buscador-text" type="text" class="buscador-text">
            <button type="button" class="btn btn-primary btn-buscar" id="btn-buscar">Buscar</button>
        </div>
        <div class="row contenedor-mapa-result">
            <ul id="ubicaciones" class="col-3 list-group"></ul>
            <div class="col-9">
                <div id="contenedor-mapa" class="contenedor-mapa"></div>
            </div>
        </div>
    </div>
</div>


<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="{{ asset('/js/mapa.js') }}"></script>
</body>
</html>