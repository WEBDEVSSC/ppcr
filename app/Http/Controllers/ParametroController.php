<?php

namespace App\Http\Controllers;

use App\Models\Parametro;
use Illuminate\Auth\Events\Validated;
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

    public function updateParametro(Request $request, $id)
    {
        $validated = $request->validate([
            'meta_anual' => 'required|numeric',
            'metaj1' => 'required|numeric',
            'metaj2' => 'required|numeric',
            'metaj3' => 'required|numeric',
            'metaj4' => 'required|numeric',
            'metaj5' => 'required|numeric',
            'metaj6' => 'required|numeric',
            'metaj7' => 'required|numeric',
            'metaj8' => 'required|numeric',
        ],[
            'meta_anual.required' => 'El campo Meta Anual es obligatorio.',
            'meta_anual.numeric' => 'El campo Meta Anual debe ser un número.',
            
            'metaj1.required' => 'El campo Meta J1 es obligatorio.',
            'metaj1.numeric' => 'El campo Meta J1 debe ser un número.',

            'metaj2.required' => 'El campo Meta J2 es obligatorio.',
            'metaj2.numeric' => 'El campo Meta J2 debe ser un número.',

            'metaj3.required' => 'El campo Meta J3 es obligatorio.',
            'metaj3.numeric' => 'El campo Meta J3 debe ser un número.',

            'metaj4.required' => 'El campo Meta J4 es obligatorio.',
            'metaj4.numeric' => 'El campo Meta J4 debe ser un número.',

            'metaj5.required' => 'El campo Meta J5 es obligatorio.',
            'metaj5.numeric' => 'El campo Meta J5 debe ser un número.',

            'metaj6.required' => 'El campo Meta J6 es obligatorio.',
            'metaj6.numeric' => 'El campo Meta J6 debe ser un número.',

            'metaj7.required' => 'El campo Meta J7 es obligatorio.',
            'metaj7.numeric' => 'El campo Meta J7 debe ser un número.',

            'metaj8.required' => 'El campo Meta J8 es obligatorio.',
            'metaj8.numeric' => 'El campo Meta J8 debe ser un número.',
        ]);

        // Buscamos el registro a actualizar
        $parametro = Parametro::findOrFail($id);

         // Asignar manualmente los valores
        $parametro->meta_anual = $request->meta_anual;
        $parametro->meta_j1 = $request->metaj1;
        $parametro->meta_j2 = $request->metaj2;
        $parametro->meta_j3 = $request->metaj3;
        $parametro->meta_j4 = $request->metaj4;
        $parametro->meta_j5 = $request->metaj5;
        $parametro->meta_j6 = $request->metaj6;
        $parametro->meta_j7 = $request->metaj7;
        $parametro->meta_j8 = $request->metaj8;

        // Guardar los cambios en la base de datos
        $parametro->save();

        // Redireccionar con mensaje de éxito
        return redirect()->route('indexParametro')->with('update', 'Registro actualizado correctamente');

    }

}
