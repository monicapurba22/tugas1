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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','C_Dashboard@Dashboard');
Route::get('/pengeluaran','C_Dashboard@Pengeluaran');
Route::post('/pengeluaran/add','C_Dashboard@createPengeluaran');
Route::post('/pengeluaran/edit','C_Dashboard@updatePengeluaran');
Route::post('/pengeluaran/delete','C_Dashboard@deletePengeluaran');
Route::get('/pemasukan','C_Dashboard@Pemasukan');
Route::post('/pemasukan/add','C_Dashboard@createPemasukan');
Route::post('/pemasukan/edit','C_Dashboard@updatePemasukan');
Route::post('/pemasukan/delete','C_Dashboard@deletePemasukan');

// Route::get('/home', 'HomeController@index')->name('home');
