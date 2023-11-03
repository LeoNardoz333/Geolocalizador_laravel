<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Administradores</title>
    <link rel="stylesheet" href="styles/styleagregar.css">
</head>
<body>
    <header class="">
        <nav class="navbar login-navbar">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="Menu.php">MENÚ</a>
              </div>
              <ul class="nav navbar-nav">
                <?php
                require('conexion.php');
                $result = mysqli_query($conn, "select * from usuario");
                $datos = mysqli_fetch_assoc(mysqli_query($conn,"call v_usuarios(".$id.")"));
                if($_SESSION['permisos']=="admin")
                {
                    echo '<li><a href="' . route('TablaUsuarios') . '" style="color:#6a6f8c">Administrar Usuarios</a></li>';
                    echo '<li><a href="#" style="color:#6a6f8c">Agregar Refrigerador</a></li>';
                }
                ?>
              </ul>
            </div>
    </header>
    <section style="display: flex; justify-content: flex-end; align-items: center; padding: 0 70px;">
        <div class="group" style="margin-bottom: 20px;">
            <label for="select" class="label" style="margin-right: 10px;">Usuario</label>
            <select id="Usuariouwu" class="selectpicker" name="Usuariouwu" style="width: 200px;" onchange="enviarValor()">
                <?php
                while ($usuario_select = mysqli_fetch_assoc($result))
                {
                    echo "<option value=\"".$usuario_select['id']."\">".$usuario_select['usuario']."</option>";
                }
                ?>
            </select>
        </div>
    </section>
    <div style="display: flex; justify-content: space-between; padding: 0 70px;">
        <form style="flex: 0 0 45%; display: flex; flex-direction: column; align-items: flex-start;" action="AdmUsuarios.php" method="post">
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
                                <input id="name" name="_nombre" type="text" class="input" placeholder="Ingresa el Nombre">
                            </div>
                            <div class="group">
                                <label for="lastname" class="label">Apellido Paterno</label>
                                <input id="lastname" name="_apellidoP" type="text" class="input" placeholder="Ingresa el primer Apellido">
                            </div>
                            <div class="group">
                                <label for="lastname2" class="label">Apellido Materno</label>
                                <input id="lastname2" name="_apellidoM" type="text" class="input" placeholder="Ingresa el segundo Apellido">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Contraseña</label>
                                <input id="pass" name="_pass" type="password" class="input" data-type="password" placeholder="Crea una contraseña">
                            </div>
                            <div class="group">
                                <label for="select" class="label">Rol</label>
                                <select name="r_permisos" id="select" class="selectpicker">
                                    <option value="admin">Administrador</option>
                                    <option value="user">Usuario</option>
                                </select>
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
    <script>
    function enviarValor() {
        var select = document.getElementById("Usuariouwu");
        var valorSeleccionado = select.options[select.selectedIndex].value;

        var xhr = new XMLHttpRequest();
        var url = "AdmUsuarios.php";
        xhr.open("POST", url, true);

        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText);
            }
        };
        xhr.send("Usuariouwu=" + valorSeleccionado);
    }
    </script>
</body>
</html>