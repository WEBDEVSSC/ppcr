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
        // Consultamos el año actual
        $anioActual = now()->year;
        
        // Consultamos la meta anual del ano
        $parametro = Parametro::where('anio',$anioActual)->first();
        
        // Consultamos todos los registros del año
        $registrosDelAnio = Registro::whereYear('created_at', $anioActual)->get();

        // Contamos los registros del año
        $contadorRegistros = $registrosDelAnio->count();

        // Consultamos todos los registros de la J1
        $registrosDelAnioJ1 = Registro::whereYear('created_at', $anioActual)
            ->where('jurisdiccion_id',1)                                
            ->get();

        $contadorRegistrosDelAnioJ1 = $registrosDelAnioJ1->count();

        // Verificamos si meta_j1 tiene un valor válido (no es null ni 0)
        $metaJ1 = $parametro?->meta_j1;

        if ($metaJ1 > 0) {
            // Si meta_j1 es mayor que 0, realizamos el cálculo
            $porcentajeJ1 = ($contadorRegistrosDelAnioJ1 / $metaJ1) * 100;
        } else {
            // Si meta_j1 es 0 o null, asignamos un valor predeterminado (por ejemplo, 0)
            $porcentajeJ1 = 0;
        }

        // Consultamos todos los registros de la J2
        $registrosDelAnioJ2 = Registro::whereYear('created_at', $anioActual)
            ->where('jurisdiccion_id',2)                                
            ->get();

        $contadorRegistrosDelAnioJ2 = $registrosDelAnioJ2->count();

        // Verificamos si meta_j2 tiene un valor válido (no es null ni 0)
        $metaJ2 = $parametro?->meta_j2;

        if ($metaJ2 > 0) {
            // Si meta_j1 es mayor que 0, realizamos el cálculo
            $porcentajeJ2 = ($contadorRegistrosDelAnioJ2 / $parametro->meta_j2) * 100;
        } else {
            // Si meta_j1 es 0 o null, asignamos un valor predeterminado (por ejemplo, 0)
            $porcentajeJ2 = 0;
        }

        // Consultamos todos los registros de la J3
        $registrosDelAnioJ3 = Registro::whereYear('created_at', $anioActual)
            ->where('jurisdiccion_id',3)                                
            ->get();

        $contadorRegistrosDelAnioJ3 = $registrosDelAnioJ3->count();

        // Verificamos si meta_j2 tiene un valor válido (no es null ni 0)
        $metaJ3 = $parametro?->meta_j3;

        if ($metaJ3 > 0) {
            // Si meta_j1 es mayor que 0, realizamos el cálculo
            $porcentajeJ3 = ($contadorRegistrosDelAnioJ3 / $parametro->meta_j3) * 100;
        } else {
            // Si meta_j1 es 0 o null, asignamos un valor predeterminado (por ejemplo, 0)
            $porcentajeJ3 = 0;
        }

        

        // Consultamos todos los registros de la J4
        $registrosDelAnioJ4 = Registro::whereYear('created_at', $anioActual)
            ->where('jurisdiccion_id',4)                                
            ->get();

        $contadorRegistrosDelAnioJ4 = $registrosDelAnioJ4->count();

        // Verificamos si meta_j2 tiene un valor válido (no es null ni 0)
        $metaJ4 = $parametro?->meta_j3;

        if ($metaJ4 > 0) {
            // Si meta_j1 es mayor que 0, realizamos el cálculo
            $porcentajeJ4 = ($contadorRegistrosDelAnioJ4 / $parametro->meta_j4) * 100;
        } else {
            // Si meta_j1 es 0 o null, asignamos un valor predeterminado (por ejemplo, 0)
            $porcentajeJ4 = 0;
        }

        // Consultamos todos los registros de la J5
        $registrosDelAnioJ5 = Registro::whereYear('created_at', $anioActual)
            ->where('jurisdiccion_id',5)                                
            ->get();

        $contadorRegistrosDelAnioJ5 = $registrosDelAnioJ5->count();

        // Verificamos si meta_j2 tiene un valor válido (no es null ni 0)
        $metaJ5 = $parametro?->meta_j3;

        if ($metaJ5 > 0) {
            // Si meta_j1 es mayor que 0, realizamos el cálculo
            $porcentajeJ5 = ($contadorRegistrosDelAnioJ5 / $parametro->meta_j5) * 100;
        } else {
            // Si meta_j1 es 0 o null, asignamos un valor predeterminado (por ejemplo, 0)
            $porcentajeJ5 = 0;
        }   

        // Consultamos todos los registros de la J6
        $registrosDelAnioJ6 = Registro::whereYear('created_at', $anioActual)
            ->where('jurisdiccion_id',6)                                
            ->get();

        $contadorRegistrosDelAnioJ6 = $registrosDelAnioJ6->count();

        // Verificamos si meta_j2 tiene un valor válido (no es null ni 0)
        $metaJ6 = $parametro?->meta_j3;

        if ($metaJ6 > 0) {
            // Si meta_j1 es mayor que 0, realizamos el cálculo
            $porcentajeJ6 = ($contadorRegistrosDelAnioJ6 / $parametro->meta_j6) * 100;
        } else {
            // Si meta_j1 es 0 o null, asignamos un valor predeterminado (por ejemplo, 0)
            $porcentajeJ6 = 0;
        }   

        

        // Consultamos todos los registros de la J7
        $registrosDelAnioJ7 = Registro::whereYear('created_at', $anioActual)
            ->where('jurisdiccion_id',7)                                
            ->get();

        $contadorRegistrosDelAnioJ7 = $registrosDelAnioJ7->count();

        // Verificamos si meta_j2 tiene un valor válido (no es null ni 0)
        $metaJ7 = $parametro?->meta_j3;

        if ($metaJ7 > 0) {
            // Si meta_j1 es mayor que 0, realizamos el cálculo
            $porcentajeJ7 = ($contadorRegistrosDelAnioJ7 / $parametro->meta_j7) * 100;
        } else {
            // Si meta_j1 es 0 o null, asignamos un valor predeterminado (por ejemplo, 0)
            $porcentajeJ7 = 0;
        }    

        // Consultamos todos los registros de la J8
        $registrosDelAnioJ8 = Registro::whereYear('created_at', $anioActual)
            ->where('jurisdiccion_id',8)                                
            ->get();

        $contadorRegistrosDelAnioJ8 = $registrosDelAnioJ8->count();

        // Verificamos si meta_j2 tiene un valor válido (no es null ni 0)
        $metaJ8 = $parametro?->meta_j3;

        if ($metaJ8 > 0) {
            // Si meta_j1 es mayor que 0, realizamos el cálculo
            $porcentajeJ8 = ($contadorRegistrosDelAnioJ8 / $parametro->meta_j8) * 100;
        } else {
            // Si meta_j1 es 0 o null, asignamos un valor predeterminado (por ejemplo, 0)
            $porcentajeJ8 = 0;
        }    
        
        // Regresamos la vista con los datos
        return view('home', compact(
            'parametro',
            'anioActual',
            'contadorRegistros',
            'contadorRegistrosDelAnioJ1',
            'contadorRegistrosDelAnioJ2',
            'contadorRegistrosDelAnioJ3',
            'contadorRegistrosDelAnioJ4',
            'contadorRegistrosDelAnioJ5',
            'contadorRegistrosDelAnioJ6',
            'contadorRegistrosDelAnioJ7',
            'contadorRegistrosDelAnioJ8',
            'porcentajeJ1',
            'porcentajeJ2',
            'porcentajeJ3',
            'porcentajeJ4',
            'porcentajeJ5',
            'porcentajeJ6',
            'porcentajeJ7',
            'porcentajeJ8',
        ));
    }
}
