<?php

use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/**
 * 
 * 
 * RUTAS DE REGISTRO
 * 
 * 
 */

 // Ruta para mostrar todos los registros
 Route::get('admin/indexRegistro',[RegistroController::class,'indexRegistro'])->name('indexRegistro');

 // Ruta para mostrar el formulario de registro
 Route::get('admin/createRegistro',[RegistroController::class,'createRegistro'])->name('createRegistro');

 // Ruta para guardar los datos del formulario
 Route::post('admin/storeRegistro',[RegistroController::class,'storeRegistro'])->name('storeRegistro');