<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Administradores</title>
    <link rel="stylesheet" href="{{ asset('css/styleagregar.css') }}">
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
    </header>
    <div style="">
        <form class="form-login" 
        action="{{route('AgregarUsuario')}}" method="post">
        @csrf
            <div class ="row">
                <div class="col-md-6 mx-auto p-0">
                    <div class="card">
            <div class="login-box">
                <div class="login-snip">
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Registrar</label>
                    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
                    <div class="login-space">
                        <div class="login">
                            <div class="group">
                                <label for="name" class="label">Nombre</label>
                                <input id="name" name="nombre" type="text" class="input" placeholder="Ingresa el Nombre"
                                value="{{old('nombre')}}">
                                @error('nombre')
                                    <div style="color:red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="group">
                                <label for="lastname" class="label">Apellido Paterno</label>
                                <input id="lastname" name="apellidoP" type="text" class="input" placeholder="Ingresa el primer Apellido"
                                value="{{old('apellidoP')}}">
                                @error('apellidoP')
                                    <div style="color:red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="group">
                                <label for="lastname2" class="label">Apellido Materno</label>
                                <input id="lastname2" name="apellidoM" type="text" class="input" placeholder="Ingresa el segundo Apellido"
                                value="{{old('apellidoM')}}">
                                @error('apellidoP')
                                    <div style="color:red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Contraseña</label>
                                <input id="pass" name="pass" type="password" class="input" data-type="password" 
                                placeholder="Crea una contraseña" value="{{old('_pass')}}">
                                @error('pass')
                                    <div style="color:red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="group">
                                <label for="select" class="label">Rol</label>
                                <select name="permisos" id="select" class="selectpicker">
                                    <option value="admin">Administrador</option>
                                    <option value="user">Usuario</option>
                                </select>
                                @error('permisos')
                                    <div style="color:red">{{$message}}</div>
                                @enderror
                            </div>
                            <br>
                            <div class="group">
                                <input name="_enviar" type="submit" class="button" value="Registrar">
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
    <a class="botona btn btn-primary mb-2 w-25" style="float: rigth" href="{{route('TablaUsuarios')}}">Regresar</a>
</body>
</html>