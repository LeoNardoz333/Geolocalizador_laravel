<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioResultado;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resultados = UsuarioResultado::select('users.id','nombre', 'apellidoP', 'apellidoM', 'pass', 'usuario')
            ->join('usuario', 'users.id', '=', 'usuario.fkUsers')
            ->paginate(8);
            return view('Usuarios.index',['resultados'=>$resultados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
