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
Route::get('index', function () {
    return view('index');
});

Route::get('test', function () {
    return view('test');
});

Route::get('test1', function () {
    return view('test1');
});

Route::get('welcome', function () {
    return view('welcome');
});

