<?php

use App\Http\Controllers\VehicleController;
use App\Http\Controllers\BrandController;
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
Route::get('/veiculos', [VehicleController::class, 'index'])->name('vehicles.index');
Route::get('/veiculos/novo', [VehicleController::class, 'create'])->name('vehicles.create');
Route::post('/veiculos', [VehicleController::class, 'store'])->name('vehicles.store');
Route::get('/veiculos/{veihcle}', [VehicleController::class, 'show'])->name('vehicles.show');
Route::get('/veiculos/{veihcle}/editar', [VehicleController::class, 'edit'])->name('vehicles.edit');
Route::patch('/veiculos/{veihcle}', [VehicleController::class, 'update'])->name('vehicles.update');
Route::delete('/veiculos/{veihcle}', [VehicleController::class, 'destroy'])->name('vehicles.destroy');

Route::resource('brands', BrandController::class);