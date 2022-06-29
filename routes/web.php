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
Route::get('/',function(){return view('index');});
Route::get('/content/tentang', function(){return view('tentang');});
Route::get('/content/kontak', function(){return view('kontak');});
Route::get('/content/data', 'user\UserController@index');
Route::post('proses/tambah','user\UserController@proses');
Route::get('/user/halaman-edit/{id}','user\UserController@update');
Route::post('/user/updateData/proses','user\UserController@actUpdate');
Route::get('/user/delete/{id}','user\UserController@delete');
Route::get('/user/halaman-detail/{id}','user\UserController@detail');
Route::get('/user/find','user\UserController@cari');


