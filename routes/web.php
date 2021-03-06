<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AdministradorController;

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
    return redirect()->route('inicio');
});

Route::get('/inicio', [UsuarioController::class, 'inicio'])->name('inicio');
Route::get('/login', [UsuarioController::class, 'login'])->name('login');
Route::post('/login', [UsuarioController::class, 'verificarCredenciales'])->name('login.form');
Route::get('/cerrarSesion', [UsuarioController::class, 'cerrarSesion'])->name('cerrar.sesion');
Route::get('/registro', [UsuarioController::class, 'registro'])->name('registro');
Route::post('/registro', [UsuarioController::class, 'registroForm'])->name('registro.form');

Route::get('/menu', [UsuarioController::class, 'menu'])->name('menu');
Route::get('/login_Admin', [AdministradorController::class, 'loginAdmin'])->name('login.Admin');
Route::post('/loginAdmin', [AdministradorController::class, 'verificarAdmininstrador'])->name('admin.form');