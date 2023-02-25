<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CadastrarController;
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
    return view('welcome');
});
Route::get('bemvido', HomeController::class);

//Route::controller(CadastrarController::class)->group(function(/*$show*/){

    /*/como estamos agrupando puedo liminar el
     controlador de la linea de codigo ejemplo
      sin grupo abajo
     */
    //Route::get('home',[CadastrarController::class, 'index']);

Route::get('home',[CadastrarController::class, 'index'])->name('cadastros.index');
Route::get('cadastro',[CadastrarController::class, 'create'])->name('cadastros.create');;
Route::post('cadastro',[CadastrarController::class, 'store'])->name('cadastros.store');
Route::get('cadastro/{show}',[CadastrarController::class, 'show'])->name('cadastros.show');
//});
