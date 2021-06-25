<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ComentarioAlertaController;
use Illuminate\Support\Facades\Auth;

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

Route::view("/", "welcome");
Route::view("/ingreso-usuario","ingresarUsuarios");
Route::post("/ingresar-usuario",[UsuarioController::class,"guardar"]);
Route::get("/ingresar-usuario",function(){
 if (Auth::check()) {
     return view("ingresarUsuarios");
    }else{
         return redirect("/login");
     }

})->name("usuario");
Route::get("/mostrar-usuario",[UsuarioController::class,"mostrar"]);
Route::get("/actualizar-usuario/{id}",[UsuarioController::class,"mostrarUsuario"]);
Route::post("/actualizar-usuario",[UsuarioController::class,"actualizar"]);
Route::delete("/eliminar-usuario/{id}",[UsuarioController::class,"eliminar"])->name("eliminar");

Route::view("/ingreso-alerta","ingresarAlerta")->name("ingreso-alerta");
Route::post("/ingresar-alerta",[ComentarioAlertaController::class,"guardar"]);
Route::get("/ingresar-alerta",function(){
    if (Auth::check()) {
        return view("ingresarAlerta");
    }else{
        return redirect("/login");
    }

})->name("alerta");
Route::get("/mostrar-alerta",[ComentarioAlertaController::class,"mostrar"])->name("mostrar-alerta");
Route::get("/actualizar-alerta/{id}",[ComentarioAlertaController::class,"mostrarAler"]);
Route::post("/actualizar-alerta",[ComentarioAlertaController::class,"actualizar"]);
Route::delete("/eliminar-alerta/{id}",[ComentarioAlertaController::class,"eliminar"])->name("eliminar");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
