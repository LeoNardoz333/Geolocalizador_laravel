<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Usuarios.LoginUsuario');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*$archivoPHP = public_path('php/procesar_login.php');
        require($archivoPHP);*/
        //session_start();
        require("php/conexion.php");
    if(isset($_POST['opcion'])){
        $opcion = $_POST['opcion'];
        
        function redirigirConMensaje($error_message) {
            $_SESSION['Error'] = $error_message;
            if (isset($_SERVER['HTTP_REFERER'])) {
                header("Location: " . $_SERVER['HTTP_REFERER']);
            } else {
                // Si no hay una página anterior en el historial, redirige a una página predeterminada
                return redirect()->route('LoginUsuarios');
            }
            exit;
        }
        //login:-----------------------------------------------------------------------------------------------
        if($opcion == "Iniciar Sesión") {
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
            
                if((empty($usuario)||$usuario==null)||(empty($password)||$password==null)) {
                    redirigirConMensaje("Error: Credenciales no proporcionadas.");
                } else if (mysqli_num_rows($result) == 1) {
                    $_SESSION['user'] = $_POST['user'];
                    $_SESSION['permisos'] = $_POST['permisos'];
                    return redirect()->route('RefrisMenu');
                    /*if($permisos == 'admin') {
                        header('Location: Menu.php'); 
                    } else if($permisos == 'user') {
                        header('Location: Menu.php'); //cambiar a la pagina del usuario
                    }*/
                } else {
                    if($permisos == 'admin') {
                        redirigirConMensaje("Error: El usuario proporcionado no es administrador.");
                    } else if($permisos == 'user') {
                        redirigirConMensaje("Error: El usuario proporcionado es administrador.");
                    }
                }
            } else {
                redirigirConMensaje("Error: Credenciales no proporcionadas.");
            }
        }
        //registro:--------------------------------------------------------------------------------------------
        else if($opcion == "Registrarse") {
            if(isset($_POST['name']) && isset($_POST['pass1']) && isset($_POST['lastname']) && isset($_POST['lastname2'])){
                $name = $_POST['name'];
                $lastname = $_POST['lastname'];
                $lastname2 = $_POST['lastname2'];
                $pass = $_POST['pass1'];

                if((empty($name)||$name==null)||(empty($lastname)||$lastname==null)||
                (empty($lastname2)||$lastname2==null)||(empty($pass)||$pass==null)) {
                    redirigirConMensaje("Error: Datos incompletos.");
                } else {
                    $query = "INSERT INTO users VALUES (NULL,'$name', '$lastname', '$lastname2','$pass',2)";
                    $result = mysqli_query($conn, $query);
                    if (!$result) {
                        die("Error al registrar: " . mysqli_error($conn));
                    } else {
                        $query1 = "SELECT usuario FROM usuario ORDER BY id DESC LIMIT 1";
                        $result1 = mysqli_query($conn, $query1);
                        $row = mysqli_fetch_assoc($result1);
                        $usuario = $row['usuario'];
                        redirigirConMensaje("Registro exitoso, usuario: $usuario");
                    }
                    mysqli_close($conn);
                }
            } else {
                redirigirConMensaje("Error: Datos no proporcionados.");
            }
        }
    }
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
