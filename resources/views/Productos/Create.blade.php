@extends('layouts.app')
@section('container')
<h1 class="text-center">Agregar Productos</h1>
<div class="container w-75">
    <form action="{{route('ProductosStore')}}" method="post">
        @csrf
        <div class="from-group">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control"
            value="{{old('nombre')}}">
            @error('nombre')
                <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div class="from-group">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control"
            value="{{old('descripcion')}}">
            @error('descripcion')
                <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div class="from-group">
            <label for="precio" class="form-label">Precio</label>
            <input type="text" name="precio" id="precio" class="form-control"
            value="{{old('precio')}}">
            @error('precio')
                <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div class="from-group mt-2">
            <button for="submit" class="btn btn-primary">Guardar</button>
            <a href="{{route('ProductosIndex')}}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
</div>
@endsection