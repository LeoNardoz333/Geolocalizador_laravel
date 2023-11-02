<?php

use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

/*Route::get('/Productos', function (){
    return view('Productos.index');
})->name('ProductosIndex');*/

Route::get('/Productos', [ProductosController::class,'index'])->name('ProductosIndex');

Route::get('/Productos/Create', [ProductosController::class,'create'])->name('ProductosCreate');

Route::post('/Productos', [ProductosController::class,'store'])->name('ProductosStore');