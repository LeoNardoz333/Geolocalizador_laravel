@extends('layouts.app')
@section('container')
<h1 class="text-center">Productos</h1>
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
                    <a class="btn btn-success mx-1" href="{{route('ModificarUsuario'), ['id' => $resultado->id]}}">Modificar</a>
                    <form action="">
                        <button class="btn btn-danger mx-1">Eliminar</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
    {{$resultados->links('pagination::bootstrap-5')}}
</div>
@endsection