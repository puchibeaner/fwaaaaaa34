<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registros = Pelicula::all();
        return view ('app-views.cartelera', compact ('registros'));
        
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("app-views.formulario");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $peliculas = new Pelicula;
        $peliculas->name = $request->input('name');
        $peliculas->elenco = $request->input('elenco');
        $peliculas->productor = $request->input('productor');
        $peliculas->descripcion = $request->input('descripcion');
        $peliculas->calificacion = $request->input('calificacion');
        $peliculas->clasificacion = $request->input('clasificacion');
        $peliculas->imagen = $request->input('imagen');   
        $peliculas->genero = $request->input('genero');
        $peliculas->save();

        return view ('app-views.cartelera');   
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelicula $pelicula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelicula $pelicula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelicula $pelicula)
    {
        //
    }
}
