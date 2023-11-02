<?php
//session_start();
require("conexion.php");

if(isset($_POST['user']) && isset($_POST['pass'])){
    $usuario = $_POST['user'];
    $password = $_POST['pass'];
    $permisos = $_POST['permisos'];

    $query = "SELECT * FROM users u, usuario usu WHERE usu.usuario = ".
    "'$usuario' AND u.pass = '$password' AND permisos = '$permisos' and u.id=usu.fkUsers";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error en la consulta: " . mysqli_error($conn));
    }
    mysqli_close($conn);

    function redirigirConError($error_message) {
        $_SESSION['Error'] = $error_message;
        if (isset($_SERVER['HTTP_REFERER'])) {
            header("Location: " . $_SERVER['HTTP_REFERER']);
        } else {
            // Si no hay una página anterior en el historial, redirige a una página predeterminada
            header("Location: index.php");
        }
        exit;
    }

    if((empty($nombre)||$nombre==null)&&(empty($password)||$password==null))
    {
        redirigirConError("Error: Credenciales no proporcionadas.");
    } else if (mysqli_num_rows($result) == 1) {
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['permisos'] = $_POST['permisos'];
        if($permisos == 'admin') {
            header('Location: menu.html'); 
        } else if($permisos == 'user') {
            header('Location: menu.html'); //cambiar a la pagina del usuario
        }
        exit;
    } else {
        if($permisos == 'admin') {
            redirigirConError("Error: El usuario proporcionado no es administrador.");
        } else if($permisos == 'user') {
            redirigirConError("Error: El usuario proporcionado es administrador.");
        }
    }
} else {
    redirigirConError("Error: Credenciales no proporcionadas.");
}
?>