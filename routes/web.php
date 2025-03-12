<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fetch-characters', [CharacterController::class, 'fetchCharacters'])->name('characters.fetch');
Route::get('/save-characters', [CharacterController::class, 'saveCharacters'])->name('characters.save');
Route::get('/list-characters', [CharacterController::class, 'listCharacters'])->name('characters.list');
Route::get('/edit-character/{id}', [CharacterController::class, 'editCharacter'])->name('characters.edit');
Route::put('/update-character/{id}', [CharacterController::class, 'updateCharacter'])->name('characters.update');
