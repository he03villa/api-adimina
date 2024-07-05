<?php

use App\Http\Controllers\RolController;
use App\Http\Controllers\TipoDocumentoController;
use App\Http\Controllers\TipoPropiedadController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/rol', [RolController::class, 'index']);
Route::get('/user/{id}',[UsuarioController::class, 'showUser']);
Route::post('/login',[UsuarioController::class, 'login'])->middleware('validarLogin');
Route::post('/user/saveUser',[UsuarioController::class, 'saveUser'])->middleware(['validarCrearUser', 'existeUsuario']);
Route::post('/activarUser',[UsuarioController::class, 'activarUser'])->middleware(['activarUser', 'existeIdUsuario']);
Route::put('/user/{id}',[UsuarioController::class, 'updateUser'])->middleware(['actualizarUser']);
Route::post('/user/actulizarPass',[UsuarioController::class, 'updateUserPassword'])->middleware(['actulizarPassword', 'existeIdUsuario']);
Route::get('/tipoDocumentos', [TipoDocumentoController::class, 'index']);
Route::get('/tipoPropiedades', [TipoPropiedadController::class, 'index']);
