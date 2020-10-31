<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DecResiduosController;
use App\Http\Controllers\RecepcionController;
use App\Http\Controllers\IngresoDocController;
use App\Http\Controllers\ParteController;
use App\Http\Controllers\PatenteController;
use App\Http\Controllers\InversionController;
use App\Http\Controllers\TerminoController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\LeyController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\EgresoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::resource('residuos', DecResiduosController::class);
Route::resource('recepcion', RecepcionController::class);
Route::resource('ingresodoc', IngresoDocController::class);
Route::resource('partes', ParteController::class);
Route::resource('patentes', PatenteController::class);
Route::resource('inversiones', InversionController::class);
Route::resource('termino', TerminoController::class);
Route::resource('sucursales', SucursalController::class);
Route::resource('ley', LeyController::class);
Route::resource('ingreso', IngresoController::class);
Route::resource('egreso', EgresoController::class);



//vistas
Route::get('/{id}/residuos', [DecResiduosController::class, 'registrada'])->name('residuos');
Route::get('/{id}/recepcion', [RecepcionController::class, 'registrada'])->name('recepcion');
Route::get('/{id}/ingresodoc', [IngresoDocController::class, 'registrada'])->name('ingresodoc');
Route::get('/{id}/partes', [ParteController::class, 'registrada'])->name('partes');
Route::get('/{id}/patentes', [PatenteController::class, 'registrada'])->name('patentesregistradas');
Route::get('/{id}/inversiones', [InversionController::class, 'registrada'])->name('inversiones');
Route::get('/{id}/termino', [TerminoController::class, 'registrada'])->name('termino');
Route::get('/{id}/sucursales', [SucursalController::class, 'registrada'])->name('sucursales');
Route::get('/{id}/ley', [LeyController::class, 'registrada'])->name('ley');
Route::get('/{id}/ingreso', [IngresoController::class, 'registrada'])->name('ingreso');
Route::get('/{id}/egreso', [EgresoController::class, 'registrada'])->name('egreso');

//PDF'S
Route::get('/{id}/residuosdescarga', [DecResiduosController::class, 'pdf'])->name('residuos.pdf');
Route::get('/{id}/recepciondescarga', [RecepcionController::class, 'pdf'])->name('recepcion.pdf');
Route::get('/{id}/ingresodocdescarga', [IngresoDocController::class, 'pdf'])->name('ingresodoc.pdf');
Route::get('/{id}/partesdescarga', [ParteController::class, 'pdf'])->name('partes.pdf');
Route::get('/{id}/patentesdescarga', [PatenteController::class, 'pdf'])->name('patentes.pdf');
Route::get('/{id}/inversionesdescarga', [InversionController::class, 'pdf'])->name('inversiones.pdf');
Route::get('/{id}/terminodescarga', [TerminoController::class, 'pdf'])->name('termino.pdf');
Route::get('/{id}/sucursalesdescarga', [SucursalController::class, 'pdf'])->name('sucursales.pdf');
Route::get('/{id}/leydescarga', [LeyController::class, 'pdf'])->name('ley.pdf');
Route::get('/{id}/ingresodescarga', [IngresoController::class, 'pdf'])->name('ingreso.pdf');
Route::get('/{id}/egresodescarga', [EgresoController::class, 'pdf'])->name('Egreso.pdf');