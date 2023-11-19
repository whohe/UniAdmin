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
    return view('dashboard');
});
Route::get('/teachers', function () {
    return view('teachers');
});
Route::get('/students', function () {
    return view('students');
});
Route::get('/subjects', function () {
    return view('subjects');
});
Route::get('/teachers-subjects', function () {
    return view('teachers-subjects');
});
Route::get('/students-subjects', function () {
    return view('students-subjects');
});
