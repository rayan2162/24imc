<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



use App\Http\Controllers\SubmissionController;

Route::get('/call-for-paper', [SubmissionController::class, 'create'])->name('submission.form');
Route::post('/call-for-paper', [SubmissionController::class, 'store'])->name('submission.store');
Route::get('/dashboard', [SubmissionController::class, 'dashboard'])->name('dashboard');


