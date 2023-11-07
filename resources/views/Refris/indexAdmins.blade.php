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
                    <li><a href="{{route('TablaUsuarios')}}" style="color:#6a6f8c">Administrar Usuarios</a></li>
                    <li><a href="{{route('TablaRefrisAdmins')}}" style="color:#6a6f8c">Administrar Refrigeradores</a></li>
                </ul>
            </div>
        </nav>
    </header>
    @if(session('success'))
    <div id="success-message" class="alert alert-success" style="display: none;">
        {{ session('success') }}
    </div>
    @endif
    <h1 class="text-center" style="text-align: center; margin: 0 auto;">Refrigeradores</h1>
    <div class="container">
        <form action="{{route('AgregarRefri')}}">
            <button class="btn btn-primary mb-2 w-25" style="background-color: #3A4950" 
            type="submit"><span class="p-4">Agregar nuevo refrigerador</span></button>
        </form>
        <br><br>
        <table class="table table-responsive table-striped">
            <tr class="table-primary">
                <td>ID</td>
                <td>Nombre</td>
                <td>Marca</td>
                <td>Modelo</td>
                <td>Color</td>
                <td>Tamaño (a x h)</td>
                <td>Capacidad</td>
                <td>GPS</td>
                <td>Ubicación</td>
                <td>Administrar</td>
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
                <td>{{$resultado->gps}}</td>
                <td><a class="buttones btn btn-primary"href="" 
                    value="{{$resultado->ubicacion}}">Ver</a>
                </td>
                <td>
                    <div class="d-flex">
                        <a class="buttones btn btn-success" 
                        href="{{route('ModificarRefris', $resultado->id)}}">Modificar</a>
                        <form action="{{route('EliminarRefris', $resultado->id)}}" method="POST" 
                        onsubmit="return confirm('¿Estás seguro de que deseas eliminar este refrigerador?');">
                            @csrf
                            @method('DELETE')
                            <button class="buttones btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
        {{$resultados->links('pagination::bootstrap-5')}}
    </div>
    <a href="{{route('RefrisMenu')}}">Regresar</a>
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