<?php

use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('menu');
});

Route::resource('vehicles', VehicleController::class);
Route::get('/vehicles/find', [VehicleController::class, 'findByPlate'])->name('vehicles.find');
Route::get('/vehicles/statistics', [VehicleController::class, 'statistics'])->name('vehicles.statistics');
Route::get('/vehicles/{vehicle}', [VehicleController::class, 'show'])->name('vehicles.show');
Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles.index');


