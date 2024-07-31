<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
     * Método para ingresar al View Principal
     */
    public function index()
    {
        $data = DB::table('clientes')->count();
        $data1 = DB::table('users')->count();
        $data2 = DB::table('ventas')->count();

        return view('home', ['data' => $data, 'data1' => $data1, 'data2' => $data2]);
    }
    
}
