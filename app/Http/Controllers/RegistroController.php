<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexRegistro()
    {
        // Consultamos todos los registros
        $registros = Registro::all();

        // Retornamos la vista con los datos
        return view('registros.index',[
            'registros'=>$registros,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createRegistro()
    {
        // Retornamos el formulario de registro
        return view('registros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeRegistro(Request $request)
    {
        // Validamos los datos
        $validated = $request->validate([
            'propietario' => 'required|string|max:255',
            'domicilio' => 'required|string|max:512',
            'especie' => 'required|string|max:255',
            'sexo' => 'required|string|max:255',
            'edad' => 'required|string|max:255',
            'nombre_mascota' => 'required|string|max:255',
            'dosis' => 'required|string|max:255',
            'folio' => 'required|string|max:255',
        ],[
            'propietario.required' => 'El campo es requerido',
            'domicilio.required' => 'El campo es requerido',
            'domicilio.max' => 'El texto es demasiado grande',
            'especie.required' => 'El campo es requerido',
            'sexo.required' => 'El campo es requerido',
            'edad.required' => 'El campo es requerido',
            'nombre_mascota.required' => 'El campo es requerido',
            'dosis.required' => 'El campo es requerido',
            'folio.required' => 'El campo es requerido',
        ]);

        // Capturamos los datos del usuario que inicio sesion
        $usuario = Auth::user();

        $registro = new Registro();
        
        $registro->unidad = $usuario->unidad;
        $registro->clues = $usuario->clues;
        $registro->jurisdiccion = $usuario->jurisdiccion;
        $registro->jurisdiccion_id = $usuario->jurisdiccion_id;
        $registro->municipio = $usuario->municipio;

        $registro->propietario = $request->propietario;
        $registro->domicilio = $request->domicilio;
        $registro->especie = $request->especie;
        $registro->sexo = $request->sexo;
        $registro->edad = $request->edad;
        $registro->nombre_mascota = $request->nombre_mascota;
        $registro->dosis = $request->dosis;
        $registro->folio = $request->folio;

        $registro->vacunador_id = $usuario->id;
        $registro->vacunador_nombre = $usuario->name;
        
        $registro->save();

        return redirect()->route('indexRegistro')->with('success', 'Los datos se registraron correctamente');
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
