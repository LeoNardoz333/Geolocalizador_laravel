<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\UsuarioResultado;
use App\Models\Usuario;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resultados = UsuarioResultado::select('users.id','nombre', 'apellidoP', 'apellidoM', 'pass', 'permisos', 'usuario')
            ->join('usuario', 'users.id', '=', 'usuario.fkUsers')
            ->paginate(8);
            return view('Usuarios.index',['resultados'=>$resultados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Usuarios.AgregarAdmin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:3|max:35',
            'apellidoP' => 'required|min:5|max:10',
            'apellidoM' => 'required|min:5|max:10',
            'pass' => 'required|min:8|max:20',
            'permisos' => 'required'
        ]);
        DB::table('users')->insert([
            'nombre'=>$request->nombre,
            'apellidoP'=>$request->apellidoP,
            'apellidoM'=>$request->apellidoM,
            'pass'=>$request->pass,
            'permisos'=>$request->permisos
        ]);
        return redirect()->route('TablaUsuarios');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = Usuarios::findOrFail($id);
        return view('Usuarios.ModificarAdmin', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());

        return redirect()->route('TablaUsuarios')->with('success', 'Usuario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('fkUser', $id)->delete();
        Usuario::where('id', $id)->delete();
        return redirect()->route('TablaUsuarios')->with('success', 'Usuario eliminado exitosamente');
    }
}
