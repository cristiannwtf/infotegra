<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;

// En lugar de la página de bienvenida por defecto
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CharacterController::class, 'listCharacters'])->name('characters.list');

Route::get('/fetch-characters', [CharacterController::class, 'fetchCharacters'])->name('characters.fetch');
Route::get('/save-characters', [CharacterController::class, 'saveCharacters'])->name('characters.save');
Route::get('/list-characters', [CharacterController::class, 'listCharacters'])->name('characters.list');
Route::get('/characters/{id}/edit', [CharacterController::class, 'edit'])->name('characters.edit');
Route::put('/characters/{id}', [CharacterController::class, 'update'])->name('characters.update');
