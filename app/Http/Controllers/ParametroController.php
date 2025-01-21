<?php

namespace App\Http\Controllers;

use App\Models\Parametro;
use Illuminate\Http\Request;

class ParametroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexParametro()
    {
        // Mostramos la lista de parametros
        $parametros = Parametro::orderBy('id', 'desc')->get();

        // Retornamos la vista con los datos
        return view('parametros.index',[
            'parametros'=>$parametros,
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function createParametro()
    {
        // Retornamos la vista con los datos
        return view('parametros.create');
    }

    /**
     * Display a listing of the resource.
     */
    public function storeParametro(Request $request)
    {
        // Validamos los datos
        $validated = $request->validate([
            'anio'=>'required|integer|unique:parametros,anio',
            'meta_anual'=>'required|integer',
            'metaj1'=>'required|integer',
            'metaj2'=>'required|integer',
            'metaj3'=>'required|integer',
            'metaj4'=>'required|integer',
            'metaj5'=>'required|integer',
            'metaj6'=>'required|integer',
            'metaj7'=>'required|integer',
            'metaj8'=>'required|integer',
        ],[
            'anio.required'=>'El campo es requerido',
            'anio.unique'=>'El año ya se encuentra en la base de datos',
            'metaj1.required'=>'El campo es requerido',
            'metaj2.required'=>'El campo es requerido',
            'metaj3.required'=>'El campo es requerido',
            'metaj4.required'=>'El campo es requerido',
            'metaj5.required'=>'El campo es requerido',
            'metaj6.required'=>'El campo es requerido',
            'metaj7.required'=>'El campo es requerido',
            'metaj8.required'=>'El campo es requerido',
        ]);

        // Creamos el objeto para almacenar los datos
        $parametro = new Parametro();

        $parametro->anio = $request->anio;
        $parametro->meta_anual = $request->meta_anual;
        $parametro->meta_j1 = $request->metaj1;
        $parametro->meta_j2 = $request->metaj2;
        $parametro->meta_j3 = $request->metaj3;
        $parametro->meta_j4 = $request->metaj4;
        $parametro->meta_j5 = $request->metaj5;
        $parametro->meta_j6 = $request->metaj6;
        $parametro->meta_j7 = $request->metaj7;
        $parametro->meta_j8 = $request->metaj8;

        $parametro->save();

        return redirect()->route('indexParametro')->with('success', 'Los datos se registraron correctamente');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function editParametro($id)
    {
        // Consultamos los datos del id
        $parametro = Parametro::findOrFail($id);

        // Regresamos la vista con el objeto
        return view('parametros.edit', compact('parametro'));
       
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
