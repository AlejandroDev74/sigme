<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Redireccionamientos principales
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Redireccionamiento del módulo de Clientes
Route::get('/clientes', [App\Http\Controllers\ClientesController::class, 'clientes'])->name('clientes');
Route::post('/registrar_cliente', [App\Http\Controllers\ClientesController::class, 'registrar_cliente'])->name('registrar_cliente');
Route::post('/actualizar_cliente', [App\Http\Controllers\ClientesController::class, 'actualizar_cliente'])->name('actualizar_cliente');
Route::post('/habilitacion_cliente', [App\Http\Controllers\ClientesController::class, 'habilitacion_cliente'])->name('habilitacion_cliente');
Route::post('/inhabilitacion_cliente', [App\Http\Controllers\ClientesController::class, 'inhabilitacion_cliente'])->name('inhabilitacion_cliente');

// Redireccionamiento del módulo de Comunicaciones
Route::get('/comunicaciones', [App\Http\Controllers\ComunicacionesController::class, 'comunicaciones'])->name('comunicaciones');

// Redireccionamiento del módulo de Logística
Route::get('/logistica', [App\Http\Controllers\LogisticaController::class, 'logistica'])->name('logistica');

// Redireccionamiento del módulo de Reportes
Route::get('/reportes', [App\Http\Controllers\ReportesController::class, 'reportes'])->name('reportes');

// Redireccionamiento del módulo de Tesorería
Route::get('/tesoreria', [App\Http\Controllers\TesoreriaController::class, 'tesoreria'])->name('tesoreria');

// Redireccionamiento del módulo de Usuarios
Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'usuarios'])->name('usuarios');

// Redireccionamiento del módulo de Ventas
Route::get('/ventas', [App\Http\Controllers\VentasController::class, 'ventas'])->name('ventas');
Route::get('/ventas_stands', [App\Http\Controllers\VentasController::class, 'ventas_stands'])->name('ventas_stands');
Route::get('/ventas_pop', [App\Http\Controllers\VentasController::class, 'ventas_pop'])->name('ventas_pop');
Route::get('/ventas_branding', [App\Http\Controllers\VentasController::class, 'ventas_branding'])->name('ventas_branding');
Route::get('/ventas_paquetes', [App\Http\Controllers\VentasController::class, 'ventas_paquetes'])->name('ventas_paquetes');
