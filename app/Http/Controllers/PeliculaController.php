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
    public function show($id)
    {
        $pelicula = Pelicula::where('id', "=", $id)->first();
        return view ('app-views.vista-de-pelicula',compact('pelicula'));  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pelicula = Pelicula::where('id', "=", $id)->first();
        return view ('app-views.formularioedit',compact('pelicula')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $formdata = array (

            'name'=> $request->name,
            'elenco'=> $request->elenco,
            'productor'=> $request->productor,
            'descripcion'=> $request->descripcion,
            'calificacion'=> $request->calificacion,
            'clasificacion'=> $request->clasificacion,
            'imagen'=> $request->imagen,
            'genero'=> $request->genero
        );

        $pelicula = Pelicula::whereId($id)->update($formdata);
        $registros = Pelicula::all();
        return view ('app-views.cartelera', compact ('registros'));


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Pelicula::find($id)->delete();
        $registros = Pelicula::all();
        return view ('app-views.cartelera', compact ('registros'));
    }
}
