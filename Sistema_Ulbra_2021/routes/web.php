<?php

use App\Http\Controllers\EmpresaController;
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

Route::middleware(['auth:sanctum', 'verified', 'verify_cia'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth', 'verify_cia'])->get('/payments', function () {
    return view('paypal.paypal');
})->name('payments');

Route::group(['prefix' => 'cia'], function () {
    Route::get('complete/registrantion', [EmpresaController::class, 'create'])->name('complete_registration')->middleware('auth'); /* Rota para completar o registro da empresa */
    Route::post('complete/registrantion', [EmpresaController::class, 'store'])->name('complete_registration')->middleware('auth'); /* Rota para completar o registro da empresa */
});
