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

Route::get('/sekolah', [App\Http\Controllers\SekolahController::class, 'index']);
Route::get('/sekolah/create', [App\Http\Controllers\SekolahController::class, 'create']);
Route::post('/sekolah', [App\Http\Controllers\SekolahController::class, 'store']);
Route::get('/sekolah/{id}/edit', [App\Http\Controllers\SekolahController::class, 'edit']);
Route::patch('/sekolah/{id}', [App\Http\Controllers\SekolahController::class, 'update']);
Route::delete('/sekolah/{id}', [App\Http\Controllers\SekolahController::class, 'destroy']);

Route::get('/kursus', [App\Http\Controllers\KursusController::class, 'index']);
Route::get('/kursus/create', [App\Http\Controllers\KursusController::class, 'create']);
Route::post('/kursus', [App\Http\Controllers\KursusController::class, 'store']);
Route::get('/kursus/{id}/edit', [App\Http\Controllers\KursusController::class, 'edit']);
Route::patch('/kursus/{id}', [App\Http\Controllers\KursusController::class, 'update']);
Route::delete('/kursus/{id}', [App\Http\Controllers\KursusController::class, 'destroy']);


Route::get('/program', [App\Http\Controllers\ProgramController::class, 'index']);

Route::get('/kontak', [App\Http\Controllers\KontakController::class, 'index']);
