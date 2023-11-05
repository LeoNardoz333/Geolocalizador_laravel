<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Administrar usuarios</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="">
        <nav class="navbar login-navbar">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="{{route('RefrisMenu')}}">MENÚ</a>
              </div>
              <ul class="nav navbar-nav">
                    <li><a href="{{route('TablaUsuarios')}}" style="color:#6a6f8c">Administrar Usuarios</a></li>
                    <li><a href="#" style="color:#6a6f8c">Agregar Refrigerador</a></li>
              </ul>
            </div>
        </nav>
    </header>
    @if(session('success'))
    <div id="success-message" class="alert alert-success" style="display: none;">
        {{ session('success') }}
    </div>
    @endif
<h1 class="text-center">Usuarios</h1>
<div class="container">
    <form action="{{route('AddUsuario')}}">
        @csrf
        <button class="btn btn-primary mb-2" type="submit"><span class="p-4">Nuevo</span></button>
    </form>
    <table class="table table-responsive table-striped">
        <tr class="table-primary">
            <td>ID</td>
            <td>Nombre</td>
            <td>Apellido Paterno</td>
            <td>Apellido Materno</td>
            <td>Contraseña</td>
            <td>Permisos</td>
            <td>Usuario</td>
            <td>Administrar</td>
        </tr>
        @foreach ($resultados as $resultado)
        <tr>
            <td>{{$resultado->id}}</td>
            <td>{{$resultado->nombre}}</td>
            <td>{{$resultado->apellidoP}}</td>
            <td>{{$resultado->apellidoM}}</td>
            <td>{{$resultado->pass}}</td>
            <td>{{$resultado->permisos}}</td>
            <td>{{$resultado->usuario}}</td>
            <td>
                <div class="d-flex">
                    <a class="btn btn-success mx-1" href="{{route(('ModificarUsuario'), ['id' => $resultado->id])}}">Modificar</a>
                    <form action="{{route('EliminarUsuario', ['id' => $resultado->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger mx-1">Eliminar</button>
                    </form>                    
                </div>
            </td>
        </tr>
        @endforeach
    </table>
    {{$resultados->links('pagination::bootstrap-5')}}
</div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var successMessage = document.getElementById("success-message");
        successMessage.style.display = "block";

        setTimeout(function() {
            successMessage.style.display = "none";
        }, 3000);
    });
</script>
</html>