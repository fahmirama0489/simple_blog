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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/', function () {
//    return view('welcome');
//});

//Bagian Depan
Route::get('/', function() {
    return view('master');
});

//Tambah Artikel
Route::get('/add', function() {
    return view('add');
});

//Bagian Depan Admin
Route::get('/admin', 'ArtikelController@show_by_admin');

//Melihat Artikel secara detail
Route::get('/detail/{id}', 'ArtikelController@detail');

//Memasukkan Data
Route::get('/', 'ArtikelController@show');
Route::post('/add_process', 'ArtikelController@add_process');

//Edit Artikel
Route::get('/edit/{id}', 'ArtikelController@edit');
Route::post('/edit_process', 'ArtikelController@edit_process');

//Hapus Artikel
Route::get('/delete/{id}', 'ArtikelController@delete');
Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
