<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// ADMIN
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EvaluasiJawabanController;
use App\Http\Controllers\Admin\SoalController;
use App\Http\controllers\Admin\HistoryController;
// use App\Http\Controllers\Firebase\FirebaseController;
use App\Http\Controllers\Admin\PelatihanController;
use App\Http\Controllers\Admin\ProgressController;
use App\Http\Controllers\Admin\TestSoalController;
// USER
use App\Http\Controllers\User\DashboardController as UDashboardController;
use App\Http\Controllers\User\SurveyController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\TrainingController;

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

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/contactUs', function () {
    return view('contactUs');
})->name('contactUs');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'middleware' => 'admin',
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('test_soal', TestSoalController::class);
    Route::resource('evaluasi_jawaban', EvaluasiJawabanController::class);
    Route::resource('pelatihan', PelatihanController::class);
    Route::get('pelatihan/{pelatihan}/soal_baru', [PelatihanController::class, 'soal_baru'])->name('pelatihan.soal_baru');
    Route::resource('progress', ProgressController::class);
    Route::resource('soal', SoalController::class);
    Route::resource('user', UserController::class);
    Route::resource('history', HistoryController::class);
    Route::patch('user/{id}/promote', [UserController::class, 'promote'])->name('user.promote');
});

Route::group([
    'middleware' => 'user',
    'prefix' => 'user',
    'as' => 'user.'
], function () {
    Route::get('/', [UDashboardController::class, 'index']);
    Route::get('/contactUs', [UDashboardController::class, 'contactUs'])->name('contactUs');
    Route::resource('survey', SurveyController::class);

    Route::resource('training', TrainingController::class);
    Route::get('/training/evaluation_test/{id}', [TrainingController::class, 'evaluation_test'])->name('training.evalutaion_test');

    Route::resource('profile', ProfileController::class);
    Route::patch('survey/{id}/createHistory', [SurveyController::class, 'createHistory'])->name('survey.createHistory');
});
