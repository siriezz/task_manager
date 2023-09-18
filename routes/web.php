<?php

use App\Http\Controllers\TaskController;
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
Route::get('/tugas', [TaskController::class, 'index'])->name('tugas.index');
Route::get('/tugas/buat', [TaskController::class, 'create'])->name('tugas.buat');
Route::get('/tugas/muncul', [TaskController::class, 'show'])->name('tugas.muncul');
Route::get('/tugas/edit', [TaskController::class, 'edit'])->name('tugas.edit');
