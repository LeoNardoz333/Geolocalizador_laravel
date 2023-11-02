@extends('layouts.app')
@section('container')
<header class="">
        <nav class="navbar login-navbar">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">GEOLOCALIZADOR</a>
              </div>
              <ul class="nav navbar-nav">
                <li><a href="index.php">ADMINISTRADORES</a></li>
                <li><a href="LoginUsuario.html">USUARIOS</a></li>
              </ul>
            </div>
    </header>
    <br>
    <form class="form-login" action="procesar_login.php" method="POST">
        <div class ="row">
            <div class="col-md-6 mx-auto p-0">
                <div class="card">
        <div class="login-box">
            <div class="login-snip">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Ingresar</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrarse</label>
                <div class="login-space">
                    <div class="login">
                        <input id="permisos" name="permisos" type="text" value="user" style="visibility: hidden;">
                        <div class="group">
                            <label for="user" class="label">Usuario</label>
                            <input id="user" name="user" type="text" class="input"  placeholder="Ingresa tu Usuario">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Contraseña</label>
                            <input id="pass" name="pass" type="password" class="input" data-type="password" placeholder="Ingresa tu contraseña">
                        </div>
                        <br>
                        <div class="group">
                            <input type="submit" class="button" value="Iniciar Sesión">
                        </div>
                        <div class="group px-auto text-center">
                            <?php
                            if (session_status() == PHP_SESSION_NONE) {
                                session_start();
                            }
                            if(isset($_SESSION['Error']))
                            {
                                echo "<span style=\"color: red;\">".$_SESSION['Error']."</span>";
                                unset($_SESSION['Error']);
                                //echo "<span style=\"color: red;\">".$_SESSION['Error']."</span>";
                            }
                            ?>
                        </div>
                        <div class="hr"></div>
                    </div>
                    <div class="sign-up-form">
                        <div class="group">
                            <label for="name" class="label">Nombre</label>
                            <input id="name" type="text" class="input" placeholder="Ingresa tu Nombre">
                        </div>
                        <div class="group">
                            <label for="lastname" class="label">Apellido Paterno</label>
                            <input id="lastname" type="text" class="input" placeholder="Ingresa tu primer Apellido">
                        </div>
                        <div class="group">
                            <label for="lastname2" class="label">Apellido Materno</label>
                            <input id="lastname2" type="text" class="input" placeholder="Ingresa tu segundo Apellido">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Contraseña</label>
                            <input id="pass" type="password" class="input" data-type="password" placeholder="Crea tu contraseña">
                        </div>
                        <br>
                        <div class="group">
                            <input type="submit" class="button" value="Registrarse">
                        </div>
                        <div class="hr"></div>
                        <div class="foot">
                            <label for="tab-1">¿Ya te has registrado?</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
        </div>
        </div>
        </div>
    </form>
@endsection