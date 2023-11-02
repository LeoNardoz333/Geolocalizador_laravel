<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::paginate(5);
        return view('Productos.index',['productos'=>$productos]);
        #dd($producto);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Productos.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:5|max:30',
            'descripcion' => 'required|min:5|max:100',
            'precio' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/']
        ]);
        $producto=Producto::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'precio'=>$request->precio,
        ]);
        return redirect()->route('ProductosIndex');
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
