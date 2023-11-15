<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\GameController;

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

Route::get('/', [PublicController::class, 'home'])->name('home');
// creazione della rotta per la  visualizzazione del form
Route::get('/games/create',[GameController::class,'create'])->name('game.create');
Route::post('/games/store',[GameController::class,'store'])->name('game.store');
// rotta visualizzazione rotta
Route::get('/games',[GameController::class,'index'])->name('game.index');
Route::get('/game/{game}',[GameController::class,'show'])->name('game.show');

// Rotte per la modifica
Route::get('/game/edit/{game}',[GameController::class,'edit'])->name('game.edit');
Route::put('/game/update/{game}',[GameController::class,'update'])->name('game.update');
// rotta per la cancellazione
Route::delete('/game/delete/{game}',[GameController::class,'destroy'])->name('game.destroy');
// filtrare con la categoria 1-N
Route::get('/games/category/{category}',[GameController::class,'filterByCategory'])->name('game.filterByCategory');
