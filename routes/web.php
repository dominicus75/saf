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

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/{student}', [StudentController::class, 'show']);
Route::get('/students/{student}/edit', [StudentController::class, 'edit']);
Route::post('/students/{student}/edit', [StudentController::class, 'update']);
Route::get('/create/student', [StudentController::class, 'create']);
Route::post('/create/student', [StudentController::class, 'store']);
Route::get('/students/{student}/delete', [StudentController::class, 'destroy']);
Route::get('/search/student', [StudentController::class, 'search'])->name('search');

Route::get('/studygroups', [StudyGroupController::class, 'index']);
Route::get('/studygroups/{id}', [StudyGroupController::class, 'show']);
Route::get('/studygroups/{id}/edit', [StudyGroupController::class, 'edit']);
Route::post('/studygroups/{id}/edit', [StudyGroupController::class, 'update']);
Route::get('/studygroups/create', [StudyGroupController::class, 'create']);
Route::post('/studygroups/create', [StudyGroupController::class, 'store']);
Route::get('/studygroups/{id}/delete', [StudyGroupController::class, 'destroy']);
