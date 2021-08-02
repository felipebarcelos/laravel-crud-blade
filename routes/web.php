<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

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

Route::resource('contato', ContatoController::class);
/*Route::get('/',[ContatoController::class, 'index'])->name('contato.index');
Route::get('criar',[ContatoController::class, 'create'])->name('contato.create');
Route::get('show',[ContatoController::class, 'show'])->name('contato.show');
Route::get('edit',[ContatoController::class, 'edit'])->name('contato.edit');
Route::get('store',[ContatoController::class, 'store'])->name('contato.store');
Route::post('store',[ContatoController::class, 'store'])->name('contato.store');
Route::delete('destroy',[ContatoController::class, 'destroy'])->name('contato.destroy');

Route::get('update',[ContatoController::class, 'update'])->name('contato.update');*/

Route::get('/', function () {
    return view('welcome');
});