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
    return view('welcome');
});

Route::get('/banyak_terjual', [App\Http\Controllers\OlahData::class, 'index'])->name('banyak_terjual');
Route::get('/customer_pembelian', [App\Http\Controllers\OlahData::class, 'pembelian_customer'])->name('customer_pembelian');

// Auth::routes();
Auth::routes(['register'=> false, 'reset'=>false]); 


// Route::get('/home', 'HomeController@index');
