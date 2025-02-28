<?php

use App\Http\Controllers\CluesController;
use App\Http\Controllers\ParametroController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return redirect()->route('login');
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

 /**
 * 
 * 
 * RUTAS DE PARAMETRO
 * 
 * 
 */

  // Ruta para mostrar el formulario de registro de parametro
  Route::get('admin/createParametro',[ParametroController::class,'createParametro'])->name('createParametro');

  // Ruta para almacenar los datos
  Route::post('admin/storeParametro',[ParametroController::class,'storeParametro'])->name('storeParametro');

  // Ruta para mostrar todos los registros
  Route::get('admin/indexParametro',[ParametroController::class,'indexParametro'])->name('indexParametro');

  // Ruta para editar los parametros
  Route::get('admin/editParametro/{id}',[ParametroController::class,'editParametro'])->name('editParametro');

  // Ruta para actualziar los parametros
  Route::put('admin/updateParametro/{id}',[ParametroController::class, 'updateParametro'])->name('updateParametro');

  /**
   * 
   * 
   * RUTAS PARA USUARIOS
   * 
   * 
   */

   // Ruta para mostrar todos los usuarios
  Route::get('admin/indexUsuario',[UserController::class,'indexUsuario'])->name('indexUsuario');

  // Ruta para registrar un nuevo usuario
  Route::get('admin/createUsuario',[UserController::class,'createUsuario'])->name('createUsuario');

  // Ruta para guardar los datos
  Route::post('admin/storeUsuario',[UserController::class,'storeUsuario'])->name('storeUsuario');

   /**
   * 
   * 
   * RUTAS PARA CLUES
   * 
   * 
   */

  Route::get('export-clues', [CluesController::class, 'export'])->name('clues.export');
