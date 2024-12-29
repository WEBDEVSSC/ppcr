<?php

namespace App\Http\Controllers;

use App\Models\Clues;
use Illuminate\Http\Request;
use App\Exports\CluesExport;
use Maatwebsite\Excel\Facades\Excel;

class CluesController extends Controller
{
    
    public function export()
    {
        // Exporta los datos usando la clase CluesExport
        return Excel::download(new CluesExport, 'clues.xlsx');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Clues $clues)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clues $clues)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clues $clues)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clues $clues)
    {
        //
    }
}
