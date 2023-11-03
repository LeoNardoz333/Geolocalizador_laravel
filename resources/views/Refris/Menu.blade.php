<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Administradores</title>
    <link rel="stylesheet" href="{{ asset('css/stylemenu.css') }}">
</head>
<body>
    <header class="">
        <nav class="navbar login-navbar">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#" style="color:#6a6f8c">GEOLOCALIZADOR</a>
              </div>
              <ul class="nav navbar-nav">
                <?php
                session_start();
                if($_SESSION['permisos']=="admin")
                {
                    echo '<li><a href="' . route('TablaUsuarios') . '" style="color:#6a6f8c">Administrar Usuarios</a></li>';
                    echo '<li><a href="#" style="color:#6a6f8c">Agregar Refrigerador</a></li>';
                }
                ?>
              </ul>
            </div>
        </nav>
    </header>
</body>
</html>