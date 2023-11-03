<?php
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\AuthController;
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

Route::get('/Usuarios/LoginUsuario', [UsuariosController::class,'index'])->name('LoginUsuarios');
Route::post('/Usuarios/LoginUsuario', [UsuariosController::class,'store'])->name('UsuariosStore');
Route::post('/', [UsuariosController::class,'store'])->name('AdminsStore');
Route::get('/Refris', function (){
    return view('Refris.Menu');
})->name('RefrisMenu');
//Route::get('/Usuarios/LoginUsuario', [AuthController::class,'index'])->name('LoginUsuarios');
//Route::post('/Usuarios/LoginUsuario', [AuthController::class,'login']);
//Route::post('/logout', 'AuthController@logout')->name('logout');
// Reemplaza 'DashboardController' y 'dashboard' por tus propios nombres