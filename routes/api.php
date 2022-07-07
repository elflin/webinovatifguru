<?php

use App\Http\Controllers\Api\HistoryController;
use App\Http\Controllers\Api\JawabanController;
use App\Http\Controllers\Api\PelatihanController;
use App\Http\Controllers\Api\ProgressHistoryController;
use App\Http\Controllers\Api\SoalController;
use App\Http\Controllers\Api\TestSoalController;
use App\Http\Controllers\Api\UserController;
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

Route::resource('pelatihans', PelatihanController::class);

Route::post('createProgressHistory', [ProgressHistoryController::class, 'createProgressHistory']);
Route::post('getLastProgressHistory', [ProgressHistoryController::class, 'lastProgressHistory']);

Route::resource('testSoal', TestSoalController::class);