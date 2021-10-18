<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ServicoController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

/* Route::middleware(['auth:sanctum', 'verified', 'verify_cia'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */

Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard')->middleware('auth', 'verify_cia');

Route::middleware(['auth', 'verify_cia'])->get('/payments', function () {
    return view('paypal.paypal');
})->name('payments');

Route::group(['prefix' => 'cia'], function () {
    Route::get('complete/registrantion', [EmpresaController::class, 'create'])->name('complete_registration')->middleware('auth'); /* Rota para completar o registro da empresa */
    Route::post('complete/registrantion', [EmpresaController::class, 'store'])->name('complete_registration')->middleware('auth'); /* Rota para completar o registro da empresa */
    Route::post('create/service', [ServicoController::class, 'store'])->name('create_service')->middleware('auth'); /* Rota salvar serviço */

});

Route::group(['prefix' => 'services'], function () {
    Route::get('choose/{id}', [ServicoController::class, 'index'])->name('choose_service')->middleware('auth');

});