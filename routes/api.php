<?php

use App\Http\Controllers\Api\HistoryController;
use App\Http\Controllers\Api\JawabanController;
use App\Http\Controllers\Api\SoalController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\HistoryController as ControllersHistoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('getAllSoal', [SoalController::class, 'getAllSoal']);
Route::post('getSoalBy', [SoalController::class, 'getSoalBy']);
Route::post('getUser', [UserController::class, 'getUser']);
Route::post('createUser', [UserController::class, 'createUser']);
Route::post('updateUser', [UserController::class, 'updateUser']);
Route::post('createHistory', [HistoryController::class, 'createHistory']);
Route::post('getHistoryById', [HistoryController::class, 'getHistoryById']);
Route::post('getJawabanByHistory', [JawabanController::class, 'getJawabanByHistory']);
Route::post('reportJawaban', [JawabanController::class, 'reportJawaban']);
Route::post('insertJawabanByHistory', [JawabanController::class, 'insertJawabanByHistory']);