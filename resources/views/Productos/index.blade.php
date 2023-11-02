@extends('layouts.app')
@section('container')
<h1 class="text-center">Productos</h1>
<div class="container">
    <form action="{{route('ProductosCreate')}}">
        <button class="btn btn-primary mb-2" type="submit"><span class="p-4">Nuevo</span></button>
    </form>
    <table class="table table-responsive table-striped">
        <tr class="table-primary">
            <td>Id</td>
            <td>Nombre</td>
            <td>Descripción</td>
            <td>Precio</td>
            <td>Acciones</td>
        </tr>
        @foreach ($productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>{{$producto->precio}}</td>
            <td>
                <div class="d-flex">
                    <a class="btn btn-success mx-1" href="">Editar</a>
                    <form action="">
                        <button class="btn btn-danger mx-1">Eliminar</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
    {{$productos->links('pagination::bootstrap-5')}}
</div>
@endsection