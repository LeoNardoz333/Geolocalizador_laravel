<?php
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\RefrisController;
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
Route::get('/Refris/Menu', function (){
    return view('Refris.Menu');
})->name('RefrisMenu');
Route::get('/Refris',[RefrisController::class,'index'])->name('TablaRefris');
Route::get('/Refris/indexAdmins',[RefrisController::class,'indexAdmins'])->name('TablaRefrisAdmins');
Route::get('/Refris/AddRefris',[RefrisController::class,'create'])->name('AgregarRefri');
Route::post('Refris',[RefrisController::class,'store'])->name('InsertarRefri');
Route::get('/Refris/{id}/UpdateRefris',[RefrisController::class,'edit'])->name('ModificarRefris');
Route::put('Refris/{id}/indexAdmins', [RefrisController::class,'update'])->name('UpdateRefris');
Route::delete('/Refris/{id}/indexAdmins', [RefrisController::class, 'destroy'])->name('EliminarRefris');
//Administradores
Route::get('/Usuarios',[AdminsController::class,'index'])->name('TablaUsuarios');
Route::get('/Usuarios/AgregarAdmin',[AdminsController::class,'create'])->name('AddUsuario');
Route::post('/Usuarios',[AdminsController::class,'store'])->name('AgregarUsuario');
Route::get('/Usuarios/{id}/ModificarAdmin', [AdminsController::class, 'edit'])->name('ModificarUsuario');
Route::put('/Usuarios/{id}', [AdminsController::class, 'update'])->name('UpdateUsuario');
Route::delete('/usuarios/{id}', [AdminsController::class, 'destroy'])->name('EliminarUsuario');

Route::get('/Refris/mapa',[RefrisController::class,'owo1'])->name('owo2');