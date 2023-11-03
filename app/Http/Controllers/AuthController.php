<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('Usuarios.LoginUsuario');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('user', 'pass', 'permisos');
        
        if (Auth::attempt($credentials)) {
            // El usuario está autenticado correctamente
            Session::put('permisos', $request->permisos); // Guarda los permisos en la sesión
            return redirect()->route('dashboard'); // Cambia 'dashboard' por tu ruta deseada
        } else if('permisos' == 'admin'){
            return redirect()->route('/')->with('error', 'Credenciales incorrectas');
        } else if('permisos' == 'user'){
            return redirect()->route('LoginUsuarios')->with('error', 'Credenciales incorrectas');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('/'); // Cambia 'login' por tu ruta de inicio de sesión
    }
}