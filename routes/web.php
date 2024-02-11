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
Route::get('/create_student', [App\Http\Controllers\StudentController::class, 'create_student'])->name('create_student');
Route::post('/insert_student', [App\Http\Controllers\StudentController::class, 'insert_student'])->name('insert_student');
Route::get('/edit_student/{id}', [App\Http\Controllers\StudentController::class, 'edit_student'])->name('edit_student');
Route::put('/update-student/{id}', [App\Http\Controllers\StudentController::class, 'update_student'])->name('update_student');
