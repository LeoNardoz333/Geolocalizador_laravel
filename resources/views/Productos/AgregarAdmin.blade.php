@extends('layouts.app')
@section('container')
<header class="">
        <nav class="navbar login-navbar">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="Menu.html">MENU</a>
              </div>
              <ul class="nav navbar-nav">
                <li><a href="AgregarAdmin.php">Agregar Administrador</a></li>
                <li><a href="#">Agregar Refrigerador</a></li>
              </ul>
            </div>
    </header>
    <br>
    <form class="form-login" action="" method="POST">
        <div class ="row">
            <div class="col-md-6 mx-auto p-0">
                <div class="card">
        <div class="login-box">
            <div class="login-snip">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Registrar Admin</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
                <div class="login-space">
                    <div class="login">
                        <div class="group">
                            <label for="name" class="label">Nombre</label>
                            <input id="name" type="text" class="input" placeholder="Ingresa el Nombre">
                        </div>
                        <div class="group">
                            <label for="lastname" class="label">Apellido Paterno</label>
                            <input id="lastname" type="text" class="input" placeholder="Ingresa el primer Apellido">
                        </div>
                        <div class="group">
                            <label for="lastname2" class="label">Apellido Materno</label>
                            <input id="lastname2" type="text" class="input" placeholder="Ingresa el segundo Apellido">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Contraseña</label>
                            <input id="pass" type="password" class="input" data-type="password" placeholder="Crea una contraseña">
                        </div>
                        <br>
                        <div class="group">
                            <input type="submit" class="button" value="Registrar">
                        </div>
                        <div class="group px-auto text-center">
                        </div>
                        <div class="hr"></div>
                    </div>
                </div>
            </div>
        </div>   
        </div>
        </div>
        </div>
    </form>
@endsection