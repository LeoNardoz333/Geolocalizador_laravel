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

    <div>
    <br><br><br>    
    <form class="form-login"  action="{{route('InsertarRefri')}}" method="POST">
    <div class ="row">
    @csrf
                <div class="">
                    <div class="card">
            <div class="login-box">
                <div class="login-snip">
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Agregar Refri</label>
                    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
                    <div class="login-space">
                        <div class="login">
                            <div class="group">
                                <span class="label">Nombre: </span>
                                <input name="nombre" type="text" class="input" placeholder="" value="{{old('nombre')}}">
                                @error('nombre')
                                    <div style="color:red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="group">
                                <span class="label">Marca: </span>
                                <input name="marca" type="text" class="input" placeholder="Ingresa la Marca" value="{{old('marca')}}">
                                @error('marca')
                                    <div style="color:red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="group">
                                <span class="label">Modelo: </span>
                                <input name="modelo" type="text" class="input" placeholder="Ingresa el Modelo" value="{{old('modelo')}}">
                                @error('modelo')
                                    <div style="color:red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="group">
                                <span class="label">Color: </span>
                                <input name="color" type="text" class="input" placeholder="Ingresa el Color" value="{{old('color')}}">
                                @error('color')
                                    <div style="color:red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="group">
                                <span class="label">Tamaño: </span>
                                <input name="tamano" type="text" class="input" placeholder="(a x h)" value="{{old('tamano')}}">
                                @error('tamano')
                                    <div style="color:red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="group">
                                <span class="label">Capacidad: </span>
                                <input name="capacidad" type="text" class="input" placeholder="Ingresa la capacidad" value="{{old('capacidad')}}">
                                @error('capacidad')
                                    <div style="color:red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="group">
                                <span class="label">Dispositivo GPS: </span>
                                <input name="gps" type="text" class="input" placeholder="-" value="{{old('gps')}}">
                                @error('gps')
                                    <div style="color:red">{{$message}}</div>
                                @enderror
                            </div>
                            {{-- El de ubicación es temporal para la ubicación fija owo --}}
                            <div class="group">
                                <span class="label">Ubicación: </span>
                                <input name="ubicacion" type="text" class="input" placeholder="-" value="{{old('ubicacion')}}">
                            </div>
                            <br>
                            <div class="group">
                                <input type="submit" class="button" value="Agregar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            </div>
            </div>
            </div>
    </form>
    </div>
    <a class="botona btn btn-primary mb-2 w-25" style="float: rigth" href="{{route('TablaRefrisAdmins')}}">Regresar</a>
</body>
</html>