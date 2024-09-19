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
})->name('home');



Route::get('/currency', [CurrencyController::class, 'showForm']);
Route::post('/currency', [CurrencyController::class, 'convert']);

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin/layout/layout');
    })->name('admin.home');
//  ADMIN.USER
       Route::prefix('/user')->group(function () {
           Route::get('/', function () {
                   return view('admin/User/userlist');
          })->name('admin.user');

          Route::get('/add', function () {
            return view('admin/User/useradd');
         })->name('admin.useradd');

       Route::get('/edit', function ($id = 1) {
         return view('admin/User/useredit', ['id' => $id]);
            })->name('admin.useredit');

       Route::get('/profile', function ($id = 1) {
        return view('admin/User/userprofile', ['id' => $id]);
            })->name('admin.userprofile');
            });

      //  ADMIN.USER
      Route::prefix('/Destinations')->group(function () {
        Route::get('/tour', function () {
                return view('admin/tour/touradmin');
       })->name('admin.touradmin');

     
         });

       
         Route::get('/currency', function () {
                    return view('admin/currencyadmin/currency');
           }) ->  name('admin.currency');
        

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

