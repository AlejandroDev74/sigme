<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VentasController extends Controller
{
    /**
     * Método para ingresar al View Ventas
     */
    public function ventas()
    {
        return view('ventas');
    }

    /**
     * Método para ingresar al View Ventas Stand
     */
    public function ventas_stands(){

        $data = DB::table('clientes')->get();

        return view('ventas_stands', ['data' => $data]);
    }

    /**
     * Método para ingresar al View Ventas POP
     */
    public function ventas_pop()
    {
        $data = DB::table('clientes')->get();
        $data2 = DB::table('productos_pop')->get();
        $data3 = DB::table('ventas_pop')->get();

        return view('ventas_pop', ['data' => $data, 'data2' => $data2, 'data3' => $data3]);
    }

    /**
     * Método para ingresar al View Ventas Branding
     */
    public function ventas_branding()
    {
        $data = DB::table('clientes')->get();

        return view('ventas_branding', ['data' => $data]);
    }

     /**
     * Método para ingresar al View Ventas POP
     */
    public function ventas_paquetes()
    {
        $data = DB::table('clientes')->get();

        return view('ventas_paquetes', ['data' => $data]);
    }

}
