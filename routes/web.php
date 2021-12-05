<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudyGroupController;
use App\Http\Controllers\UserController;

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

Route::get('/', [StudentController::class, 'index']);

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::post('/students/{student}/update', [StudentController::class, 'update'])->name('students.update');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/{student}/delete', [StudentController::class, 'destroy'])->name('students.destroy');
Route::get('/search/student', [StudentController::class, 'search'])->name('students.search');

Route::get('/studygroups', [StudyGroupController::class, 'index'])->name('studygroups.index');
Route::get('/studygroups/{id}', [StudyGroupController::class, 'show'])->name('studygroups.show');
Route::get('/studygroups/{id}/edit', [StudyGroupController::class, 'edit'])->name('studygroups.edit');
Route::post('/studygroups/{id}/update', [StudyGroupController::class, 'update'])->name('studygroups.update');
Route::get('/studygroups/create', [StudyGroupController::class, 'create'])->name('studygroups.create');
Route::post('/studygroups/store', [StudyGroupController::class, 'store'])->name('studygroups.store');
Route::get('/studygroups/{id}/delete', [StudyGroupController::class, 'destroy'])->name('studygroups.destroy');
