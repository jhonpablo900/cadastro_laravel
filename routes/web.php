<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cadastro_Sistema;
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
    return view('welcome');
});
Route::get('/inicio',[Cadastro_Sistema::class,'pagina_inicial'])->name('inicio.pagina_inicial');
Route::post('/cadastrado',[Cadastro_Sistema::class,'cadastro_inserido'])->name('cadastrado.cadastro_inserido');