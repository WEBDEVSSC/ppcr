<?php

namespace App\Http\Controllers;

use App\Models\Parametro;
use App\Models\Registro;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        // Consultamos la meta anual del ano 2025
        $parametro = Parametro::where('id',1)->first();
        
        // Consultamos todos los registros del anio seleccionado
        $contadorRegistros = Registro::all()->count();
        
        // Regresamos la vista con los datos
        return view('home', compact('parametro', 'contadorRegistros'));
    }
}
