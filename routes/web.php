<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurrencyController;
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
    return view('index');
});



Route::get('/currency', [CurrencyController::class, 'showForm']);
Route::post('/currency', [CurrencyController::class, 'convert']);

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin/layout/layout');
    })->name('admin.home');

       Route::prefix('/user')->group(function () {
           Route::get('/', function () {
                   return view('admin/userlist');
          })->name('admin.user');
         });

      
       
         Route::get('/currency', function () {
                    return view('admin/currencyadmin/currency');
           }) ->  name('admin.currency');
        

});

