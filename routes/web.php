<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\UserController;


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
Route::get('/index', function (){
    return view('index');
})->name('user');

Route::get('/currency', [CurrencyController::class, 'showForm']);
Route::post('/currency', [CurrencyController::class, 'convert']);

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin/layout/layout');
    })->name('admin.home');
//  ADMIN.USER
Route::resource('user', UserController::class)->names([
    'index' => 'admin.user',
    'create' => 'admin.user.create',
    'store' => 'admin.user.store',
    'show' => 'admin.user.show',
   
    'update' => 'admin.user.update',
]);
Route::delete('/admin/user/{id}', [UserController::class, 'destroy'])->name('admin.user.destroy');
   
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




