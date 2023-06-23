<?php

use App\Http\Controllers\Api\EvaluasiJawabanController;
use App\Http\Controllers\Api\HistoryController;
use App\Http\Controllers\Api\JawabanController;
use App\Http\Controllers\Api\PelatihanController;
use App\Http\Controllers\Api\ProgressController;
use App\Http\Controllers\Api\ProgressHistoryController;
use App\Http\Controllers\Api\SoalController;
use App\Http\Controllers\Api\TestJawabanController;
use App\Http\Controllers\Api\TestSoalController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

// V1
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

// V2
Route::resource('pelatihans', PelatihanController::class);

Route::post('createProgressHistory', [ProgressHistoryController::class, 'createProgressHistory']);
Route::post('getLastProgressHistory', [ProgressHistoryController::class, 'lastProgressHistory']);

Route::resource('testSoal', TestSoalController::class);

Route::post('createProgress', [ProgressController::class, 'CreateProgress']);
Route::post('updateProgress', [ProgressController::class, 'UpdateProgress']);
Route::post('showProgress', [ProgressController::class, 'ShowProgress']);
Route::post('uploadFile', [ProgressController::class, 'UploadFile']);

Route::post('insertEvaluasiJawaban', [EvaluasiJawabanController::class, 'InsertEvaluasiJawaban']);
Route::post('resultEvaluasiJawaban', [EvaluasiJawabanController::class, 'ResultEvaluasiJawaban']);

Route::post('insertTestJawaban', [TestJawabanController::class, 'InsertTestJawaban']);