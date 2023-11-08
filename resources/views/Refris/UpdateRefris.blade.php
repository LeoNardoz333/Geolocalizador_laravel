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
        <form class="form-login" action="{{ route('UpdateRefris', $refris->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mx-auto p-0">
                    <div class="card">
                        <div class="login-box">
                            <div class="login-snip">
                                <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                                <label for "tab-1" class="tab">Modificar Refrigeradores</label>
                                <input id="tab-2" type="radio" name="tab" class="sign-up">
                                <label for="tab-2" class="tab"></label>
                                <div class="login-space">
                                    <div class="login">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="group">
                                                    <span class="label">Nombre:</span>
                                                    <input name="nombre" type="text" class="input" value="{{ $refris->nombre }}">
                                                    @error('nombre')
                                                        <div style="color: red">{{ $message }}</div>
                                                    @enderror
                                                </div>
        
                                                <div class="group">
                                                    <span class="label">Marca:</span>
                                                    <input name="marca" type="text" class="input" value="{{ $refris->marca }}">
                                                    @error('marca')
                                                        <div style="color: red">{{ $message }}</div>
                                                    @enderror
                                                </div>
        
                                                <div class="group">
                                                    <span class="label">Modelo:</span>
                                                    <input name="modelo" type="text" class="input" value="{{ $refris->modelo }}">
                                                    @error('modelo')
                                                        <div style="color: red">{{ $message }}</div>
                                                    @enderror
                                                </div>
        
                                                <div class="group">
                                                    <span class="label">Color:</span>
                                                    <input name="color" type="text" class="input" value="{{ $refris->color }}">
                                                    @error('color')
                                                        <div style="color: red">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="group">
                                                    <span class="label">Tamaño:</span>
                                                    <input name="tamano" type="text" class="input" value="{{ $refris->tamano }}">
                                                    @error('tamano')
                                                        <div style="color: red">{{ $message }}</div>
                                                    @enderror
                                                </div>
        
                                                <div class="group">
                                                    <span class="label">Capacidad:</span>
                                                    <input name="capacidad" type="text" class="input" value="{{ $refris->capacidad }}">
                                                    @error('capacidad')
                                                        <div style="color: red">{{ $message }}</div>
                                                    @enderror
                                                </div>
        
                                                <div class="group">
                                                    <span class="label">Dispositivo GPS:</span>
                                                    <input name="gps" type="text" class="input" value="{{ $refris->gps }}">
                                                    @error('gps')
                                                        <div style="color: red">{{ $message }}</div>
                                                    @enderror
                                                </div>
        
                                                <div class="group">
                                                    <span class="label">Ubicación:</span>
                                                    <input name="ubicacion" type="text" class="input" value="{{ $refris->ubicacion }}" disabled>
                                                </div>
        
                                                <br>
                                            </div>
                                        </div>
                                        <div class="group">
                                            <input type="submit" class="button mx-auto" value="Modificar">
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