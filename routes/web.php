<?php
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\AdminsController;
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

//Usuarios
Route::get('/Usuarios/LoginUsuario', [UsuariosController::class,'index'])->name('LoginUsuarios');
Route::post('/Usuarios/LoginUsuario', [UsuariosController::class,'store'])->name('UsuariosStore');
Route::post('/', [UsuariosController::class,'store'])->name('AdminsStore');
//Refris
Route::get('/Refris', function (){
    return view('Refris.Menu');
})->name('RefrisMenu');
//Administradores
Route::get('/Usuarios',[AdminsController::class,'index'])->name('TablaUsuarios');
Route::get('/Usuarios/AgregarAdmin',[AdminsController::class,'create'])->name('AddUsuario');
Route::post('/Usuarios',[AdminsController::class,'store'])->name('AgregarUsuario');
Route::get('/Usuarios/{id}/ModificarAdmin', [AdminsController::class, 'edit'])->name('ModificarUsuario');
Route::put('/Usuarios/{id}', [AdminsController::class, 'update'])->name('UpdateUsuario');
Route::delete('/usuarios/{id}', [AdminsController::class, 'destroy'])->name('EliminarUsuario');