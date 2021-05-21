<?php

use App\Http\Controllers\PlantaController;
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

Route::get('/', [PlantaController::class, 'listar'])->name('planta.listar');
Route::get('planta-adicionar', [PlantaController::class, 'adicionar'])->name('planta.adicionar');
Route::post('planta-registrar', [PlantaController::class, 'registrar'])->name('planta.registrar');