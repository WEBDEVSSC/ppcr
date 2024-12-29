<?php

namespace App\Http\Controllers;

use App\Models\Clues;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexUsuario()
    {
        // Consultamos todos los usuarios
        $usuarios = User::all();

        // Retornamos la vista con el objeto
        return view('usuarios.index',[
            'usuarios'=>$usuarios,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createUsuario()
    {
        // Consultamos todas las clues
        $clues = Clues::orderBy('jurisdiccion_id')
                  ->orderBy('unidad')
                  ->get();

        // Retornamos la vista con el objeto
        return view('usuarios.create',[
            'clues'=>$clues
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeUsuario(Request $request)
    {
        // Validamos los datos
        $validated = $request->validate([
            'nombre'=>'required|string',
            'email' => 'required|string|email|unique:users,email',
            'password'=>'required|string',
            'clues'=>'required|string',
        ],[
            'nombre.required'=>'El campo es requerido',
            'email.required'=>'El campo es requerido',
            'email.email'=>'El formato debe ser de email',
            'email.unique'=>'El email ya se encuentra registrado',
            'password.required'=>'El campo es requerido',
            'clues.required'=>'El campo es requerido',
        ]);

        

        // Consultamos los campos para los valores de la CLUES
        $clues = Clues::find($request->clues);

        // Generamos el nuevo registro y asugnamos los valores
        $usuario = new User();

        $usuario->name = $request->nombre;
        $usuario->email = $request->email;
        $usuario->clues = $clues->clues;
        $usuario->unidad = $clues->unidad;
        $usuario->municipio = $clues->municipio;
        $usuario->jurisdiccion = $clues->jurisdiccion;
        $usuario->jurisdiccion_id = $clues->jurisdiccion_id;
        $usuario->password = Hash::make($validated['password']);

        $usuario->save();

        return redirect()->route('indexUsuario')->with('success', 'Usuario creado con éxito.');

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
