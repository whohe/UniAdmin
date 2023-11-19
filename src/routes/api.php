<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\TeachersSubjectsController;
use App\Http\Controllers\StudentsSubjectsController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/teachers', [TeachersController::class,'index']);
Route::post('/teachers', [TeachersController::class,'create']);
Route::get('/teachers/{id}', [TeachersController::class,'read']);
Route::put('/teachers/{id}', [TeachersController::class,'update']);
Route::delete('/teachers/{id}', [TeachersController::class,'delete']);

Route::get('/subjects', [SubjectsController::class,'index']);
Route::post('/subjects', [SubjectsController::class,'create']);
Route::get('/subjects/{id}', [SubjectsController::class,'read']);
Route::put('/subjects/{id}', [SubjectsController::class,'update']);
Route::delete('/subjects/{id}', [SubjectsController::class,'delete']);

Route::get('/students', [StudentsController::class,'index']);
Route::post('/students', [StudentsController::class,'create']);
Route::get('/students/{id}', [StudentsController::class,'read']);
Route::put('/students/{id}', [StudentsController::class,'update']);
Route::delete('/students/{id}', [StudentsController::class,'delete']);


Route::post('/teachers/{id}/subjects', [TeachersSubjectsController::class,'create']);
Route::get('/teachers/{id}/subjects', [TeachersSubjectsController::class,'read']);
Route::get('/enrolled-subjects', [TeachersSubjectsController::class,'enrolled']);


Route::post('/students/{id}/subjects', [StudentsSubjectsController::class,'create']);
Route::get('/students/{id}/subjects', [StudentsSubjectsController::class,'read']);
Route::post('/students-subjects-validator', [StudentsSubjectsController::class,'ruleValidator']);

Route::get('/dashboard-report', [DashboardController::class,'report']);
Route::get('/dashboard-data', [DashboardController::class,'dashboard']);

