<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Refrigeradores</title>
    <link rel="stylesheet" href="{{ asset('css/stylerefri.css') }}">
</head>
<body>
    <header class="">
        <nav class="navbar login-navbar">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" style="color: #6a6f8c" href="{{route('RefrisMenu')}}">MENÚ</a>
              </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{route('TablaRefris')}}" style="color:#6a6f8c">Refrigeradores</a></li>
                </ul>
            </div>
        </nav>
    </header>
    @if(session('success'))
    <div id="success-message" class="alert alert-success" style="display: none;">
        {{ session('success') }}
    </div>
    @endif
    <form method="GET" action="{{route('TablaRefris')}}">
        @csrf
        <div class="find">
            <label style="font-weight:bold;" for="buscar">Filtrar por: </label>
            <select class="find-text" name="filtro" id="filtro">
                <option value="nombre">Nombre</option>
                <option value="marca">Marca</option>
                <option value="modelo">Modelo</option>
            </select>
            <input class="find-text" type="text" name="buscar" id="buscar" placeholder="Buscar">
            <input class="btn btn-primary mb-2 w-25" style="margin-right: 8px" type="submit" value="Buscar">
            <a href="{{ route('TablaRefris') }}" class="btn btn-success">Mostrar todos</a>
        </div>
    </form>
    <h1 class="text-center" style="text-align: center; margin: 0 auto;">Refrigeradores</h1>
    <div class="container">
        <br><br>
        <table class="table table-responsive table-striped">
            <tr class="table-primary">
                <td>ID</td>
                <td>Nombre</td>
                <td>Marca</td>
                <td>Modelo</td>
                <td>Color</td>
                <td>Tamaño</td>
                <td>Capacidad</td>
                <td>Ubicación</td>
            </tr>
            @foreach ($resultados as $resultado)
            <tr>
                <td>{{$resultado->id}}</td>
                <td>{{$resultado->nombre}}</td>
                <td>{{$resultado->marca}}</td>
                <td>{{$resultado->modelo}}</td>
                <td>{{$resultado->color}}</td>
                <td>{{$resultado->tamano}}</td>
                <td>{{$resultado->capacidad}}</td>
                <td>
                    <a class="buttones btn btn-primary" 
                    href="{{ route('edit2', $resultado->id) }}">Ver</a>
                </td>
            </tr>
            @endforeach
        </table>
        {{$resultados->links('pagination::bootstrap-5')}}
    </div>
    <a class="botona btn btn-primary mb-2 w-25" style="float: rigth" href="{{route('RefrisMenu')}}">Regresar</a>
</body>
</html>