<?php

namespace App\Exports;

use App\Usuario;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsuariosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Usuario::all();
    }
}
