<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('surveys', [\App\Http\Controllers\SurveyController::class, 'index'])->name('surveys.index');
Route::get('surveys/{id}', [\App\Http\Controllers\SurveyController::class, 'show'])->name('surveys.show');

Route::get('ratings/create',[\App\Http\Controllers\RatingController::class, 'create'])->name('ratings.create');
Route::post('ratings',[\App\Http\Controllers\RatingController::class, 'store'])->name('ratings.store');
