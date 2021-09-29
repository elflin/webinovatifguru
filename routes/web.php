<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SoalController;
use App\Http\controllers\Admin\HistoryController;

use App\Http\Controllers\User\DashboardController as UDashboardController;
use App\Http\Controllers\User\SurveyController;


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
], function() {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('soal', SoalController::class);
    Route::resource('user', UserController::class);
    Route::resource('history', HistoryController::class);
    Route::patch('user/{id}/promote', [UserController::class, 'promote'])->name('user.promote');
});

Route::group([
    'middleware' => 'user',
    'prefix' => 'user',
    'as' => 'user.'
], function() {
    Route::get('/', [UDashboardController::class, 'index']);
    Route::get('/contactUs', [UDashboardController::class, 'contactUs'])->name('contactUs');
    Route::resource('survey', SurveyController::class);
});