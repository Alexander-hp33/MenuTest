<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlatilloController; // importacion del controlador

Route::get('/', function () {
    return view('welcome');
});

Route::post('/platillo',[PlatilloController::class, 'store'])->name('platillo.store');

Route::get('/platillo',[PlatilloController::class,'index'])->name('platillo.index');

Route::put('/platillo/{platillo}', [PlatilloController::class, 'update'])->name('platillo.update');

Route::get('/platillo/{platillo}', [PlatilloController::class, 'show'])->name('platillo.show');

Route::delete('/platillo/{platillo}', [PlatilloController::class, 'destroy'])->name('platillo.destroy');

Route::put('/platillo/{platillo}', [PlatilloController::class, 'updateImage'])->name('platillo.update');


















