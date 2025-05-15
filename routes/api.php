<?php

use App\Http\Controllers\CharacterController;
use Illuminate\Support\Facades\Route;

Route::get('/all-characters', [CharacterController::class, 'getAllCharacters']);
Route::get('/character/{id}', [CharacterController::class, 'getCharacter']);
Route::get('/find-characters', [CharacterController::class, 'findCharacters']);