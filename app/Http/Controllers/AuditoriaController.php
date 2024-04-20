<?php

namespace App\Http\Controllers;

use App\Models\Auditoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuditoriaController extends Controller
{
    /**
     * Método para registrar movimientos en la tabla de Auditoría
     */
    public function registrar_movimiento($accion, $hoy, $registro)
    {
        $datos = request();
        DB::table('auditoria')
        ->insert(['aud_usuario' => 1144165182,
                'aud_accion' => $accion,
                'aud_registro' => $registro,
                'aud_fecha_registro' => $hoy
            ]);
    }

}
