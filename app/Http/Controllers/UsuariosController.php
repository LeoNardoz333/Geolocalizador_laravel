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
                    return redirect()->route('LoginUsuarios');
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
                    return redirect()->route('RefrisMenu');
                } else if($permisos == 'user') {
                    //header('Location: menu.html');
                    return redirect()->route('RefrisMenu');
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
