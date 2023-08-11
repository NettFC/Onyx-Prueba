<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libreria;

class LibreriaController extends Controller
{
    /**
     * Display a listing of the resource. 123
     */
    public function index()
    {
        $librerias = Libreria::all();
        return view('libreria.index')->with('librerias', $librerias);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libreria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $librerias = new Libreria();

        $librerias->titulo = $request->get('titulo');
        $librerias->autor = $request->get('autor');
        $librerias->genero = $request->get('genero');
        $librerias->año = $request->get('año');

        $librerias->save();

        return redirect('/libreria');
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
        $libreria = Libreria::find($id);
        return view('libreria.edit')->with('libreria', $libreria);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $libreria = Libreria::find($id);

        $libreria->titulo = $request->get('titulo');
        $libreria->autor = $request->get('autor');
        $libreria->genero = $request->get('genero');
        $libreria->año = $request->get('año');

        $libreria->save();

        return redirect('/libreria');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $libreria = Libreria::find($id);
        $libreria->delete();
        return redirect('/libreria');
    }
}
