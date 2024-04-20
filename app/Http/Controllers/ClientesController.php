<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AuditoriaController;

class ClientesController extends Controller
{
    /**
     * Método para ingresar al View Clientes
     */
    public function clientes(Request $request){
        $data = DB::table('clientes')->get();
        return view('clientes', ['data' => $data]);
    }

    /**
     * Método para registrar un nuevo Cliente
     */
    public function registrar_cliente(){
        date_default_timezone_set('America/Bogota');
        $hoy = date("Y-m-d H:i:s");
        $accion = 'Registro de Cliente';

        $datos = request();
        DB::table('clientes')
        ->insert(['cli_documento' => $datos['documento'],
                'cli_nombre' => $datos['nombre'],
                'cli_correo' => $datos['correo'],
                'cli_telefono' => $datos['telefono'],
                'cli_estado' => 1,
                'cli_ult_edicion' => $hoy,
                'cli_fecha_registro' => $hoy]);

        $objetoAuditoria = new AuditoriaController();
        $objetoAuditoria->registrar_movimiento($accion, $hoy, 1);
            
        return redirect('clientes');
    }

    /**
     * Método para editar un Cliente
     */
    public function actualizar_cliente(){
        date_default_timezone_set('America/Bogota');
        $hoy = date("Y-m-d H:i:s");
        $accion = 'Actualización de Cliente';

        $datos = request()->except('_token');
        DB::table('clientes')
            ->where('cli_id', '=', $datos['id'])
            ->update(['cli_documento' => $datos['documento'],
                'cli_nombre' => $datos['nombre'],
                'cli_correo' => $datos['correo'],
                'cli_telefono' => $datos['telefono'],
                'cli_ult_edicion' => $hoy
            ]);

        $objetoAuditoria = new AuditoriaController();
        $objetoAuditoria->registrar_movimiento($accion, $hoy, $datos['id']);
            
        return redirect('clientes');
    }

    /**
     * Método para habilitar un Cliente
     */
    public function habilitacion_cliente(){
        date_default_timezone_set('America/Bogota');
        $hoy = date("Y-m-d H:i:s");
        $accion = 'Habilitación de Cliente';

        $datos = request()->except('_token');
        DB::table('clientes')
        ->where('cli_id', '=', $datos['id2'])
        ->update([
            'cli_estado' => 1,
            'cli_ult_edicion' => $hoy
        ]);

        $objetoAuditoria = new AuditoriaController();
        $objetoAuditoria->registrar_movimiento($accion, $hoy, $datos['id2']);

        return redirect('clientes');
    }

    /**
     * Método para inhabilitar un Cliente
     */
    public function inhabilitacion_cliente(){
        date_default_timezone_set('America/Bogota');
        $hoy = date("Y-m-d H:i:s");
        $accion = 'Inhabilitación de Cliente';

        $datos = request()->except('_token');
        DB::table('clientes')
        ->where('cli_id', '=', $datos['id3'])
        ->update([
            'cli_estado' => 2,
            'cli_ult_edicion' => $hoy
        ]);

        $objetoAuditoria = new AuditoriaController();
        $objetoAuditoria->registrar_movimiento($accion, $hoy, $datos['id3']);

        return redirect('clientes');
    }

}
