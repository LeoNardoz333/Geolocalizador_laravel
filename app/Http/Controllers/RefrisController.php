<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\refris;

class RefrisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resultados = refris::select('id','nombre', 'marca', 'modelo', 'color', 'tamano',
         'capacidad', 'ubicacion')
            ->paginate(8);
        return view('Refris.index',['resultados'=>$resultados]);
    }

    public function indexAdmins()
    {
        $resultados = refris::select('id','nombre', 'marca', 'modelo', 'color', 'tamano',
         'capacidad', 'gps', 'ubicacion')
            ->paginate(8);
        return view('Refris.indexAdmins',['resultados'=>$resultados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Refris.AddRefris');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|min:3|max:50',
            'marca'=>'required|min:3|max:20',
            'modelo'=>'required|min:2|max:30',
            'color'=>'required|min:3|max:30',
            'tamano'=>'required|min:1|max:15',
            'capacidad'=>'required|min:3|max:20',
            'gps'=>'required'
        ]);
        DB::table('refris')->insert([
            'nombre'=>$request->nombre,
            'marca'=>$request->marca,
            'modelo'=>$request->modelo,
            'color'=>$request->color,
            'tamano'=>$request->tamano,
            'capacidad'=>$request->capacidad,
            'gps'=>$request->gps,
            'ubicacion'=>$request->ubicacion
        ]);
        return redirect()->route('TablaRefrisAdmins')->
        with('success','Refrigerador insertado correctamente.');
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
