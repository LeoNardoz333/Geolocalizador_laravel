<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/stylerefri.css') }}">
    <title>Administrar Refrigeradores</title>
</head>
<body>
    <header class="">
        <nav class="navbar login-navbar">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" style="color: #6a6f8c" href="{{route('RefrisMenu')}}">MENÚ</a>
              </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{route('TablaUsuarios')}}" style="color:#6a6f8c">Administrar Usuarios</a></li>
                    <li><a href="{{route('TablaRefrisAdmins')}}" style="color:#6a6f8c">Administrar Refrigeradores</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <form action="{{route('InsertarRefri')}}" method="POST">
        @csrf
        <h1 class="text-center">Agregar Refrigerador</h1>
        <div>
            <span>Nombre: </span>
            <input name="nombre" type="text">
        </div>
        <div>
            <span>Marca: </span>
            <input name="marca" type="text">
        </div>
        <div>
            <span>Modelo: </span>
            <input name="modelo" type="text">
        </div>
        <div>
            <span>Color: </span>
            <input name="color" type="text">
        </div>
        <div>
            <span>Tamaño: </span>
            <input name="tamano" type="text">
        </div>
        <div>
            <span>Capacidad: </span>
            <input name="capacidad" type="text">
        </div>
        <div>
            <span>Dispositivo GPS: </span>
            <input name="gps" type="text">
        </div>
        {{-- El de ubicación es temporal para la ubicación fija owo --}}
        <div>
            <span>Ubicación: </span>
            <input name="ubicacion" type="text">
        </div>
        <input type="submit" value="Agregar">
    </form>
    <a href="{{route('TablaRefrisAdmins')}}">Regresar</a>
</body>
</html>