<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratKeluarController;

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
    return view('pages.dashboard');
});

//Surat Keluar
Route::get('/suratkeluar', 'App\Http\Controllers\SuratKeluarController@index')->name('suratkeluar');
Route::get('/suratkeluar/create', 'App\Http\Controllers\SuratKeluarController@create');
Route::post('/suratkeluar/store', 'App\Http\Controllers\SuratKeluarController@store');
Route::get('/suratkeluar/show/{id}', 'App\Http\Controllers\SuratKeluarController@show');
Route::get('/suratkeluar/edit/{id}', 'App\Http\Controllers\SuratKeluarController@edit');
Route::post('/suratkeluar/update/{id}', 'App\Http\Controllers\SuratKeluarController@update');
Route::get('/suratkeluar/delete/{id}', 'App\Http\Controllers\SuratKeluarController@delete');
Route::get('/suratkeluar/destroy/{id}', 'App\Http\Controllers\SuratKeluarController@destroy');

//AJAX
Route::get('/suratkeluar/get_nomor', 'App\Http\Controllers\NomorController@get_nomor')->name('suratkeluar.get_nomor');
Route::get('/suratkeluar/get_naskah', 'App\Http\Controllers\NomorController@get_naskah')->name('suratkeluar.get_naskah');
Route::get('/suratkeluar/get_naskahdua', 'App\Http\Controllers\NomorController@get_naskahdua')->name('suratkeluar.get_naskahdua');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
