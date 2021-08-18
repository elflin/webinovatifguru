<?php

use App\Http\Controllers\Api\SoalController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('getAllSoal', [SoalController::class, 'getAllSoal']);
Route::post('getSoalBy', [SoalController::class, 'getSoalBy']);
Route::post('getUser', [UserController::class, 'getUser']);
Route::post('createUser', [UserController::class, 'createUser']);
Route::post('updateUser', [UserController::class, 'updateUser']);