<?php

namespace App\Exports;

use App\Models\Clues;
use Maatwebsite\Excel\Concerns\FromCollection;

class CluesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Clues::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        // Define los encabezados de las columnas
        return [
            'ID',
            'Nombre',
            'Jurisdicción',
            'Unidad',
            // Agrega otros campos según sea necesario
        ];
    }
}
