<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\TipoRequerimiento;
use Illuminate\Http\Request;

class SolicitudReporteController extends Controller
{
    public function categoria(){
        return response()->json([
            'respuesta' => true,
            'categorias' => Categoria::all()
        ]);
    }

    public function tipoRequerimiento($id){
        $tipoRequerimientos = TipoRequerimiento::where('categoria_id', $id)
            ->get();
        if ($tipoRequerimientos){
            return response()->json([
                'respuesta' => true,
                'tipoRequerimientos' => $tipoRequerimientos
            ]);
        }
        return response()->json([
            'respuesta' => false,
            'mensaje' => 'No se ha encontrado registros'
        ]);
    }
}
