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
    <form action="{{route('UpdateRefris', $refris->id)}}" method="POST">
        @csrf
        @method('PUT')
        <h1 class="text-center">Modificar Refrigerador</h1>
        <div>
            <span>Nombre: </span>
            <input name="nombre" type="text" class="input" value="{{ $refris->nombre }}">
            @error('nombre')
                <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div>
            <span>Marca: </span>
            <input name="marca" type="text" class="input" value="{{ $refris->marca }}">
            @error('marca')
                <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div>
            <span>Modelo: </span>
            <input name="modelo" type="text" class="input" value="{{ $refris->modelo }}">
            @error('modelo')
                <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div>
            <span>Color: </span>
            <input name="color" type="text" class="input" value="{{ $refris->color }}">
            @error('color')
                <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div>
            <span>Tamaño: </span>
            <input name="tamano" type="text" class="input" value="{{ $refris->tamano }}">
            @error('tamano')
                <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div>
            <span>Capacidad: </span>
            <input name="capacidad" type="text" class="input" value="{{ $refris->capacidad }}">
            @error('capacidad')
                <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div>
            <span>Dispositivo GPS: </span>
            <input name="gps" type="text" class="input" value="{{ $refris->gps }}">
            @error('gps')
                <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        {{-- El de ubicación es temporal para la ubicación fija owo --}}
        <div>
            <span>Ubicación: </span>
            <input name="ubicacion" type="text" value="{{$refris->ubicacion}}" disabled>
        </div>
        <input type="submit" value="Modificar">
    </form>
    <a href="{{route('TablaRefrisAdmins')}}">Regresar</a>
</body>
</html>